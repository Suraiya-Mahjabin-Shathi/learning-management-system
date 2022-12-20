@extends('frontend.master')

@section('content')

<div class="container mt-100">

    <div class="row">
        @if($searchResult->count()>0)

            @foreach($searchResult as $course)
            
            <div class="col-md-4 col-sm-6">
                <div class="card mb-30">
                    <a class="card-img-tiles" href="#" data-abc="true">
                        <div class="inner">
                            <div class="main-img">
                                <img src="{{ url("/uploads/",$course->image)  }}" alt="Category">
                            </div>
                        </div>
                    </a>
                    <div class="card-body text-center">
                        <h4 class="card-title">{{$course->name}}</h4>
                        <p class="text-muted">{{$course->price}}</p><a class="btn btn-outline-primary btn-sm" href="#" data-abc="true">View Course</a>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <p class="alert alert-danger">No Course Found.</p>
        @endif
    </div>
</div>
@endsection