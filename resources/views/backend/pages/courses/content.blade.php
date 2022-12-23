@extends('backend.master')

@section('content')
    {{-- @dd($course) --}}
<div class="container mt-3">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            
          <h2>{{ $course->name }}</h2>
          <h3>{{ $course->type }}</h3>
          <img src="{{ url("/uploads/",$course->image) }}"  height="150" width="150"  alt="image">

          <p>
            {{ $course->content }}
          </p>
          <p>{{ $course->price }}</p>
    
        </div>
      <div class="col-md-2"></div>
    </div>
</div>
    
@endsection