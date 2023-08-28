@extends('layout.app')
@section('content')

<div class="container">

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Book Name</th>
            <th scope="col">Price</th>
            <th scope="col">Author</th>
        </tr>
        </thead>
        <tbody>
       @foreach($books as $i => $book)
           <tr>
               <th scope="row">{{$i+1}}</th>
               <td>{{$book->bookName}}</td>
               <td>{{$book->price}}</td>
               <td>{{$book->author}}</td>

           </tr>

       @endforeach
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>

        </tbody>
    </table>
</div>


@endsection
