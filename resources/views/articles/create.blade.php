@extends('welcome')

@section('content')

    <h1 class="text-center">Create an article</h1>
    <div class="container">
        @include('/inc/errors')
        
        <form action="/articles" enctype="multipart/form-data"  method="post">
            @csrf
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="Title" >
        </div>
        <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" name="category" id="category" class="form-control" placeholder="Category" >
              </div>
              <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea type="text" name="body" id="body" class="form-control" placeholder="Body" rows="8" ></textarea>
                  </div>
               
                 
                        <div class="form-group">
                          <label for="articleImage">Upload article image</label>
                          <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                <button type="submit" class="btn btn-primary w-100">Post article</button>
        </form>
    </div>
@endsection