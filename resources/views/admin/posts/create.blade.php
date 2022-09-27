@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <h1>CREA POST</h1>
            <form action=" {{route('admin.posts.store')}} " method="POST">
            @csrf
            @include('includes.form')
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Salva</button>
            </div>
        
            </form>
        </div>
    </div>
</div>

@endsection