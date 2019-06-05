@extends('welcome')

@section('content')
<div class="container">
    @if ($article->image !== 'NULL')
    <img src="{{ asset('articleImages/'.$article->image) }}" alt="Article Image" style="width:80%;height:auto;margin: 0 auto">

    @endif
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
        <div class="container jumbotron mt-4">
            <h2>Comment:</h2>
            <form action="/articles/{{ $article->id }}/comment/" method="post">
                @csrf
            <textarea name="comment" class="form-control" id="comment" cols="30" rows="10" placeholder="Add comment..."></textarea>
            <button class="btn btn-primary w-25 mr-auto mt-2" type="submit">Add comment</button>
        </form>
                <ul class="list-group mt-3"> 
                    @foreach ($article->comment as $comment)
                    <li class="list-group-item">
                           <p>{{ $comment->comment }}</p> 
                        
                        </li>
                    @endforeach
                   
                </ul>
            </div>
    </div>
</div>



@endsection