<?php

namespace App\Http\ViewComposers;
use Illuminate\Contracts\View\View;
use App\Category;
use App\Tag;


class asideComposer{

    public function compose(View $view){
        $categories = Category::orderBy('name','DESC')->get();
        $tags = Tag::orderBy('name','DESC')->get();

      //  foreach($categories as $category){
         //   dd($categories->articles()->title)
        $view->with('categories',$categories)
            ->with('tags',$tags);

    }

}

