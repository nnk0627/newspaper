@extends('frontend.layouts.master')

@section('title', 'Search')

@section('content')

<div class="container">
    <!-- <h1 class="home-title text-danger text-center">Search</h1> -->
    <div class="row mb-4">
        <div class="col-md-12">
        @if($posts->isNotEmpty())
        <div class="row">
        @foreach($posts as $post)
                
                        <div class="col-md-4" >         
                            <div class="position-relative mb-3 ">
                                <img class="img-fluid w-100" src="{{ asset('images/blogimg/' . $post->images) }}" style="width: 300px; height: 250px; object-fit: cover;">
                                <div class="overlay position-relative bg-light px-2">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">{{$post->category->title}}</a>
                                        <span class="px-1">/</span>
                                        <span>{{$post->date}}</span>
                                    </div>
                                    <a class="h6" style="height: 60px;" href="{{ url("post/$post->id") }}">{{$post->title}}
                                    </a>
                                </div>
                            </div>                     
                        </div>
                        @endforeach
                        </div>
        @else 
            <div>
                <h2 class="text-dark">No posts found</h2>
            </div>
        @endif
        </div>
    </div>
</div>

@endsection