@extends('welcome')

@section('content')
<div class="container">
    <img src="{{ asset("storage/articleImages/$article->image") }}" alt="Article Image" style="width:80%;height:auto;margin: 0 auto">
    <h1 class="mt-2">{{ $article->title }}</h1>
    <p>{{ $article->body }}</p>


    <div class="row">
        <div class="col-1">
            <a href="/articles/{{ $article->id }}/edit" class="btn btn-success w-100">Edit</a>
        </div>
        <div class="col-1">
            <form action="/articles/{{ $article->id }}" method="post">
                @csrf
                @method('Delete')
                <button type="submit" class="btn btn-danger w-100">Delete</button>
            
            </form>
        </div>
    </div>
</div>



@endsection