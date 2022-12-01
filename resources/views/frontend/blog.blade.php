@extends('frontend.layouts.master')

@section ('title', 'news')

@section('content')

<!-- News With Sidebar Start -->
<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-8">
                @php $i=1; @endphp
                @foreach($blogposts as $post)
                    <div class="position-relative {{ $i == '1' ? 'active' : '' }} overflow-hidden mb-1" style="height: 300px; ">
                    @php $i++; @endphp
                        <img class="img-fluid w-100 h-100" src="{{ asset('images/blogimg/' . $post->images) }}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-1" style="font-size: 13px;">
                                <a class="text-white" href="">{{$post->category->title}}</a>
                                <span class="px-1 text-white">/</span>
                                <a class="text-white" href="">{{$post->date}}</a>
                            </div>
                            <a class="h4 m-0 text-white" href="{{ url("post/$post->id") }}">{{$post->title}}</a>
                        </div>
                    </div>
                @endforeach
                <div class="row">
                        <div class="col-12">
                            <nav aria-label="Page navigation">
                              <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                  <a class="page-link" href="" aria-label="Previous">
                                    <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="">1</a></li>
                                <li class="page-item"><a class="page-link" href="">2</a></li>
                                <li class="page-item"><a class="page-link" href="">3</a></li>
                                <li class="page-item">
                                  <a class="page-link" href="" aria-label="Next">
                                    <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- </div>     -->
            </div>

            <div class="col-lg-4 pt-3 pt-lg-0">
                    <!-- Social Follow Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Follow Us</h3>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #39569E;">
                                <small class="fab fa-facebook-f mr-2"></small><small>12,345 Fans</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #52AAF4;">
                                <small class="fab fa-twitter mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #0185AE;">
                                <small class="fab fa-linkedin-in mr-2"></small><small>12,345 Connects</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #C8359D;">
                                <small class="fab fa-instagram mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #DC472E;">
                                <small class="fab fa-youtube mr-2"></small><small>12,345 Subscribers</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #1AB7EA;">
                                <small class="fab fa-vimeo-v mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->
                    <!-- Popular News Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Tranding</h3>
                        </div>
                        @foreach ($posts as $post)

                        <div class="d-flex mb-3">
                            <img src="{{ asset('images/blogimg/' . $post->images) }}" style="width: 100px; height: 120px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 120px;">
                                <div class="mb-1" style="font-size: 12px;">
                                    <a href="">{{$post->category->title}}</a>
                                    <span class="px-1">/</span>
                                    <span>{{$post->date}}</span>
                                </div>
                                <a class="h6 m-0" href="{{ url("post/$post->id") }}" style="font-size: 12px;">{{$post->title}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Popular News End -->

                    <!-- Tags Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Tags</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Articles</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Weather</a>                     
                        </div>
                    </div>
                    <!-- Tags End -->
            </div>
        </div>
    </div>
</div>
    <!-- News With Sidebar End -->

<!-- Back to Top -->
<a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


@endsection