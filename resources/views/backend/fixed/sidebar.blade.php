<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">

                @if (auth()->user()->role=='admin')
                    
                <a class="nav-link" href=" {{route('dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <a class="nav-link" href=" {{ route('Categories')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-gift"></i></div>
                    Categories
                </a>
                
                <a class="nav-link" href="{{ route('instructor') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Instructor
                </a>

                <a class="nav-link" href="{{ route('learner') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Learner
                </a>

                <a class="nav-link" href="{{ route('enrollment') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Enrollment
                </a>

                <a class="nav-link" href="{{ route('courses') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                    Courses
                </a>

                <a class="nav-link" href="{{ route('feedback') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-message"></i></div>
                    Feedback
                </a>
                
                <a class="nav-link" href="{{ route('enrollment.report') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-certificate"></i></div>
                    Report
                </a>
            @else

            <a class="nav-link" href="{{ route('courses') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                Courses
            </a>
            <a class="nav-link" href="{{ route('feedback') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-message"></i></div>
                Feedback
            </a>
            @endif

            </div>
        </div>
           
    </nav>
</div>