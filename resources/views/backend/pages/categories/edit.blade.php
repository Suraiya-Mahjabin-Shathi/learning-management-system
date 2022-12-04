@extends('backend.master')

@section('content')

<h3>Update Category Form:- </h3>

   <form action="{{route('Categories.update', $category->id)}} " method="post" enctype="multipart/form-data">
        
        @method('put')

        @if($errors->any())
            @foreach($errors->all() as $message)
                <p class="alert alert-danger">{{$message}}</p>
            @endforeach
        @endif

        @if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif



        @csrf

        <div style="padding: 20px">    
        
            <div class="form-group"> 
                <label for="">Enter Category name:</label><br>
                <input value="{{ $category->name}}" required  type="text" name="name" class="form-control" id="name" placeholder="Enter name">
            </div><br>
            <div class="form-group">
                <label for="">Category Status:</label>
                <select  name="status" id="status" class="form-control">
                <option @if($category->status=='active') selected @endif value="active">Active</option>
                <option @if($category->status=='inactive') selected @endif value="inactive">Inactive</option>
                </select>
            </div><br>
            <div class="form-group"> 
                <label for="">Upload image:</label><br>
                <input name="image" type="file" class="form-control" id="image" >
            </div><br>
            <div class="form-group">
                <label for="">Description:</label>
                <textarea class="form-control" name="description" id="description">{{ $category->description }}</textarea>
                </textarea>
            </div> <br>

            
                <button type="submit" class="btn btn-success">Update</button>
             
        
        
        </form>
        </div> 
    
@endsection