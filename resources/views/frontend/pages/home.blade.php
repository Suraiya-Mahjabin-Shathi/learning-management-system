@extends('frontend.master')

@section('content')
    

<>
<section>
  <div class="banner" style="height:500px; background-image: url('http://localhost/learning-management-system/public/uploads/front3.jpg')">
    <div class="container">
      <div class="banner-content">
        <h1>
          "What do you want to learn?"
        </h1>
        <p>
          " We have 30+ affordable courses to empower your future."
        </p>
      </div>
    </div>
  </div>
</section>


 <!-- Service Start -->
 <div class="container-xxl py-5">
  <div class="container">
      <div class="row g-4">
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="service-item text-center pt-3">
                  <div class="p-4">
                      <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                      <h5 class="mb-3">Skilled Instructors</h5>
                      <p>We have very skilled instructors who will take the courses.</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="service-item text-center pt-3">
                  <div class="p-4">
                      <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                      <h5 class="mb-3">Online Classes</h5>
                      <p>We have online classes which will very helpful for your future plan.</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="service-item text-center pt-3">
                  <div class="p-4">
                      <i class="fa fa-3x fa-home text-primary mb-4"></i>
                      <h5 class="mb-3">Home Projects</h5>
                      <p>By doing our course you can make your own home projects.</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="service-item text-center pt-3">
                  <div class="p-4">
                      <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                      <h5 class="mb-3">Book Library</h5>
                      <p>You can also read books and megazine from our book library.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Service End -->


    <!-- Category Start -->
    <div class="container-xxl py-5">
      <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
              <h1 class="mb-5">Popular Categories</h1>
          </div>
          <div class="row g-4 justify-content-center">
              
              
              {{-- @dd($courses) --}}
              
              @foreach ($categories as $data)
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="card" style="width: 18rem;">
                      <img src="{{ url('/uploads/',$data->image) }}" class="card-img-top" alt=" image">
                      <div class="card-body">
                        <h6 class="card-title">{{ $data->name }}</h6>
                        <h5 class="card-title">{{ $data->status }}</h5>
                        <p class="card-text">{{ $data->description }}</p>
                      </div>
                      <div class="card-body">
                        <a  href=" " class="btn addBtn form-control" aria-describedby="myBtn">View Details</a>
                      </div>
                  </div>
              </div>
              @endforeach
            </div>
          </div>    
        </div>
  <!-- Courses End -->
  




    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Popular Courses</h1>
            </div>
            <div class="row g-4 justify-content-center">
                
                
                {{-- @dd($courses) --}}
                
                @foreach ($courses as $data)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ url('/uploads/',$data->image) }}" class="card-img-top" alt="image">
                        <div class="card-body">
                          <h5 class="card-title">{{ $data->name }}</h5>
                          <p class="card-text">{{ $data->content }}</p>
                        </div>
                        <div class="card-body">
                          <a  href="{{ route('enrollment.form',$data->id) }} " class="btn addBtn form-control" aria-describedby="myBtn">Enroll Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            
              </div>
            </div>
          </div>
    <!-- Courses End -->
    
    
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
                <h1 class="mb-5">Expert Instructors</h1>
            </div>
              <div class="row">
                @foreach ($instructors as $data)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ url('/uploads/',$data->image) }}" class="card-img-top" alt=" image">
                        <div class="card-body">
                        <h5 class="card-title">{{ $data->name }}</h5>
                        <p class="card-text">{{ $data->content }}</p>
                        </div>
                        
                    </div>
                </div>
                @endforeach
    </div>
  </div>
</div>
            
                     
    <!-- Team End -->
    
    
    <!-- Button trigger modal -->

  


  
    <!-- Modal for registration-->
  <div class="modal fade" id="reg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Please registration</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


        <div class="modal-body">

            <form action="{{ route('home.registration') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="email">Enter Your Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" id="name">
                </div>
                <div class="form-group">
                    <label for="image">Enter Your image:</label>
                    <input type="file" name="image" class="form-control" placeholder="Enter your image" id="image">
                </div>
                <div class="form-group">
                    <label for="email">Enter Your designation:</label>
                    <input type="text" name="designation" class="form-control" placeholder="Enter your designation" id="designation">
                </div>
                <div class="form-group">
                  <label for=" role">Enter Your role:</label>
                  <select name="role" class="form-control" placeholder="Enter your role" id=" role">
                    <option value="instructor">Instructor</option>
                    <option value="learner">Learner</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
                </div>
                <div class="form-group">
                    <label for="mobile">Phone Number:</label>
                    <input type="text" name="mobile" class="form-control" placeholder="Enter phone number" id="mobile">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
                </div>
                <div class="form-group">
                  <label for="date_of_birth">Date of Birth:</label>
                  <input type="date" name="date_of_birth" class="form-control" placeholder="Enter birth date" id="date_of_birth">
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter your address" id="address">
                  </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
              
        </div>
        
      </div>
    </div>
  </div>


  <!-- Modal for login-->
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">please login yourself</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


        <div class="modal-body">
            <form action="{{ route('home.login') }}" method="post">
                @csrf

                <div class="form-group">
                  <label for="email">E-mail address:</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>    
        </div>

      </div>
    </div>
  </div>
    


@endsection