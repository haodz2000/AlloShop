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
        <!--Slider area start here-->

        <section class="slider-area">
            <div id="mr-carosel" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="slider-bg1"></div>
                        <div class="slide-tab">
                            <div class="slide-cell">
                                <div class="container-fluid">
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-md-offset-1">
                                        <div class="slider-content">
                                            <h1 class="be">New Summer</h1>
                                            <h3>Collection 2017</h3>
                                            <p>Smply dummy text of the printing and typesetting industry area loredim some dolalr its’ free dummy Dorem Ipsum standard dummysince.</p>
                                            <a class="btn1" href="#">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-bg2"></div>
                        <div class="slide-tab">
                            <div class="slide-cell">
                                <div class="container-fluid">
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-md-offset-1">
                                        <div class="slider-content">
                                            <h1 class="be">New Summer</h1>
                                            <h3>Collection 2017</h3>
                                            <p>Smply dummy text of the printing and typesetting industry area loredim some dolalr its’ free dummy Dorem Ipsum standard dummysince.</p>
                                            <a class="btn1" href="#">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Slider area end here-->
        <!--Client area start here-->
        <div class="client-area mr-b100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="client-slider">
                            <div class="single-client">
                                <a href="#"><img src="{{asset('./assets/client/images/client/1.png')}}" alt=""/></a>
                            </div>
                            <div class="single-client">
                                <a href="#"><img src="{{asset('./assets/client/images/client/2.png')}}" alt=""/></a>
                            </div>
                            <div class="single-client">
                                <a href="#"><img src="{{asset('./assets/client/images/client/3.png')}}" alt=""/></a>
                            </div>
                            <div class="single-client">
                                <a href="#"><img src="{{asset('./assets/client/images/client/4.png')}}" alt=""/></a>
                            </div>
                            <div class="single-client">
                                <a href="#"><img src="{{asset('./assets/client/images/client/5.png')}}" alt=""/></a>
                            </div>
                            <div class="single-client">
                                <a href="#"><img src="{{asset('./assets/client/images/client/6.png')}}" alt=""/></a>
                            </div>
                            <div class="single-client">
                                <a href="#"><img src="{{asset('./assets/client/images/client/7.png')}}" alt=""/></a>
                            </div>
                            <div class="single-client">
                                <a href="#"><img src="{{asset('./assets/client/images/client/8.png')}}" alt=""/></a>
                            </div>
                            <div class="single-client">
                                <a href="#"><img src="{{asset('./assets/client/images/client/9.png')}}" alt=""/></a>
                            </div>
                            <div class="single-client">
                                <a href="#"><img src="{{asset('./assets/client/images/client/10.png')}}" alt=""/></a>
                            </div>
                            <div class="single-client">
                                <a href="#"><img src="{{asset('./assets/client/images/client/1.png')}}" alt=""/></a>
                            </div>
                            <div class="single-client">
                                <a href="#"><img src="{{asset('./assets/client/images/client/2.png')}}" alt=""/></a>
                            </div>
                            <div class="single-client">
                                <a href="#"><img src="{{asset('./assets/client/images/client/3.png')}}" alt=""/></a>
                            </div>
                            <div class="single-client">
                                <a href="#"><img src="{{asset('./assets/client/images/client/4.png')}}" alt=""/></a>
                            </div>
                            <div class="single-client">
                                <a href="#"><img src="{{asset('./assets/client/images/client/5.png')}}" alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Client area end here-->
        <!--Banner area start here-->
        <!--Banner area end here-->
        <!--New product area start here-->
        <div class="order-form form-control hidden">

        </div>
        <section class="new-product-area section-two">
            <div class="container">

                <div class="row mr-b30">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="product-heading">
                            <h1>New Products</h1>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 text-right">
                        <ul class="tab-nav" role="tablist">
                            <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">all</a></li>
                            <li role="presentation"><a href="#men" aria-controls="men" role="tab" data-toggle="tab">Men</a></li>
                            <li role="presentation"><a href="#women" aria-controls="women" role="tab" data-toggle="tab">Women</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        @isset($newProducts)
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="all">
                                <div class="row accurate">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 accurate">
                                    @for ($i = 0 ; $i<2;$i++)
                                        @isset($newProducts[$i])
                                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 accurate">
                                            <div class="product-single">
                                                <figure>
                                                    <a href="{{ route('products.slug',['slug'=> $newProducts[$i]->slug]) }}">
                                                    <img class="normal" src="{{ asset('assets/client/images/product/'.$newProducts[$i]->url_image) }}" alt="{{ $newProducts[$i]->product_name }}"/>
                                                    <img class="hover" src="{{ asset('assets/client/images/product/'.$newProducts[$i]->url_image) }}" alt="{{ $newProducts[$i]->product_name }}"/>
                                                    </a>

                                                    <span class="product-position color1">New</span>
                                                    <span class="price">${{ $newProducts[$i]->price }}</span>
                                                    <ul>
                                                        <li><a data-id="{{ $newProducts[$i]->product_id }}" class="shopping-cart"><i  class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a ><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="{{ route('products.slug',['slug'=> $newProducts[$i]->slug]) }}"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                    <div class="product-des">
                                                        <a href="#"><h4>{{ $newProducts[$i]->product_name }}</h4></a>
                                                        <p>{{ $newProducts[$i]->categories->category_name }}</p>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                        @endisset
                                    @endfor
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 accurate">
                                        <div class="product-banner-slider">
                                            <div class="single-banner">
                                                <div class="product-img">
                                                    <img src="{{ asset('assets/client/images/banner/1.jpg') }}" alt=""/>
                                                </div>
                                                <div class="product-banner-con">
                                                    <h1>Leather X</h1>
                                                    <p>Horizon Waterproof Bag</p>
                                                    <a class="btn1" href="#">Read MOre</a>
                                                </div>
                                            </div>
                                            <div class="single-banner">
                                                <div class="product-img">
                                                    <img src="{{ asset('assets/client/images/banner/1.png') }}" alt=""/>
                                                </div>
                                                <div class="product-banner-con">
                                                    <h1>Leather X</h1>
                                                    <p>Horizon Waterproof Bag</p>
                                                    <a class="btn1" href="#">Read MOre</a>
                                                </div>
                                            </div>
                                            <div class="single-banner">
                                                <div class="product-img">
                                                    <img src="{{ asset('assets/client/images/banner/1.jpg') }}" alt=""/>
                                                </div>
                                                <div class="product-banner-con">
                                                    <h1>Leather X</h1>
                                                    <p>Horizon Waterproof Bag</p>
                                                    <a class="btn1" href="#">Read MOre</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 accurate">
                                        @for ($i = 2 ; $i<4;$i++)
                                        @isset($newProducts[$i])
                                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 accurate">
                                            <div class="product-single">
                                                <figure>
                                                    <a href="{{ route('products.slug',['slug'=> $newProducts[$i]->slug]) }}">
                                                    <img class="normal" src="{{ asset('assets/client/images/product/'.$newProducts[$i]->url_image) }}" alt="{{ $newProducts[$i]->product_name }}"/>
                                                    <img class="hover" src="{{ asset('assets/client/images/product/'.$newProducts[$i]->url_image) }}" alt="{{ $newProducts[$i]->product_name }}"/>
                                                    </a>

                                                    <span class="product-position color1">New</span>
                                                    <span class="price">${{ $newProducts[$i]->price }}</span>
                                                    <ul>
                                                        <li><a data-id="{{ $newProducts[$i]->product_id }}" class="shopping-cart"><i  class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a ><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="{{ route('products.slug',['slug'=> $newProducts[$i]->slug]) }}"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                    <div class="product-des">
                                                        <a href="#"><h4>{{ $newProducts[$i]->product_name }}</h4></a>
                                                        <p>{{ $newProducts[$i]->categories->category_name }}</p>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                        @endisset
                                    @endfor
                                    </div>
                                </div>
                                <div class="row accurate">
                                    @for ($i =4;$i<8;$i++)
                                    @isset($newProducts[$i])
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 accurate">
                                        <div class="product-single">
                                            <figure>
                                                <a href="{{ route('products.slug',['slug'=> $newProducts[$i]->slug]) }}">
                                                <img class="normal" src="{{ asset('assets/client/images/product/'.$newProducts[$i]->url_image) }}" alt="{{ $newProducts[$i]->product_name }}"/>
                                                <img class="hover" src="{{ asset('assets/client/images/product/'.$newProducts[$i]->url_image) }}" alt="{{ $newProducts[$i]->product_name }}"/>
                                                </a>

                                                <span class="product-position color1">New</span>
                                                <span class="price">${{ $newProducts[$i]->price }}</span>
                                                <ul>
                                                    <li><a data-id="{{ $newProducts[$i]->product_id }}" class="shopping-cart"><i  class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="{{ route('products.slug',['slug'=> $newProducts[$i]->slug]) }}"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                                <div class="product-des">
                                                    <a href="#"><h4>{{ $newProducts[$i]->product_name }}</h4></a>
                                                    <p>{{ $newProducts[$i]->categories->category_name }}</p>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    @endisset

                                    @endfor
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="men">
                                @isset($newProducts)
                                @foreach ($newProducts as $product )
                                    @if ($product->gender == 1)
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 accurate">
                                        <div class="product-single">
                                            <figure>
                                                <a {{ route('products.slug',['slug'=> $product->slug]) }}>
                                                <img class="normal" src="{{ asset('assets/client/images/product/'.$product->url_image) }}" alt="{{ $product->product_name }}"/>
                                                <img class="hover" src="{{ asset('assets/client/images/product/'.$product->url_image) }}" alt="{{ $product->product_name }}"/>
                                                </a>
                                                <span class="price">${{ $product->price }}</span>
                                                <ul>
                                                    <li><a data-id="{{ $product->product_id }}" class="shopping-cart"><i  class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="{{ route('products.slug',['slug'=> $product->slug]) }}"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                                <div class="product-des">
                                                    <a href="{{ route('products.slug',['slug'=> $product->slug]) }}"><h4>{{ $product->product_name }}</h4></a>
                                                    <p>{{ $product->categories->category_name }}</p>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            @endisset
                            </div>
                            <div role="tabpanel" class="tab-pane" id="women">
                                @isset($newProducts)
                                    @foreach ($newProducts as $product )
                                        @if ($product->gender == 2)
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 accurate">
                                            <div class="product-single">
                                                <figure>
                                                    <a href="/products/{{ $product->slug }}">
                                                    <img class="normal" src="{{ asset('assets/client/images/product/'.$product->url_image) }}" alt="{{ $product->product_name }}"/>
                                                    <img class="hover" src="{{ asset('assets/client/images/product/'.$product->url_image) }}" alt="{{ $product->product_name }}"/>
                                                    </a>
                                                    <span class="price">${{ $product->price }}</span>
                                                    <ul>
                                                        <li data-id="{{ $product->product_id }}" class="shopping-cart"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="/products/{{ $product->slug }}"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                    <div class="product-des">
                                                        <a href="/products/{{ $product->slug }}"><h4>{{ $product->product_name }}</h4></a>
                                                        <p>{{ $product->categories->category_name }}</p>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                @endisset

                            </div>
                        </div>
                        @endisset

                    </div>
                </div>
            </div>
        </section>
        <!--New product area end here-->
        <!--Banner area two start here-->

        <!--Banner area two end here-->
        <!--Best product area start here-->
        <section class="best-product section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mr-b50">
                        <ul class="tab-nav" role="tablist">
                            <li role="presentation" class="active"><a href="#best-seller" aria-controls="best-seller" role="tab" data-toggle="tab">Hot Product</a></li>
                            <li role="presentation"><a href="#popular-products" aria-controls="popular-products" role="tab" data-toggle="tab">Best Seller</a></li>
                            <li role="presentation"><a href="#best-rated" aria-controls="best-rated" role="tab" data-toggle="tab">Best Rated Products</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="tab-content">
                            <div class="tab-pane active" id="best-seller">
                                <div class="row accurate">
                                    @if (isset($listProducts))
                                        @foreach ($listProducts as $product )
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 accurate">
                                                <div class="product-single">
                                                        <figure>
                                                            <a href="/products/{{ $product->slug }}">
                                                                <img class="normal" src="{{asset('./assets/client/images/product/'.$product->url_image)}}" alt="{{$product->product_name}}"/>
                                                                <img class="hover" src="{{asset('./assets/client/images/product/'.$product->url_image)}}" alt="{{$product->product_name}}"/>
                                                            </a>
                                                            <span class="product-position color2">Hot</span>
                                                            <span class="price">${{ $product->price }}</span>
                                                            <ul>
                                                                <li><a data-id="{{ $product->product_id }}" class="shopping-cart" ><i  class="fa fa-shopping-cart"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="/products/{{ $product->slug }}"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                            <div class="product-des">
                                                                <a href="#"><h4>{{ $product->product_name }}</h4></a>
                                                                <p>{{ $product->categories->category_name }}</p>
                                                            </div>
                                                        </figure>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif


                                </div>
                            </div>
                            <div class="tab-pane" id="popular-products">
                                <div class="row accurate">
                                    @isset($bestSellerProduct)
                                        @foreach ( $bestSellerProduct as $product )
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 accurate">
                                            <div class="product-single">
                                                    <figure>
                                                        <a href="/products/{{ $product->slug }}">
                                                            <img class="normal" src="{{asset('./assets/client/images/product/'.$product->url_image)}}" alt="{{$product->product_name}}"/>
                                                        <img class="hover" src="{{asset('./assets/client/images/product/'.$product->url_image)}}" alt="{{$product->product_name}}"/>
                                                        </a>
                                                        <span class="product-position color2">Hot</span>
                                                        <span class="price">${{ $product->price }}</span>
                                                        <ul>
                                                            <li><a data-id="{{ $product->product_id }}" class="shopping-cart" ><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="/products/{{ $product->slug }}"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                        <div class="product-des">
                                                            <a href="/products/{{ $product->slug }}"><h4>{{ $product->product_name }}</h4></a>
                                                            <p>{{ $product->categories->category_name }}</p>
                                                        </div>
                                                    </figure>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endisset
                                </div>
                            </div>
                            <div class="tab-pane" id="best-rated">
                                <div class="row accurate">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 accurate">
                                        <div class="product-single">
                                            <figure>
                                                <img class="normal" src="{{asset('./assets/client/images/product/12.jpg')}}" alt=""/>
                                                <img class="hover" src="{{asset('./assets/client/images/product/12h.jpg')}}" alt=""/>
                                                <span class="product-position color1">New</span>
                                                <span class="price">$59</span>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                                <div class="product-des">
                                                    <a href="#"><h4>Rolex Machine</h4></a>
                                                    <p>Accessories</p>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 accurate">
                                        <div class="product-single">
                                            <figure>
                                                <img class="normal" src="{{asset('./assets/client/images/product/11.jpg')}}" alt=""/>
                                                <img class="hover" src="{{asset('./assets/client/images/product/11h.jpg')}}" alt=""/>
                                                <span class="price">$59</span>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                                <div class="product-des">
                                                    <a href="#"><h4>Rolex Machine</h4></a>
                                                    <p>Accessories</p>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Best product area end here-->
        <!--support area start here-->
        <section class="support-area pd-t80 pd-b80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="single-support pd-50">
                            <div class="suport-icon mr-r20 mr-t5">
                                <img src="{{asset('./assets/client/images/icon/1.png')}}" alt=""/>
                            </div>
                            <div class="content-support">
                                <h4>FREE SHIPPING </h4>
                                <p>On All Orders Of USD $50</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="single-support pd-50">
                            <div class="suport-icon mr-r20 mr-t5">
                                <img src="{{asset('./assets/client/images/icon/2.png')}}" alt=""/>
                            </div>
                            <div class="content-support">
                                <h4>24/7 SERVICE</h4>
                                <p>Get Help When You Need It</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="single-support pd-50">
                            <div class="suport-icon mr-r20 mr-t5">
                                <img src="{{asset('./assets/client/images/icon/3.png')}}" alt=""/>
                            </div>
                            <div class="content-support">
                                <h4>100% MONEY BACK</h4>
                                <p>30 Day Money Back Guarantee.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--support area end here-->
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
