@extends('backend.master')

@section('content')

<div class="container mt-3">

<h3>Here is the Category Form:- </h3>


    <form action="{{route('Categories.store') }} " method="post" enctype="multipart/form-data">
        

        @if($errors->any())
        @foreach ($errors->all() as $message)
        <p class="alert alert-danger">{{ $message }}</p>
        @endforeach
        @endif

    
        @csrf

        <div style="padding: 20px">    
        
        <div> 
            <label for="">Enter Category name:</label><br>
            <input type="text" class="form-control" name="name" required>
        </div><br>
        <div>
            <label for="">Category Status:</label>
            <select class="form-control" name="status">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
            </select>
        </div><br>
        <div> 
            <label for="">Upload image:</label><br>
            <input type="file"  name="image" required>
        </div><br>
        <div>
            <label for="">Description:</label>
            <textarea class="form-control" name="description"></textarea>
        </div> <br>
        <div> 
            <button class="btn btn-success">Submit</button>
         </div><br>
    
    
    </form>
    </div> 
</div>
    
@endsection