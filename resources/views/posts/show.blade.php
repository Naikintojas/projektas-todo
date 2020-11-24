@extends('home')

@section('content')
    <div class="container mt-5">
        <div id="invoice">
        <p class="h3" ><b>Project Name:</b> {{$post->title}} {{$post->extra}}</p>
        <p class="h3" ><b>Description:</b> {{$post->aprasymas}}</p>
        <p class="h3" ><b>Specification:</b> {{$post->specifikacija}}</p>
        <p class="h3" ><b>Moduels:</b> {{$post->moduliai}}</p>
        <p class="h3" ><b>More info:</b> {{$post->extra}}</p>
        <small><p class="h5 d-inline">It was created at:</p> {{$post->created_at}}</small>
        <hr>
        </div>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-warning mt-3">Edit</a>
    <form action="{{action('App\Http\Controllers\PostsController@destroy', $post['id'])}}" method="POST" class="d-inline ">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="btn-danger btn mt-3">Delete</button>
    </form>
    <button id="download" class="btn-danger btn mt-3">PDF</button>
    </div>
@endsection