@extends('welcome')

@section('content')
    <div class=" p-5">
        <h1 class="text-center">About me</h1>
        <hr>
        <div class="row">
            <div class="col">
                <img src="{{ asset('storage/articleImages/black_photographer.jpeg') }}" alt="About image" class="img-fluid">
            </div>
            <div class="col">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


            </div>
        </div>
    </div>
@endsection