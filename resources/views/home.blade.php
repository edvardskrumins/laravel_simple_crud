@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h1> Your posts </h1>
                    <table>
                      <tr>
                        <th> Title </th>
                        <th> </th>
                        <th> </th>
                        <th> </th>
                      </tr>
                      @foreach($posts as $post)
                        <th>{{$post->title}}</th>
                        <th> <a href="/allPosts/{{$post->id}}" class="btn btn-default"> View </a> </th>
                        <th> <a href="/allPosts/{{$post->id}}/edit" class="btn btn-default"> Edit </a> </th>
                        <th> <a href="/allPosts/{{$post->id}}/delete" class="btn btn-default"> Delete </a> </th>
                      @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
