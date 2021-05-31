@extends('layouts.app')

@section('leftSideOfNavbar')
    <li><a href="/">Home</a></li>
    <li><a href="/services">Services</a></li>
    <li><a href="/about">About</a></li>
    <li class="active"><a href="/posts">Blog Posts</a></li>
@endsection

@section('content')
    <h1>Create Post</h1>
    {!!Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body', 'id' => 'article-ckeditor'])}}
        </div>
        <div class="form-group">
            {{Form::label('image', 'Image')}}
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary btn-lg'])}}
    {!!Form::close()!!}
@endsection