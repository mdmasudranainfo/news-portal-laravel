@extends('layout.app')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
                <th scope="col">Details</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $key => $item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->author }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->details }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
