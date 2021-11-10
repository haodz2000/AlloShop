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
        <!-- modernizr css -->
        <script src="{{ asset('./assets/client/js/vendor/modernizr-2.8.3.min.js') }}"></script>
        <style>
            .order-form{
                display: block;
                max-width: 600px;
                height: 600px;
                background-color: rgba(195, 84, 172, 0.8);
                position: sticky;
                left: 35%;
                top: 20%;
                z-index: 99999;
                transform: translateY(-5%);
                animation-name: example;
                animation-duration: 2s;
                animation-iteration-count: 1;
                transition: example 2s;
                transition-timing-function: ease;
            }
            .order-form .imgslide{
                max-width: 300px;
                border-radius: 5px;
                background-color: #ffffff;
                position: relative;
                left: 22%;
            }
            @keyframes example {
                0%   {background-image:rgba(177, 221, 235,0.8); left:35%; top:0px;}
                100% {background-image:rgba(108, 118, 202,0.3); left:35%; top:20%;}
            }
            .order-form form strong,input,select,option,button{
                box-sizing: border-box;
                padding-left: 15px;
                margin-bottom: 5px
            }
        </style>
@endsection
@section('content')
    @include('client.includes.support')

    <section class="breadcumb-area af jarallax" style="background: url({{ asset('assets/client/images/breadcumb/1.jpg') }});">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                    <div class="breadcumb-content">

                        <div class="breadcumb-title">

                            <h1>Men’s  Clothes</h1>

                        </div>

                        <div class="breadcumb-link">

                            <ul>

                                <li><a href="{{ route('home') }}">Home</a></li>

                                <li>-</li>

                                <li><a href="{{ route('clothes.men') }}">Men</a></li>

                                <li>-</li>

                                <li><a href="#">Clothes</a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <div class="order-form form-control hidden">
    </div>
    <section class="product-page-one section">

        <div class="container">

            <div class="row product-filters">

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                    <div class="show-product">

                        <p>Showing 1 - 10 of 30 Products</p>

                    </div>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

                    <div class="product-filter text-right">

                        <ul class="filter-con">

                            <li>

                                <select>

                                    <option>Price Filter</option>

                                    <option>$10 - $100</option>

                                    <option>$110 - $200</option>

                                    <option>$210 - $300</option>

                                </select>

                            </li>

                            <li>

                                <select>

                                    <option>Color</option>

                                    <option>Blue</option>

                                    <option>Red</option>

                                    <option>Green</option>

                                </select>

                            </li>

                            <li>

                                <select>

                                    <option>Size</option>

                                    <option>1x2</option>

                                    <option>5x6</option>

                                    <option>8x6</option>

                                </select>

                            </li>

                            <li>

                                <select>

                                    <option>Short By</option>

                                    <option>New</option>

                                    <option>Sale</option>

                                    <option>Best</option>

                                </select>

                            </li>

                            <li class="grid-list">

                                <ul>

                                    <li><a href="#" id="grid"><span class="glyphicon glyphicon-th"></span></a></li>

                                    <li><a href="#" id="list"><span class="glyphicon glyphicon-th-list"></span></a></li>

                                </ul>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="row" id="products">

                @isset($listProduct)
                    @foreach ($listProduct as $product )
                    <div class="item col-lg-3 col-md-3 col-sm-12 col-xs-12">

                        <div class="single-product">

                            <figure>
                                <a href="{{ route('products.slug',['slug'=>$product->slug]) }}">
                                    <img class="normal" src="{{ asset('assets/client/images/product/'.$product->url_image) }}" alt="{{ $product->product_name }}"/>

                                    <img class="hover" src="{{ asset('assets/client/images/product/'.$product->url_image) }}" alt="{{ $product->product_name }}"/>
                                </a>
                                <span class="price">Giá: <strong>${{ $product->price }}</strong></span>
                                <span style="float: right">Đã bán:<strong>{{ $product->quanity_orderd?$product->quantity_order:0 }}</strong></span>
                                <span class="product-position color1">New</span>
                                <ul>
                                    <li><a  data-id="{{ $product->product_id }}" class="shopping-cart"><i class="fa fa-shopping-cart"></i></a></li>

                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>

                                    <li><a href="{{ route('products.slug',['slug'=>$product->slug]) }}"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </figure>

                            <div class="product-content">

                                <h4>{{ $product->product_name }}</h4>

                                <h5>{{ $product->categories->category_name }}</h5>
                                <p>{{ $product->description }}</p>
                            </div>

                        </div>

                    </div>
                    @endforeach
                @endisset
            </div>
        </div>

    </section>
    @include('client.includes.client-area')
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
        <script src="{{ asset('./assets/client/js/jquery.addToCart.js')}}"></script>
        <script>
            const urlGetDataProduct = '{{ route('getDataProduct') }}';
            const urlProductDetail =  '{{ route('product.detail') }}';
        </script>
         <script src="{{ asset('assets/client/js/jquery.formOrder.js') }}">
         </script>
@endsection
