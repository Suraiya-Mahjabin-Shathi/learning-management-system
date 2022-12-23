@extends('backend.master')

@section('content')

<div class="container mt-3">

<h3>Here is the Course Form:- </h3>


    <form action=" {{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
    
        @if($errors->any())
        @foreach ($errors->all() as $message)
        <p class="alert alert-danger">{{ $message }}</p>
        @endforeach
        @endif

        
        @csrf

        <div style="padding: 20px"> 
            <div> 
                <label for="">Enter Instructor ID:</label><br>  
                <input type="text" class="form-control" name="user_id" required>
            </div>
        <div> 
            <label for="">Enter Course name:</label><br>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div>
            <label for="">Category Type:</label>
            <select class="form-control" name="type">
            <option value="designing">Designing</option>
            <option value="technology">Technology</option>
            <option value="technology">Language</option>
            <option value="technology">Kid's</option>
            <option value="technology">Free Course</option>
            </select>
        </div>
        <div> 
            <label for="">Upload image:</label><br>
            <input type="file"  name="image" required>
        </div>
        <div>
            <label for="">Content:</label>
            <textarea class="form-control" name="content"></textarea>
        </div>
        <div>
            <label for="">Price:</label>
            <input type="text" class="form-control" name="price" required>
        </div>
        <div> 
            <button class="btn btn-success">Submit</button>
         </div>
    </form>
</div> 

@endsection