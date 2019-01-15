@extends('welcome')

@section('content')
<h1 class="text-center">Articles:</h1>
    <ul class="list-group-item p-5">
        
        @foreach ($articles as $article)
            <li class="list-group-item">
                <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection