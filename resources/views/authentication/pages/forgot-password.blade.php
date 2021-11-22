<!doctype html>
<html lang="en" class="light-theme">


<!-- Mirrored from codervent.com/skodash/demo/collapsed-menu/ltr/authentication-forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Aug 2021 16:38:11 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('./assets/client/images/fav.png') }}">
    <title>Forgot Password</title>

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
                <div class="col-lg-6 d-flex align-items-center justify-content-center border-end">
                  <img src="{{ asset('assets/admin/images/error/forgot-password-frent-img.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                  <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title">Forgot Password?</h5>
                    <p class="card-text mb-5">Enter your registered email ID to reset the password</p>
                    <form class="form-body" method="POST" action="{{ route('reset.password') }}">
                        @csrf
                        <div class="row g-3">
                          <div class="col-12">
                            <label for="inputEmailid" class="form-label">Email</label>
                            <input type="email" name="email" required class="form-control form-control-lg radius-30" id="inputEmailid" placeholder="Email">
                          </div>
                          <div class="col-12">
                            <div class="d-grid gap-3">
                              <button type="submit" class="btn btn-lg btn-primary radius-30">Send</button>
							                <a href="{{ route('signin.index') }}" class="btn btn-lg btn-light radius-30">Back to Login</a>
                            </div>
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


  <!--plugins-->
  <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/admin/js/pace.min.js') }}"></script>


</body>


<!-- Mirrored from codervent.com/skodash/demo/collapsed-menu/ltr/authentication-forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Aug 2021 16:38:12 GMT -->
</html>
