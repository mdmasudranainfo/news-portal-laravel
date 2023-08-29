@extends('layout.app')
@section('content')

    <div class="container mt-5">
        <h1>Update book</h1>
        <form  action="{{ route('update.Book',$book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="">
                <h4>Book Name</h4>
                <input name="bookName" value="{{$book->bookName}}" class="form-control" type="text">
            </div>
            <div class="">
                <h4>Price</h4>
                <input name="price" value="{{$book->price}}"  class="form-control" type="text">
            </div>
            <div class="">
                <h4>Author</h4>
                <input name="author" value="{{$book->author}}"  class="form-control" type="text">
            </div>

            <input type="submit" class="btn btn-primary mt-4">
        </form>
    </div>
@endsection
