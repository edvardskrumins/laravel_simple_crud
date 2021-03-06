@extends('layouts.app')
@section('content')
<h1> Posts <h1>
    @if(count($posts)>0)
       @foreach($posts as $post)
          <div class="card card-body bg-light">
            <h3><a href="/allPosts/{{$post->id}}">{{$post->title}}</a></h3>
            <div class="row">
              <img src="/storage/app/public/cover-images/{{$post->cover_image}}">
            </div>
            <small> written on {{$post->created_at}} Author: {{$post->user->name}}</small>

          </div>
       @endforeach
            {{$posts->links()}}
    @else
            <h1> There are no posts </h1>
    @endif
@endsection
