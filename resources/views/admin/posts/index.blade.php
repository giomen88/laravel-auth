@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <h1>LISTA POST</h1>
            <div class="text-end">
                <a href=" {{route('admin.posts.create')}} " class="btn btn-success"><i class="fa-solid fa-plus mr-2"></i> Crea post</a>
            </div>
        </div>
        <div class="col-12 d-flex flex-wrap p-0">
            @foreach($posts as $post)
            <div class="post card">
                <img src="{{$post['image']}}" class="card-img-top" alt="{{$post['title']}}">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h5 class="card-title">{{$post['title']}}</h5>
                        @if($post->category) <span class="badge bg-{{ $post->category->color }}">{{$post->category->label}}</span> @endif
                    </div>
                  <div class="text-center">
                    <a href="{{route('admin.posts.show', $post)}}" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass mr-2"></i>Apri post</a>
                  </div>
                </div>
            </div>            
            @endforeach
        </div>
    </div>
</div>

@endsection