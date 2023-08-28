@extends('layout.app')
{{--content--}}
@section('content')
<form action={{route('save.news')}} method="post" class="container ">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">title</label>
      <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Distribution</label>
        <textarea name="details" type="text" class="form-control" id="exampleInputPassword1"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Author</label>
        <select name="author" class="form-select" aria-label="Default select example">
            <option disabled selected>Open this select menu</option>
            <option value="Manik">Manik</option>
            <option value="Hasan">Hasan</option>
            <option value="Jamil">Jamil</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
