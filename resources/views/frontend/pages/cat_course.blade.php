@extends('frontend.master')

@section('content')


   <!-- Courses Start -->
   <div class="container-xxl py-5" id="course">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
            <h1 class="mb-5">Popular Courses</h1>
        </div>
        <div class="row g-4 justify-content-center">
            
            {{-- @dd($courses) --}}
            
            @foreach ($courses as $data)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card" style="width: 18rem;">
                    <img src="{{ url('/uploads/',$data->image) }}" class="card-img-top" alt="image">
                    <div class="card-body">
                      <h5 class="card-title">{{ $data->name }}</h5>

                      <a href="{{ route('home.content',$data->id) }} " class="btn btn-info">Content</a>
                     
                    </div>
                    <div class="card-body">

                      @if(auth()?->user()?->role == "learner" || !auth()->user())
                      <a  href="{{ route('enrollment.form',$data->id) }} " class="btn btn-warning form-control" aria-describedby="myBtn">Enroll Now</a>
                      @endif
                    </div>
                </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
<!-- Courses End -->
    
@endsection