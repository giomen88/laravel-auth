@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <h1>POSTS</h1>
            <div class="text-end">
                <a href=" {{route('admin.posts.create')}} " class="btn btn-success">Crea un post</a>
            </div>
        </div>
        <div class="col-12 d-flex flex-wrap justify-content-between text-center">
            @foreach($posts as $post)
            <div class="card mb-3" style="width: 18rem;">
                <img src="{{$post['image']}}" class="card-img-top" alt="{{$post['title']}}">
                <div class="card-body">
                  <h5 class="card-title">{{$post['title']}}</h5>
                  <a href="{{route('admin.posts.show', $post)}}" class="btn btn-primary">Vedi il post</a>
                </div>
            </div>            
            @endforeach
        </div>
    </div>
</div>

@endsection