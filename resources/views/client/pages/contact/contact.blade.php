@extends('client.index')
@section('css_by_page')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('./assets/client/images/fav.png') }}">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ asset('./assets/client/css/bootstrap.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('./assets/client/css/animate.css') }}">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{ asset('./assets/client/css/jquery-ui.min.css') }}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('./assets/client/css/meanmenu.min.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('./assets/client/css/owl.carousel.min.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset('./assets/client/css/slick.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="{{ asset('./assets/client/css/magnific-popup.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset('./assets/client/css/font-awesome.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('./assets/client/css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('./assets/client/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/client/css/style-form.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('./assets/client/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <style>
        .map,.fanpage{
            box-sizing: border-box;
        }
        .map{
            margin-right:15px;
        }
        .fanpage{
            margin-left: 100px
        }
    </style>
@endsection
@section('content')
    @include('client.includes.support')
            <!--Breadcumb area start here-->

            <section class="breadcumb-area af jarallax" style="background: url({{ asset('assets/client/images/breadcumb/1.jpg') }});">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                            <div class="breadcumb-content">

                                <div class="breadcumb-title">

                                    <h1>Contact Us</h1>

                                </div>

                                <div class="breadcumb-link">

                                    <ul>

                                        <li><a href="index-2.html">Home</a></li>

                                        <li>-</li>

                                        <li><a href="#">Contact</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

            <!--Breadcumb area end here-->

            <!--Google map area start here-->

            <div class="google-map">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 accurate">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="map">
                                    <h3>Google Map</h3>
                                    <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.65031287046!2d105.84299461488295!3d21.006649986010384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac76157d30a3%3A0x9cdc350b8f4e8f0c!2zxJDhuqFpIEjhu41jIELDoWNoIEtob2E!5e0!3m2!1sen!2s!4v1636074363795!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!--Google map area end here-->

            <!--Contact form area start here-->

            <section class="contact-area section">

                <div class="container">

                    <div class="row">

                        <div class="clo-lg-4 md-4 col-sm-4 col-xs-12">

                            <div class="contact-info">

                                <h3>Confact Info</h3>

                                <div class="info-list">

                                    <div class="single-info">

                                        <div class="info-icon">

                                            <i class="fa fa-map-marker"></i>

                                        </div>

                                        <div class="info-con">

                                            <p> Đại học Bách Khoa Hà Nội</p>

                                        </div>

                                    </div>

                                    <div class="single-info">

                                        <div class="info-icon">

                                            <i class="fa fa-envelope-o"></i>

                                        </div>

                                        <div class="info-con">

                                            <p>tahuuhao1810@gmai.com</p>

                                        </div>

                                    </div>

                                    <div class="single-info">

                                        <div class="info-icon">

                                            <i class="fa fa-phone"></i>

                                        </div>

                                        <div class="info-con">

                                            <p>+ 84962534900</p>

                                        </div>

                                    </div>

                                     <div class="single-info">

                                        <div class="info-icon">

                                            <i class="fa fa-fax"></i>

                                        </div>

                                        <div class="info-con">

                                            <p>+ 9850678910</p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <h4>Fanpage</h4>
                            <div class="message">
                                <div class="fb-page"
                                data-tabs="messages,events,timeline"
                                data-href="https://www.facebook.com/AlloShop-100523459115884"
                                data-width="500"
                                data-hide-cover="false"></div>
                            </div>

                        </div>

                    </div>

                </div>

            </section>

            <!--Contact form area end here-->
@endsection
@section('js_by_page')
    <script src="{{ asset('./assets/client/js/vendor/./jquery-1.12.0.min.js')}}"></script>
		<!-- bootstrap js -->
        <script src="{{ asset('./assets/client/js/bootstrap.min.js')}}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('./assets/client/js/owl.carousel.min.js')}}"></script>
		<!-- isotope js -->
        <script src="{{ asset('./assets/client/js/isotope.pkgd.min.js')}}"></script>
        <!-- magnific popup js -->
        <script src="{{ asset('./assets/client/js/jquery.magnific-popup.min.js')}}"></script>
		<!-- meanmenu js -->
        <script src="{{ asset('./assets/client/js/jquery.meanmenu.js')}}"></script>
        <!-- jarallax js -->
        <script src="{{ asset('./assets/client/js/jarallax.min.js')}}"></script>
		<!-- jquery-ui js -->
        <script src="{{ asset('./assets/client/js/jquery-ui.min.js')}}"></script>
		<!-- wow js -->
        <script src="{{ asset('./assets/client/js/wow.min.js')}}"></script>
        <!-- Touch Slider js -->
        <script src="{{ asset('./assets/client/js/touchslider.js')}}"></script>
        <!-- slick js -->
        <script src="{{ asset('./assets/client/js/slick.min.js')}}"></script>
        <!-- downCount JS -->
        <script src="{{ asset('./assets/client/js/jquery.downCount.js')}}"></script>
		<!-- plugins js -->
        <script src="{{ asset('./assets/client/js/plugins.js')}}"></script>
		<!-- main js -->
        <script src="{{ asset('./assets/client/js/main.js')}}"></script>
@endsection
