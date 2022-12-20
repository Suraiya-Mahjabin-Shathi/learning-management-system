@extends('frontend.master')

@section('content')

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            
<h2>{{ $content->name }}</h2>
<h3>{{ $content->type }}</h3>
<img src="{{ url("/uploads/",$content->image) }}"  height="150" width="150" alt="image">

<p>
    {{ $content->content }}
</p>
<p>{{ $content->price }}</p>
    
        </div>
        <div class="col-md-2"></div>
    </div>
    
@endsection