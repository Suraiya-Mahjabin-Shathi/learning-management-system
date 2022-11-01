<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                
                <a class="nav-link" href=" {{ url('/')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <a class="nav-link" href=" {{ url('/Categories')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-gift"></i></div>
                    Categories
                </a>
                
                <a class="nav-link" href="{{ url('/instructor') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Instructor
                </a>

                <a class="nav-link" href="{{ url('/learner') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Learner
                </a>

                <a class="nav-link" href="{{ url('/courses') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                    Courses
                </a>

                <a class="nav-link" href="{{ url('/content') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-arrows-to-circle"></i></div>
                    Content
                </a>
                
                <a class="nav-link" href="{{ url('/quizzes') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-pen-to-square"></i></div>
                    Quizzes
                </a>

                <a class="nav-link" href="{{ url('/feedback') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-message"></i></div>
                    Feedback
                </a>

                <a class="nav-link" href="{{ url('/certificate') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-certificate"></i></div>
                    Certificates
                </a>
                <a class="nav-link" href="{{ url('/payment') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-money-check-dollar"></i></div>
                    Payment
                </a>

                <a class="nav-link" href="{{ url('/settings') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-money-check-dollar"></i></div>
                    Settings
                </a>

            </div>
        </div>
        
        <div class="sb-sidenav-footer">
           
    </nav>
</div>