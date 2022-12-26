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
                <label for="">From date:</label>
                <input type="date"  name="from_date" class="form-control">
            </div>
            <div>
                <label for="">To date:</label>
                <input type="date" name="to_date"  class="form-control">
            </div>
            <div> 
                <label for="">Capacity:</label><br>  
                <input type="number" class="form-control" name="capacity" required min="1">
            </div>
            <div> 
                <label for="">Select Instructor</label><br>  
                <select name="user_id" id="" class="form-control">
                    @foreach ($instructor as $data )
                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                    @endforeach
                </select>
            </div>
        <div> 
            <label for="">Enter Course name:</label><br>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div>
            <label for="">Category Type:</label>
            <select class="form-control" name="type">
            <option value="designing">Designing</option>
            <option value="development">Development</option>
            <option value="language">Language</option>
            <option value="kid's">Kid's</option>
            <option value="academic">Academic</option>
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
            <input type="number" class="form-control" name="price" required>
        </div>

        <div> 
            <button class="btn btn-success">Submit</button>
         </div>
    </form>
</div> 

@endsection