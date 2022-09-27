@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <h1>MODIFICA IL POST</h1>
            <form action=" {{route('admin.posts.update', $post)}} " method="POST">
            @csrf
            @method('PUT')
            @include('includes.form')
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Modifica</button>
            </div>
        
            </form>
        </div>
    </div>
</div>

@endsection