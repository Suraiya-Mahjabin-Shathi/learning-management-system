@extends('backend.master')

@section('content')

<h3>Update Category Form:- </h3>

    <form action="{{route('categories.update',$category->id)}} " method="post">
        
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
        
        <div> 
            <label for="">Enter Category name:</label><br>
            <input value="{{$category->name}}" type="text" class="form-control" name="name" >
        </div><br>
        <div>
            <label for="">Category Status:</label>
            <select class="form-control" name="status">
            <option @if($product->status=='active') selected @endif value="active">Active</option>
            <option @if($product->status=='inactive') selected @endif value="inactive">Inactive</option>
            </select>
        </div><br>
        <div> 
            <label for="">Upload image:</label><br>
            <input type="file" name="image" >
        </div><br>
        <div>
            <label for="">Description:</label>
            <textarea class="form-control" name="description"  id="">{{$product->description}}></textarea>
        </div> <br>
        <div> 
            <button class="btn btn-success">Update</button>
         </div><br>
    
    
    </form>
    </div> 

    
@endsection