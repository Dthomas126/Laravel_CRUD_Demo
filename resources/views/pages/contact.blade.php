@extends('welcome')

@section('content')
    <div class="container">
        <h1 class="text-center">Contact me!</h1>
        <form action="/contact" method="post">
          @csrf
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Name" >
        </div>
        <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Email" >
              </div>
              <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" >
                  </div>
                  <div class="form-group">
                        <label for="name">Message:</label>
                        <textarea type="text" name="message" id="message" class="form-control" rows="6"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary btn-md"><b> Send &RightArrow;</b></button>
        </form>
    </div>
@endsection