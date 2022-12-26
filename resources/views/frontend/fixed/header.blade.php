 <!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ route("home") }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary">OLMS</h2>
    </a>


    <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="#categories"  class="nav-item nav-link">Categories</a>
    </div>

    <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="#course"  class="nav-item nav-link">Courses</a>
    </div>


    <div class=" col-lg-4 col-4 text-left">
        <form action="{{ route('user.search')}}">

            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search for course">
                <button type="submit" class="btn btn-success">Search</button>
            </div>

        </form>
    </div>


    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
          
            <a href="#about"  class="nav-item nav-link">About</a>
            <a href="#about " class="nav-item nav-link">Contact</a> 

            @auth
            <a href="{{ route('user.profile') }} " class="nav-item nav-link">{{ auth()->user()->name}} | {{ auth()->user()->role }}</a>
            <a href="{{ route('home.logout') }}" class="nav-item nav-link">Logout</a>
           
            @else
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reg">
                   Registration
                </button>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
                   Login
                </button>
            @endauth
           
        </div>
    </div>
</nav>
            
   