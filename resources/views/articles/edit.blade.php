@extends('layouts.app')
@section('content')
<div class="container">
    <form action="/articles/{{$article->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title: </label>
        <input class="form-control" type="text" placeholder="Title" name="title"  value="{{$article->title}}">
    </div>
    <div class="form-group">
        <label for="content">Content: </label>
        <input class="form-control" type="text" placeholder="Content" name="content" value="{{$article->content}}">
    </div>
    <div class="form-group">
        <label for="image">Feature Image: </label>
        <input class="form-control" type="file" name="image" value="{{$article->featured_image}}">
    </div>
    <button type="submit" name="submit" class="btn btn-primary fload-right">Ubah Data</button>
    </form>
</div>
    
@endsection