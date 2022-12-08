@extends('frontend.master')

@section('content')
    

<section>
  <div class="banner" style="background-image: url('/uploads/front3.jpg')">
    <div class="container">
      <div class="banner-content">
        <h1>
          "What do you want to learn?"
        </h1>
        <p>
          " We have 50+ affordable courses to empower your future."
        </p>
      </div>
    </div>
  </div>
</section>




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

            
                     
    <!-- Team End -->
    
    
    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    
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
                  <label for="email">Email address:</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
                </div>
                <div class="form-group">
                    <label for="email">Phone Number:</label>
                    <input type="text" name="mobile" class="form-control" placeholder="Enter phone number" id="mobile">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
                </div>
                <div class="form-group">
                    <label for="email">Address:</label>
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
    



   <!-- Products Start -->
   <div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Trandy Products</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">

      
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src=" " alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">name</h6>
                    <div class="d-flex justify-content-center">
                        <h6> BDT</h6>
{{--                            <h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href=" " class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <a href=" " class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- Products End -->

@endsection