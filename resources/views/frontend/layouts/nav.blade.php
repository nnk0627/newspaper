<!-- Topbar Start -->
<div class="container-fluid">
        <div class="row align-items-center bg-light px-lg-5">
            <div class="col-12 col-md-8 Button1">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-white text-center py-2" style="width: 100px;">Tranding</div>
                    <div class="owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 100px); padding-left: 90px;">
                    @foreach ($posts as $post)
                    <div class="text-truncate"><a class="text-secondary" href="" style="font-size: 14px;">{{ $post->title }}</a></div>
                    @endforeach

                        <!-- <div class="text-truncate"><a class="text-secondary" href="">Gubergren elitr amet eirmod et lorem diam elitr, ut est erat Gubergren elitr amet eirmod et lorem diam elitr, ut est erat</a></div> -->
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-4 text-right d-none d-md-block">
            <span id="date-time"> </span>
            <script>
            var dt = new Date();
            document.getElementById('date-time').innerHTML=dt;
            </script>
            </div> -->
        </div>
        <div class="row align-items-center py-2 px-lg-5" id="bannerbg">
            <div class="col-lg-4">
                <a href="{{url('/')}}" class="navbar-brand d-none d-lg-block">
                    <img src="{{ asset('images/TP-PNG.png') }}">
                </a>
            </div>
            <!-- <div class="col-lg-8 text-center text-lg-right">
                <img class="img-fluid" src="{{ asset('images/TP-PNG.png') }}" alt="">
            </div> -->
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Third Person</span>News</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="{{url('/')}}" class="nav-item nav-link active">{{__('messages.home')}}</a>
                   
                    @foreach($categories as $category)     
                        <a href="{{route('family',$category->id)}}" class="nav-item nav-link">
                        {{$category->title}}
                        </a>
                        
                    @endforeach
                    
                    <a href="{{url('contact-us')}}" class="nav-item nav-link">{{__('messages.contact')}}</a>
                    <a href="{{url('video')}}" class="nav-item nav-link">{{__('messages.video')}}</a>
                </div>
                <div  class="row" id="leaderboard">              
                    <div class="container">                       
                            <div id="topbar" class="col-12 text-right">
                                <ul>                                   
                                    <li><a href="{{ url('locale/en') }}">ENG</a></li>
                                    <li><a href="{{ url('locale/my') }}">မြန်မာ</a></li>
                                </ul>   
                            </div>  
                        </div>
                </div>
            
            </div>
            <div class="navbar-brand d-block ">
                <form action="{{ url('search') }}" class="form-inline keyword" method="GET">
                        <div class="input-group ml-auto" >
                            <input type="text" class="form-control" placeholder="Keyword" name="search" >
                            <div class="input-group-append">
                                <button class="input-group-text text-primary" type="submit"><i
                                        class="fa fa-search"></i></button>
                            </div>
                        </div>
                </form>     
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
