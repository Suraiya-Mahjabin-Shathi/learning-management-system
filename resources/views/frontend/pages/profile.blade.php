@extends('frontend.master')

@section('content')


<style type="text/css">
.gradient-custom {
/* fallback for old browsers */
background: #f6d365;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}
</style>


<section class="vh-100" style="background-color: #f4f5f7;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
                  
              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="{{ url("uploads/", auth()->user()->image)}}"
                  alt="Avatar" class="rounded  d-block mx-5 my-5 " style="width: 80px;" />

                <h5>{{ auth()->user()->name }}</h5>
                <h5>{{ auth()->user()->designation }}</h5>
                <a href="{{route('profile.edit',auth()->user()->id)}}" class="far fa-edit mb-5">Update Profile</a>
              </div>

              <div class="col-md-8">
                <div class="card-body p-4">
                  <h6>Information</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-12 mb-6">
                      <h6>Role:</h6>
                      <p class="text-muted">{{ auth()->user()->role }}</p>
                    </div> <br><br>
                    <div class="col-12 mb-6">
                      <h6>Email:</h6>
                      <p class="text-muted">{{ auth()->user()->email }}</p>
                    </div> <br><br>
                    <div class="col-12 mb-6">
                      <h6>Phone:</h6>
                      <p class="text-muted">{{ auth()->user()->mobile }}</p>
                    </div><br><br>
                    <div class="col-12 mb-6">
                        <h6>Address:</h6>
                        <p class="text-muted">{{ auth()->user()->address }}</p>
                    </div>
                  </div>
                </div>
              </div>

              @if(auth()->user()->role == "learner")
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Course ID</th>
                    <th scope="col">Enrollment Date</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Payment Type</th>
                    <th scope="col">Transaction ID</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($enrollments as $key=>$data)
                    
                  <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $data->user_id }}</td>
                    <td>{{ $data->course_id }}</td>
                    <td>{{ $data->enrollment_date }}</td>
                    <td>{{ $data->amount }}</td>
                    <td>{{ $data->payment_type }}</td>
                    <td>{{ $data->transaction_id }}</td>
                    <td>
                      <a href="{{route('feedback.view',$data->id)}}" class="btn btn-primary">View</a>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
              @endif

              @if(auth()->user()->role == "instructor")
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SL.</th>
                    {{-- <th scope="col">Name</th> --}}
                    <th scope="col">User ID</th>
                    <th scope="col">Course ID</th>
                    <th scope="col">Enrollment Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($students as $key=>$data)
                  
                  <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    {{-- <td>{{ $data->name }}</td> --}}
                    <td>{{ $data->user_id }}</td>
                    <td>{{ $data->course_id }}</td>
                    <td>{{ $data->enrollment_date }}</td>
                    <td>
                      <a href="  " class="btn btn-primary">View</a>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
@endsection