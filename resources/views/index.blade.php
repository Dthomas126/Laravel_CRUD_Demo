@extends('welcome')

@section('content')
<section class="container bg-secondary text-white mt-5">
    <header class="text-center">
        <h1 style="font-size: 10rem; ">The Average Developer</h1>
        <p style="font-size: 1.5rem; "> A beginners guide to web development using the Laravel framework.</p>
    </header>
</section>

<section class="container mt-5">
    <div class="row">
        <div class="col">
            <h2>Latest posts</h2>
            <hr>
            <div class="row">
                @foreach ($articles as $article)
                <div class="col-12 p-3">
                    <h3><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h3>
                    <p class="text-muted">Posted on <b>{{ $article->created_at->toFormattedDateString() }}</b></p>
                    <p>{{ $article->body }}</p>

                </div>
                @endforeach
            </div>
        </div>
       
    </div>





</section>


@endsection