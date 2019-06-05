@extends('welcome')

@section('content')
<section class="jumbotron bg-dark text-white ">
    <header class="container text-center p-5">
        <h1 class="display-1 ">The Average Developer</h1>
        <p class="lead"> A beginners guide to web development using the Laravel framework.</p>
    </header>
</section>

<section class="container">
            <h2 class="display-2">Latest posts</h2>
            <hr>
            <div class="row">
                @foreach ($articles as $article)
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card mt-4">
                        <section class="card-body">
                              <a class="card-title" href="/articles/{{ $article->id }}">{{ $article->title }}</a>
                              <p class="card-text">Posted: <b>{{ $article->created_at->toFormattedDateString() }} </b> By: {{ $article->user->name }}</p>
                              <p class="card-text"> {{ $article->body }}</p>
                              <hr>
                              <a href="/articles/{{ $article->id }}" class="btn btn-outline-primary w-100 text-primary">View post</a>
                        </section>
                    </div>
                  

                </div>
                @endforeach
            </div>
</section>


@endsection