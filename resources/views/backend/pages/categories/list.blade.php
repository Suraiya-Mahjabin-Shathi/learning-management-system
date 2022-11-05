@extends('backend.master')

@section('content')

<div class="container mt-3">

  <h1>This is Category List</h1>

  <a href="{{url('Categories/create')}}" class="btn btn-success">Create New Category</a>

  <h4>Category List</h4>  
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>

    </tbody>
  </table>
</div>

</body>
</html>


@endsection