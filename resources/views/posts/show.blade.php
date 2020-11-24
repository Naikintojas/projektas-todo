@extends('home')

@section('content')
    <div class="container mt-5">
        <p class="h3" id="invoice" >{{$post->title}} {{$post->aprasymas}} {{$post->specifikacija}} {{$post->moduliai}} {{$post->extra}}</p>
        <small><p class="h5 d-inline" id="invoice">It was created at:</p> {{$post->created_at}}</small>
        <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-warning mt-3">Edit</a>
    <form action="{{action('App\Http\Controllers\PostsController@destroy', $post['id'])}}" method="POST" class="d-inline ">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="btn-danger btn mt-3">Delete</button>
    </form>
    <button id="download" class="btn-danger btn mt-3">PDF</button>
    </div>
@endsection