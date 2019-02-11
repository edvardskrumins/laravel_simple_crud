@extends('layouts.app')
@section('content')
<h1> {{$post->title}} </h1>
<h2> {{$post->created_at}}</h2>
<p> {{$post->body}} </p>
<img style="width:100%" src="/storage/app/public/cover-image/{{$post->cover_image}}">
<small> Author: {{$post->user->name}} </small>
<h2> <a href="/allPosts" class="btn btn-primary"> Go back </a> </h2>
<hr>
@if(!Auth::guest())
@if(Auth::user()->id == $post->user_id)

<h2> <a href="/allPosts/{{$post->id}}/edit" class="btn btn-default"> Edit </a> </h2>
{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
@endif
@endif
@endsection
