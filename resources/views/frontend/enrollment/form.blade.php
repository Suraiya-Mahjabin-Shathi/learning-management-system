@extends('frontend.master')
@section('content')
<h1>Enrollment Form:-</h1>

<form action=" {{ route('enrollment.frontend.save',$course->id) }} " method="POST" enctype="multipart/form-data">
    
    @csrf

    <div style="padding: 20px">    
        <div> 
            <label for="">User ID:</label><br>
            <input type="text" class="form-control" name="user_id" required>
        </div>
    
    <div> 
        <label for="">Enrollment Date:</label><br>
        <input type="date" class="form-control" name="enrollment_date" required>
    </div>
   
    <div> 
        <label for="">Payment Date:</label><br>
        <input type="date" class="form-control" name="payment_date" required>
    </div>
    <div> 
        <label for="">Amount:</label><br>
        <input type="text" class="form-control" name="amount" required>
    </div>
    <div>
        <label for="">Payment Type:</label>
        <select class="form-control" name="payment_type">
        <option value="Bkash">Bkash</option>
        <option value="Nogod">Nogod</option>
        <option value="Roket">Roket</option>
        </select>
    </div>
    <div>
        <label for="">Transaction ID</label>
        <input type="text" class="form-control" name="transaction_id" required>
    </div><br>
    <div> 
        <button class="btn btn-success">Submit</button>
     </div><br>
</form>

@endsection