<nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('/') }}" class="nav-link">Home</a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('contact-us')}}" class="nav-link">Contact</a>
        </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item">
            <a class="nav-link"  data-slide="true" href="{{ 'logout' }}">
            <i class="fa fa-user-circle mr-2"></i>Logout
            </a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link"  data-slide="true" href="{{ url('home') }}">
                <!-- <i class="fas fa-user-circle mr-2"></i> -->Logout
            </a>
        </li>  
        
    </ul>
</nav>