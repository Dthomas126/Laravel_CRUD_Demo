@extends('welcome')

@section('content')
<section class="container">


<h1 class="text-center">Articles:</h1>
    
        
    

        <div class="row">
                @foreach ($articles as $article)
            <div class="col-4 mb-4">
 <div class="card">
                
                    <img class="card-img-top" src="{{ asset("/storage/app/articleImages/$article->image" ) }}" alt="">
            
               
                <div class="card-body">
                     <h2 class="card-title" >
                        <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
                    </h2>
                    <p class="card-text text-muted">By: {{ $article->user->name }}</p>
                    <p class="card-text">{{ $article->body }}</p>
                </div>
                <section class="card-footer">
                    Posted: {{ $article->created_at->toFormattedDateString() }}
                </section>
            </div>
       
            </div>
               @endforeach

        </div>
           
            
     </section>
@endsection