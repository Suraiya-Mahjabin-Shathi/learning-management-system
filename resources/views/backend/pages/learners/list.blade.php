@extends('backend.master')

@section('content')





<div class="container mt-3">
 
    <h1>This is Learner list.</h1>
  <a href="{{ url('/learner/create') }}" class="btn btn-primary" >Create New Learner</a>
  

    <h2>Learner List</h2>
    <p>Here is the table-                              </p>            
    <table class="table table-striped">
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
        <tr>
          <td>Mary</td>
          <td>Moe</td>
          <td>mary@example.com</td>
        </tr>
        <tr>
          <td>July</td>
          <td>Dooley</td>
          <td>july@example.com</td>
        </tr>
      </tbody>
    </table>
  </div>
  
  </body>
  </html>



@endsection