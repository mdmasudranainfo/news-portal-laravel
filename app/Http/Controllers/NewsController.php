<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\News;
use Illuminate\Http\Request;
use function Laravel\Prompts\alert;
use Response;

class NewsController extends Controller
{

//    update Book
public  function updateBooks(Request $request , $id){
    $bookName=$request->input('bookName');
    $price=$request->input('price');
    $author=$request->input('author');

    $object= Books::find($id);
    $object->bookName=$bookName;
    $object->price=$price;
    $object->author=$author;
    $object->update();
    return "update success";


}


//    get single book
public function singleBook(Request $request , $id){
    $data=Books::find($id);
    return $data;

}

//    delete Book
public function deleteBooks(Request $request ,$id){
    $data=Books::find($id)->delete();
    return "delete success";

}

//    add Book api
public function addBookApi(Request $request){

    $bookName=$request->input('bookName');
    $price=$request->input('price');
    $author=$request->input('author');

    $object= new Books();
    $object->bookname=$bookName;
    $object->price=$price;
    $object->author=$author;
    $object->save();
    return "data added success";


}

//    update books
public function bookUpdate($id)
{
    $book=Books::find($id);
    return view('bookUpdate' ,compact('book'));
}

public function updateBook(Request $request,$id){

    $book = Books::find($id);
    $book->bookName=$request->input('bookName');
    $book->price=$request->input('price');
    $book->author=$request->input('author');
    $book->update();
    return redirect('/books')->with('status', "update successfully");

}

public function deleteBook(Request $request)
{
    $query = Books::find($request->masud_id)->delete();
    if($query){
        return 'success';
    }else{
        return 'error';
    }
}

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

public  function showBooksByApi(){
    $data = Books::all();
    return Response::json(['books'=>$data]);
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
