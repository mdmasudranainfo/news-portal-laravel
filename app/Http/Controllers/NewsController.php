<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

//    view data
public  function viewData(){
    $data['items'] = News::all();
    return view('viewdata',$data);
}

//books
public function bookAdd()
{
    return view('booksAdd');
}

//post book
public function addBook(Request $request){
    $bookName=$request->bookName;
    $price=$request->price;
    $author=$request->author;

    $object =new Books();
    $object->bookName=$bookName;
    $object->price=$price;
    $object->author=$author;
    $object->save();
    return 'book added successfully';

}


//view books

public  function books(){
    $data['books']=Books::all();
    return view('books',$data);

}


    //
    public function news(){
        return view('news');
    }

    public function saveNews(Request $request){
        $title=$request->title;
        $details=$request->details;
        $author=$request->author;

        $object =new News();
        $object->title=$title;
        $object->details=$details;
        $object->author=$author;
        $object->save();
        return 'news added successfully';

    }


//    api text

public function textApi( Request $request){

      $name=$request->input('name');
      $email=$request->input('Email');
      return $name;

}
}
