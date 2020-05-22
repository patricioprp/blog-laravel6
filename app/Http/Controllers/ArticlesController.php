<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;


class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = Article::Search($request->title)->orderBy('id','DESC')->paginate(5);
        $articles->each(function($articles){
            $articles->category;
            $articles->user;
        });

        return view ('admin.articles.index')
        ->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        $tags = Tag::orderBy('name','ASC')->pluck('name','id');

        return view ('admin.articles.create')
            ->with('categories',$categories)
            ->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request para campos duplicados o con caracteres minimos
        $this->validate($request,[
            'title' => 'required|unique:articles|min:10|max:255',
            'category_id'=>'required',
            'content'=>'min:60|required',
            'image'=>'required|image|mimes:jpeg,png|max:3000'
        ]);
        //Manipulacion de Imagenes

        if($request->file('image'))
        {
        $file=$request->file('image');
        $name= 'blogLagaceta_' . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path() . '/images/articles/';
        $file->move($path,$name);
    }
        $article = new Article($request->all());
        $article->user_id = \Auth::user()->id;
        $article->save();

        $article->tags()->sync($request->tags);

        $image= new Image();
        $image-> name=$name;
        $image->article()->associate($article);
        $image->save();

        flash("Noticia " .$article->title ." Creada Correctamente");
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $article->category;
        $categories = Category::orderBy('name','ASC')->pluck('name','id'); // no se usa lists
        $tags = Tag::orderBy('name','DESC')->pluck('name','id'); //ya no se usa list, ahora se usa pluck
        $my_tags = $article->tags->pluck('id')->ToArray();

        return view('admin.articles.edit')
            ->with('categories',$categories)
            ->with('article',$article)
            ->with('tags',$tags)
            ->with('my_tags',$my_tags);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->fill($request->all());
        $article->save();

        $article->tags()->sync($request->tags);
        flash('Articulo '. $article->title . 'a sido actualizado de forma exitosa');
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $name= Image::where('article_id', $id)->value('name');
            unlink(public_path() .  "/images/articles/$name" );
            $article = Article::find($id);
            $article->delete();
            flash('Articulo '. $article->title . 'a sido borrado de forma exitosa')->error();
            return redirect()->route('articles.index');
    }

}
