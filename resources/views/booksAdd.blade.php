@extends('layout.app')
@section('content')
    <div class="container mt-5">
        <form action={{route('add.book')}} method="post" >
            @csrf
           <div class="">
               <h4>Book Name</h4>
               <input name="bookName" class="form-control" type="text">
           </div>
            <div class="">
                <h4>Price</h4>
                <input name="price" class="form-control" type="text">
            </div>
            <div class="">
                <h4>Author</h4>
                <input name="author" class="form-control" type="text">
            </div>

            <input type="submit" class="btn btn-primary mt-4">
        </form>
    </div>
@endsection
