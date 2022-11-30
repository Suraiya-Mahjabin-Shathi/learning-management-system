 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>OLMS</h2>
    </a>
   
    <input type="text" placeholder="Search" length=" " width=" ">

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href=" " class="nav-item nav-link">Home</a>
            <a href=" " class="nav-item nav-link">About</a>
            <a href=" " class="nav-item nav-link">Courses</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href=" " class="dropdown-item">Our Team</a>
                    <a href=" " class="dropdown-item">Testimonial</a>
                    <a href=" " class="dropdown-item">404 Page</a>
                </div>
            </div>

            <a href="" class="nav-item nav-link">Contact</a>

            @auth
            <a href=" " class="nav-item nav-link">{{ auth()->user()->name}}</a>
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
            
           


           
