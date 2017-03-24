<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests;

class CategoryController extends Controller
{
  public function get(){
      $id = request()->route("id");
      if(is_null($id)){
   $categories = Category::all();
  return view('categories', ["categories"=>$categories]);
   }
  $category = Category::find($id);
   if(is_null ($category)){
       return redirect (route("category.get"));
       
   }
   return view("category",["category"=>$category]);
    }

public function create(){
    $data = request()->all;
    $name = array_get($data,"name");
    $content = array_get($data,"category_id");
    $tiitle = array_get($data,"tiitle");
    if(is_null ($name) || strlen($name) ==0){
            return redirect(route("category.get"));
}
$category = new Categoty();
$category->name = $name;
$category->save();
return redirect(route("category.get"));
}


}
$article = new Article();
$article->title = $title;
$article->content = ();
return redirect(route("category.get"));




    }
    
    
     public function get(){
    $id = request()->all;
    $name = array_get($data,"name");
    if(is_null ($name) || strlen($name) ==0){
            return redirect(route("article.get".get"));
}
