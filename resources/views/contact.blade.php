@extends('layouts.app')

@section('content')

<h1>Contact</h1>
<div class="container">
    <form action="/contact/submit" method="POST" class="form-group container jumbotron">

        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name"  class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email"  class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="" cols="30" rows="10" placeholder="Enter message" class="form-control"></textarea>
        </div>
        <button class="btn btn-info" type="submit">Submit</button>

    </form>
</div>
@endsection

