 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href=" " class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary">OLMS</h2>
    </a>

    <div class="nav-item dropdown">
        <a href=" " class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
        <div class="dropdown-menu fade-down m-0">
            <a href=" " class="dropdown-item">Language Learning Course</a>
            <a href=" " class="dropdown-item"></a>
            <a href=" " class="dropdown-item">Development</a>
            <a href=" " class="dropdown-item">Free Course</a>
            <a href=" " class="dropdown-item">Design & Creative Course</a>
            <a href=" " class="dropdown-item">Professional Course</a>
            <a href=" " class="dropdown-item">Kid's Course</a>
            <a href=" " class="dropdown-item">Free Course</a>
        </div>
    </div>

    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Others</a>
        <div class="dropdown-menu fade-down m-0">
            <a href=" " class="dropdown-item">L</a>
            <a href=" " class="dropdown-item">O</a>
            <a href=" " class="dropdown-item">Dev</a>
            
        </div>
    </div>
    
    <div class=" col-lg-6 col-6 text-left">
        <form action="{{ route('user.search')}}">

            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search for category">
                <button type="submit" class="btn btn-success">Search</button>
            </div>

        </form>
    </div>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href=" " class="nav-item nav-link">Home</a>
            <a href=" " class="nav-item nav-link">About</a>
            <a href="" class="nav-item nav-link">Contact</a>

            @auth
            <a href="{{ route('user.profile') }} " class="nav-item nav-link">{{ auth()->user()->name}}</a>
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
            
           


           
