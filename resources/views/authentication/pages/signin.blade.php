<!doctype html>
<html lang="en" class="light-theme">


<!-- Mirrored from codervent.com/skodash/demo/collapsed-menu/ltr/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Aug 2021 16:38:11 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('./assets/client/images/fav.png') }}">
  <title>Sign In</title>

  {{-- CSS --}}
  @include('authentication.includes.css')
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=314699203450532&autoLogAppEvents=1" nonce="ZlNe7R1S"></script>

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
                    <h5 class="card-title">Sign In</h5>
                    <p class="card-text mb-5">See your growth and get consulting support!</p>
                    <form class="form-body" action="{{route('signin.store')}}" method="post">
                      @csrf
                      <div class="d-grid">
                        <a class="btn btn-danger radius-30" href="{{ route('google.login') }}">
                            <span class="d-flex justify-content-center align-items-center">
                            <img class="me-2" src="{{asset('assets/admin/images/icons/search.svg')}}" width="16" alt="">
                            <span>Sign in with Google</span>
                          </span>
                        </a>
                        <br>
                        <a style="box-sizing:border-box" class="btn btn-primary radius-30" href="{{ route('facebook.login') }}">
                            <span class="d-flex justify-content-center align-items-center">
                            <img class="me-2" width="40px" src="https://www.logo.wine/a/logo/Facebook/Facebook-f_Logo-Blue-Logo.wine.svg"alt="">
                            <span>Sign in with Facebook</span>
                          </span>
                        </a>
                      </div>
                      {{-- <div style="margin: 0 auto" class="d-grid">
                        <a href="{{ route('facebook.login') }}">
                            <div class="fb-login-button" data-width="" data-size="large" data-button-type="login_with" data-layout="rounded" data-auto-logout-link="false" data-use-continue-as="false"></div>
                        </a>
                      </div> --}}
                      <div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
                        <hr>
                      </div>
                        <div class="row g-3">
                          <div class="col-12">
                            @if ( Session::has('success') )
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <strong>{{ Session::get('success') }}</strong>
                                </div>
                            @endif
                            @if ( Session::has('error') )
                                <div class="alert alert-error alert-dismissible" role="alert">
                                    <strong>{{ Session::get('error') }}</strong>
                                </div>
                            @endif
                          </div>
                          <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                              <input type="email" name="email" class="form-control radius-30 ps-5" id="inputEmailAddress" placeholder="Email Address">
                            </div>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{$errors->first('email')}}</span>
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
                          <div class="col-6">
                            <div class="form-check form-switch">
                              <input class="form-check-input" name="remember" type="checkbox" id="flexSwitchCheckChecked">
                              <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                            </div>
                          </div>
                          <div class="col-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a>
                          </div>
                          <div class="col-12">
                            <div class="d-grid">
                              <button type="submit"  class="btn btn-primary radius-30">Sign In</button>
                            </div>
                          </div>
                          <div class="col-12">
                            <p class="mb-0">Don't have an account yet? <a href="{{route('signup.index')}}">Sign up here</a></p>
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


<!-- Mirrored from codervent.com/skodash/demo/collapsed-menu/ltr/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Aug 2021 16:38:11 GMT -->
</html>
