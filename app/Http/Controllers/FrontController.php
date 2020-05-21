<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() //para fecha y hora
    {
        Carbon::setLocale('es');
    }

    public function index()
    {
        $articles = Article::orderBy('id','DESC')->paginate(4);
        $articles->each(function ($articles){
            $articles->category;
            $articles->images;
        });
        //dd($article);
        return view('front.index')
            ->with('articles',$articles);
    }


}
