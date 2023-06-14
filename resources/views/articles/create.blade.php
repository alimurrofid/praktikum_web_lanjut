@extends('layouts.app')
@section('content')
<div class="container">
        <a href="{{route('articles.index')}}" class="btn btn-primary my-2"> <~Article</a>
        <form action="/articles" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group my-2">
            <label for="title">Title: </label>
            <input class="form-control" type="text" placeholder="Title" name="title" id="title" required>
        </div>
        <div class="form-group my-2">
            <label for="content">Content: </label>
            <textarea class="form-control" name="content" id="content" cols="30" rows="10" required></textarea>
        </div>
        <div class="form-group my-2">
            <label for="image">Feature Image: </label>
            <input class="form-control" type="file" name="image" id="image" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary fload-right">Simpan</button>
        </form>
    </div>
@endsection