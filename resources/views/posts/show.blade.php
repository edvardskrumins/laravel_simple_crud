@extends('layouts.app')
@section('content')
  <h1> {{$post->title}} </h1>
  <h2> {{$post->created_at}}</h2>
  <p> {{$post->body}} </p>
  <h2> <a href="/allPosts" class="btn btn-primary"> Go back </a>  </h2>
  <hr>
  <h2> <a href="/allPosts/{{$post->id}}/edit" class="btn btn-default"> Edit </a> </h2>

  {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
  {{Form::hidden('_method', 'DELETE')}}
  {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
@endsection
