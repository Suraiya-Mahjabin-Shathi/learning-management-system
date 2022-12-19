@extends('backend.master')

@section('content')

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
                <label for="">Enter User ID:</label><br>
                <input type="text" class="form-control" name="user_id" >
            </div><br>
        <div> 
            <label for="">Enter Course name:</label><br>
            <input type="text" class="form-control" name="name" >
        </div><br>
        <div>
            <label for="">Category Type:</label>
            <select class="form-control" name="type">
            <option value="designing">Designing</option>
            <option value="technology">Technology</option>
            <option value="technology">Language</option>
            <option value="technology">Kid's</option>
            <option value="technology">Free Course</option>
            </select>
        </div><br>
        <div> 
            <label for="">Upload image:</label><br>
            <input type="file"  name="image" >
        </div><br>
        <div>
            <label for="">Content:</label>
            <textarea class="form-control" name="content"></textarea>
        </div>
        <div>
            <label for="">Price:</label>
            <input type="text" class="form-control" name="price" >
        </div> <br>
        <div> 
            <button class="btn btn-success">Submit</button>
         </div><br>
    
    
    </form>
    </div> 

    
@endsection