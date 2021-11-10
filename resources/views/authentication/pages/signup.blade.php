<!doctype html>
<html lang="en" class="light-theme">


<!-- Mirrored from codervent.com/skodash/demo/collapsed-menu/ltr/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Aug 2021 16:38:11 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('./assets/admin/images/favicon-32x32.png') }}" type="image/png" />
  
  {{-- CSS --}}
   @include('authentication.includes.css')


  <title>Sigh Up</title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">
    
       <!--start content-->
       <main class="authentication-content">
        <div class="container-fluid">
          <div class="authentication-card">
            <div class="card shadow rounded-0 overflow-hidden">
              <div class="row g-0">
                <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                  <img src="{{asset('assets/admin/images/error/login-img.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                  <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title">Sign Up</h5>
                    <p class="card-text mb-5">See your growth and get consulting support!</p>
                    <form class="form-body" action="{{route('signup.store')}}" method="post">
                      @csrf
                      {{-- <div class="d-grid">
                        <a class="btn btn-white radius-30" href="javascript:;"><span class="d-flex justify-content-center align-items-center">
                            <img class="me-2" src="{{asset('assets/admin/images/icons/search.svg')}}" width="16" alt="">
                            <span>Sign up with Google</span>
                          </span>
                        </a>
                      </div>
                      <div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
                        <hr>
                      </div> --}}
                        <div class="row g-3">
                          <div class="col-12 ">
                            <label for="inputName" class="form-label">Name</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                              <input type="text" name="name" value="{{old('name')}}" class="form-control radius-30 ps-5" id="inputName" placeholder="Enter Name">
                            </div>
                            @if ($errors->has('name'))
                              <span class="text-danger">{{$errors->first('name')}}</span>
                            @endif
                          </div>
                          <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                              <input type="email" value="{{old('email')}}" name="email" class="form-control radius-30 ps-5" id="inputEmailAddress" placeholder="Email Address">
                            </div>
                            @if ($errors->has('email'))
                              <span class="text-danger">{{$errors->first('email')}}
                            @endif
                          </div>
                          <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Phone</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-telephone-fill"></i></div>
                              <input type="number" value="{{old('phone')}}" name="phone" class="form-control radius-30 ps-5" id="inputPhone" placeholder="Phone Number">
                            </div>
                            @if ($errors->has('phone'))
                              <span class="text-danger">{{$errors->first('phone')}}
                            @endif
                          </div>
                          <div class="col-12 ">
                            <label for="inputName" class="form-label">Address</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-house-fill"></i></div>
                              <input type="text" name="address" value="{{old('address')}}" class="form-control radius-30 ps-5" id="inputAddress" placeholder="Enter Address">
                            </div>
                            @if ($errors->has('address'))
                              <span class="text-danger">{{$errors->first('address')}}</span>
                            @endif
                          </div>
                          <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                              <input type="password" name="password" class="form-control radius-30 ps-5" id="inputChoosePassword" placeholder="Enter Password">
                            </div>
                            @if ($errors->has('password'))
                              <span class="text-danger">{{$errors->first('password')}}</span>
                            @endif
                          </div>
                          <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Confirm Password</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                              <input type="password" name="confirm-password" class="form-control radius-30 ps-5" id="inputConfirmPassword" placeholder="Confirm Password">
                            </div>
                            @if ($errors->has('confirm-password'))
                                <span class="text-danger">{{$errors->first('confirm-password')}}</span>
                            @endif
                          </div>
                          <div class="col-12">
                              @if ( Session::has('error') )
                                  <div class="alert alert-danger alert-dismissible" role="alert">
                                      <strong>{{ Session::get('error') }}</strong>
                                  </div>
                              @endif
                          </div>
                          <div class="col-12">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                              <label class="form-check-label" for="flexSwitchCheckChecked">I Agree to the Trems & Conditions</label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="d-grid">
                              <button type="submit" class="btn btn-primary radius-30">Sign Up</button>
                            </div>
                          </div>
                          <div class="col-12">
                            <p class="mb-0">Already have an account? <a href="{{route('signin.index')}}">Sign in here</a></p>
                          </div>
                        </div>
                    </form>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </main>
        
       <!--end page main-->

  </div>
  <!--end wrapper-->


  {{-- JS --}}
  @include('authentication.includes.js')

  
</body>


<!-- Mirrored from codervent.com/skodash/demo/collapsed-menu/ltr/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Aug 2021 16:38:11 GMT -->
</html>