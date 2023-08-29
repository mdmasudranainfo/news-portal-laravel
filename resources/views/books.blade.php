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
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
       @foreach($books as $i => $book)
           <tr>
               <th scope="row">{{$i+1}}</th>
               <td>{{$book->bookName}}</td>
               <td>{{$book->price}}</td>
               <td>{{$book->author}}</td>
               <td><a href='{{url('book-update/'.$book->id)}}' class="btn btn-primary">Update</a></td>
               <td><button book_id='{{$book->id}}' class="btn btn-danger delete_book">Delete</button></td>
           </tr>
       @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function(){

        $(".delete_book").on('click',function(e){
            e.preventDefault();

            let book_id = $(this).attr("book_id");

            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete this book!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        'url':"{{ route('delete.book') }}",
                        'type':'post',
                        'dataType':'text',
                        data:{masud_id:book_id},
                        success:function(data)
                        {
                            if(data === "success"){
                                Swal.fire(
                                    'Deleted!',
                                    'Your book has been deleted.',
                                    'success'
                                )
                            }
                        }
                    });

                }
            })

        })

    })
</script>
@endsection
