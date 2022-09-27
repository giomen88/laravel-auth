@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card mb-3">
                <img src="{{$post['image']}}" class="card-img-top" alt="{{$post['title']}}">
                <div class="card-body">
                    <h5 class="card-title">{{$post['title']}}</h5>
                    <p class="card-text">{{$post['content']}}</p>
                    <p class="card-text"><small class="text-muted"><strong>Ultima modifica</strong>  {{$post['updated_at']}}</small></p>
                    <div class="buttons d-flex justify-content-between">
                        <div class="d-flex">
                            <a href=" {{route('admin.posts.edit', $post)}} " class="btn btn-secondary mr-2">Modifica</a>
                            <form action=" {{route('admin.posts.destroy', $post)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Cancella</button>
                            </form>
                        </div>
                        <div>
                            <a href=" {{route('admin.posts.index')}} " class="btn btn-primary">Torna alla lista</a> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection