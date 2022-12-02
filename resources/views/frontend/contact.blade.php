@extends('frontend.layouts.master')

@section('title', 'Contact Us')

@section('content')

<div class="container">
    <h1 class="home-title text-primary text-center">Contact Us</h1>
    <div class="row mb-4">
        <div class="col-md-6 offset-3">
            <hr>
            <h4 class="text-danger">Phone</h4>
            <p><i class="fa fa-phone text-primary mr-2"></i></p>
            <hr>
            <h4 class="text-danger">Email</h4>
            <p><i class="fa fa-envelope text-primary mr-2"></i></p>
            <hr>
            <h4 class="text-danger">Website</h4>
            <p><i class="fa fa-globe text-primary mr-2"></i>
            </p>
        </div>
    </div>
</div>

@endsection