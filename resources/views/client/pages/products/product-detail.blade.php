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
@endsection
@section('content')
    @include('client.includes.support')
    <section class="breadcumb-area af jarallax" style="background: url({{ asset('./assets/client/images/breadcumb/1.jpg') }});">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                    <div class="breadcumb-content">

                        <div class="breadcumb-title">

                            <h1>Single Product View</h1>

                        </div>

                        <div class="breadcumb-link">

                            <ul>

                                <li><a href="index-2.html">Home</a></li>

                                <li>-</li>

                                <li><a href="#">Men</a></li>

                                <li>-</li>

                                <li><a href="#">Single Product</a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <section class="product-single section">

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 floatright">

                    <div class="row">

                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                            <div class="product-photo">



                                <div class="preview-pic tab-content">

                                    <div class="tab-pane active" id="pic-1"><img style="width: 637px; height:607px" src="{{ asset('assets/client/images/product/'.$product->url_image) }}" alt=""/></div>

                                    <div class="tab-pane" id="pic-2"><img style="width: 637px; height:607px" src="{{ asset('assets/client/images/product/'.$product->url_image) }}" alt=""/></div>

                                    <div class="tab-pane" id="pic-3"><img style="width: 637px; height:607px" src="{{ asset('assets/client/images/product/'.$product->url_image) }}" alt=""/></div>

                                    <div class="tab-pane" id="pic-4"><img style="width: 637px; height:607px" src="{{ asset('assets/client/images/product/'.$product->url_image) }}" alt=""/></div>

                                </div>

                                <ul class="preview-thumbnail nav nav-tabs mr-l5">

                                    <li class="active">

                                        <a data-target="#pic-1" data-toggle="tab"><img src="{{ asset('./assets/client/images/product/'.$product->url_image) }}"alt="" /></a>

                                    </li>

                                    <li>

                                        <a data-target="#pic-2" data-toggle="tab"><img src="{{ asset('./assets/client/images/product/'.$product->url_image) }}" alt="" /></a>

                                    </li>

                                    <li>

                                        <a data-target="#pic-3" data-toggle="tab"><img src="{{ asset('./assets/client/images/product/'.$product->url_image) }}" alt="" /></a>

                                    </li>

                                    <li>

                                        <a data-target="#pic-4" data-toggle="tab"><img src="{{ asset('./assets/client/images/product/'.$product->url_image) }}" alt="" /></a>

                                    </li>

                                </ul>

                            </div>

                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                            <div class="product-con">

                                <h2>{{ $product->product_name }}</h2>

                                <p>{{ $product->categories->category_name }}</p>

                                <div class="pro-review">

                                    <ul class="list-inline">

                                        <li><strong>${{ $product->price }}</strong></li>

                                        <li class="floatright">

                                            <ul class="list-inline">

                                                <li><i class="fa fa-star"></i></li>

                                                <li><i class="fa fa-star"></i></li>

                                                <li><i class="fa fa-star"></i></li>

                                                <li><i class="fa fa-star"></i></li>

                                                <li><i class="fa fa-star-o"></i></li>

                                                <li><span>(10)</span></li>

                                            </ul>

                                        </li>

                                    </ul>

                                </div>

                                <div class="pro-deti">
                                    <p>{{ $product->description }}</p>
                                </div>
                                <Form class="Form-Add-To-Cart" action="" method="POST">
                                    @csrf
                                    <div class="pro-color">

                                        <h4>Select Color:</h4>

                                        <ul class="list-inline">
                                            @if ($productDetail)
                                                <select name="color" id="color">
                                                    @foreach ($productDetail as $key=>$value )
                                                        <li><option value="{{ $value->color_id }}">{{ $value->colors->color }}</option></li>
                                                    @endforeach
                                                </select>

                                            @endif
                                            {{-- <li><span class="c-2"><i class="fa fa-check"></i></span></li>

                                            <li><span class="c-3"><i class="fa fa-check"></i></span></li>

                                            <li><span class="c-4"><i class="fa fa-check"></i></span></li>

                                            <li><span class="c-5"><i class="fa fa-check"></i></span></li>

                                            <li><span class="c-6"><i class="fa fa-check"></i></span></li>

                                            <li><span class="c-7"><i class="fa fa-check"></i></span></li> --}}
                                        </ul>

                                    </div>

                                    <div class="pro-size">

                                        <h4>Select Size:</h4>

                                        <table>

                                            <tr>
                                                <td>
                                                    @if ($productDetail)
                                                        <select style="height:100%" data-id="{{ $productDetail[0]->product_id }}" required name="size" id="size">
                                                            <option value="">Size</option>
                                                            @foreach ($productDetail as $key=>$value )
                                                                <option value="{{ $value->size_id }}">{{ $value->sizes->size }}</option>
                                                            @endforeach
                                                        </select>
                                                    @endif
                                                </td>

                                            </tr>
                                            <tr>
                                                <td id="quantity-store"></td>
                                                <input type="hidden" required name="sku" id="sku" value="">
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="pro-button">

                                        <ul class="list-inline">

                                            <li><button style=" display: block;
                                                background: #2962ff;
                                                color: #fff;
                                                padding: 12px 20px;
                                                font-size: 18px;
                                                height: 50px;
                                                width: auto;" type="sumit" data-id="{{ $product->product_id }}" id="addItemCart"><i class="fa fa-shopping-cart"></i>Add To Cart</button></li>
                                            <li>
                                                <input id="quantity" type="number" name="quantity" value="1" />
                                                <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
                                                <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                                            </li>
                                            <li><a  href="#"><i class="fa fa-heart-o"></i></a></li>

                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </Form>
                            </div>

                        </div>

                    </div>

                    <!--Product Description area start here-->

                    <div class="row product-description section">

                        <div class="col-lg-12 col-md-12 col-xs-12">

                            <ul class="tab-nav" role="tablist">

                                <li class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>

                                <li><a href="#review" aria-controls="review" role="tab" data-toggle="tab">Reviews (04)</a></li>

                            </ul>

                        </div>

                        <div class="col-lg-12 col-md-12 col-xs-12">

                            <div class="tab-content">

                                <div class="tab-pane active" id="description">

                                    <div class="description-con">

                                        <h4>Specification:</h4>

                                        <p>{{ $product->description }}</p>
                                        <h4>Features:</h4>

                                        <ul>

                                            <li>Baby Boys’ Two Piece Set with Blue Tank Top </li>

                                            <li>Microfiber Short the other hand, we denounce </li>

                                            <li>Tighteous indignation and dislike </li>

                                            <li>Men who are so beguiled </li>

                                        </ul>

                                    </div>

                                </div>

                                <div class="tab-pane" id="review">

                                    <div class="review-con">

                                        <div class="single-review mr-b30">

                                            <div class="user-photo">

                                                <img src="{{ asset('assets/client/images/review/1.jpg') }}" alt=""/>

                                            </div>

                                            <div class="review-content">

                                                <div class="heading-review">

                                                    <h4>Kazi Fahim</h4>

                                                    <ul class="list-inline">

                                                        <li><i class="fa fa-star"></i></li>

                                                        <li><i class="fa fa-star"></i></li>

                                                        <li><i class="fa fa-star"></i></li>

                                                        <li><i class="fa fa-star"></i></li>

                                                        <li><i class="fa fa-star-half-o"></i></li>

                                                    </ul>

                                                    <span class="date">25/04/2017</span>

                                                </div>

                                                <p>Esimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the simply dummy text of the printing and typesetting industry. </p>

                                            </div>

                                        </div>

                                        <div class="single-review mr-b30">

                                            <div class="user-photo">

                                                <img src="{{ asset('./assets/client/images/review/2.jpg') }}" alt=""/>

                                            </div>

                                            <div class="review-content">

                                                <div class="heading-review">

                                                    <h4>Josef tina</h4>

                                                    <ul class="list-inline">

                                                        <li><i class="fa fa-star"></i></li>

                                                        <li><i class="fa fa-star"></i></li>

                                                        <li><i class="fa fa-star"></i></li>

                                                        <li><i class="fa fa-star"></i></li>

                                                        <li><i class="fa fa-star-half-o"></i></li>

                                                    </ul>

                                                    <span class="date">20/04/2017</span>

                                                </div>

                                                <p>Esimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the simply dummy text of the printing and typesetting industry. </p>

                                            </div>

                                        </div>

                                        <div class="single-review">

                                            <div class="user-photo">

                                                <img src="{{ asset('./assets/client/images/review/3.jpg') }}" alt=""/>

                                            </div>

                                            <div class="review-content">

                                                <div class="heading-review">

                                                    <h4>Rupsha alain</h4>

                                                    <ul class="list-inline">

                                                        <li><i class="fa fa-star"></i></li>

                                                        <li><i class="fa fa-star"></i></li>

                                                        <li><i class="fa fa-star"></i></li>

                                                        <li><i class="fa fa-star"></i></li>

                                                        <li><i class="fa fa-star-half-o"></i></li>

                                                    </ul>

                                                    <span class="date">18/04/2017</span>

                                                </div>

                                                <p>Esimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the simply dummy text of the printing and typesetting industry. </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!--Product Description area end here-->

                    <!--New product area start here-->

                    <div class="new-product-three">

                        <div class="row mr-b20">

                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">

                                <div class="product-heading">

                                   <h2>You May Also Like</h2>

                                </div>

                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

                                <div class="controls pull-right">

                                    <a class="left fa fa-chevron-left btn" href="#new-product" data-slide="prev"></a>

                                    <a class="right fa fa-chevron-right btn" href="#new-product" data-slide="next"></a>

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div id="new-product" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->

                                <div class="carousel-inner">

                                    <div class="item active">

                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                            <div class="single-product">

                                                <figure>

                                                    <img class="normal" src="{{ asset('./assets/client/images/product/22.jpg') }}" alt=""/>

                                                    <img class="hover" src="{{ asset('./assets/client/images/product/22h.jpg') }}" alt=""/>

                                                    <ul>

                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>

                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>

                                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>

                                                    </ul>

                                                </figure>

                                                <div class="product-content">

                                                    <h4>NeoArt Jacket</h4>

                                                    <p>Men Wear</p>

                                                    <span class="price">$30</span>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                            <div class="single-product">

                                                <figure>

                                                    <img class="normal" src="{{ asset('./assets/client/images/product/24.jpg') }}" alt=""/>

                                                    <img class="hover" src="{{ asset('./assets/client/images/product/24h.jpg') }}" alt=""/>

                                                    <ul>

                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>

                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>

                                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>

                                                    </ul>

                                                </figure>

                                                <div class="product-content">

                                                    <h4>NeoArt Jacket</h4>

                                                    <p>Men Wear</p>

                                                    <span class="price">$30</span>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                            <div class="single-product">

                                                <figure>

                                                    <img class="normal" src="{{ asset('./assets/client/images/product/21.jpg') }}" alt=""/>

                                                    <img class="hover" src="{{ asset('./assets/client/images/product/21h.jpg') }}" alt=""/>

                                                    <ul>

                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>

                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>

                                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>

                                                    </ul>

                                                </figure>

                                                <div class="product-content">

                                                    <h4>NeoArt Jacket</h4>

                                                    <p>Men Wear</p>

                                                    <span class="price">$30</span>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                            <div class="single-product">

                                                <figure>

                                                    <img class="normal" src="{{ asset('./assets/client/images/product/26.jpg') }}" alt=""/>

                                                    <img class="hover" src="{{ asset('./assets/client/images/product/26h.jpg') }}" alt=""/>

                                                    <ul>

                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>

                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>

                                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>

                                                    </ul>

                                                </figure>

                                                <div class="product-content">

                                                    <h4>NeoArt Jacket</h4>

                                                    <p>Men Wear</p>

                                                    <span class="price">$30</span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="item">

                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                            <div class="single-product">

                                                <figure>

                                                    <img class="normal" src="{{ asset('./assets/client/images/product/20.jpg') }}" alt=""/>

                                                    <img class="hover" src="{{ asset('./assets/client/images/product/20h.jpg') }}" alt=""/>

                                                    <span class="product-position color1">New</span>

                                                    <ul>

                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>

                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>

                                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>

                                                    </ul>

                                                </figure>

                                                <div class="product-content">

                                                    <h4>NeoArt Jacket</h4>

                                                    <p>Men Wear</p>

                                                    <span class="price">$30</span>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                            <div class="single-product">

                                                <figure>

                                                    <img class="normal" src="{{ asset('./assets/client/images/product/10.jpg') }}" alt=""/>

                                                    <img class="hover" src="{{ asset('./assets/client/images/product/10h.jpg') }}" alt=""/>

                                                    <span class="product-position color1">New</span>

                                                    <ul>

                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>

                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>

                                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>

                                                    </ul>

                                                </figure>

                                                <div class="product-content">

                                                    <h4>NeoArt Jacket</h4>

                                                    <p>Men Wear</p>

                                                    <span class="price">$30</span>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                            <div class="single-product">

                                                <figure>

                                                    <img class="normal" src="{{ asset('./assets/client/images/product/18.jpg') }}" alt=""/>

                                                    <img class="hover" src="{{ asset('./assets/client/images/product/18h.jpg') }}" alt=""/>

                                                    <span class="product-position color1">New</span>

                                                    <ul>

                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>

                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>

                                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>

                                                    </ul>

                                                </figure>

                                                <div class="product-content">

                                                    <h4>NeoArt Jacket</h4>

                                                    <p>Men Wear</p>

                                                    <span class="price">$30</span>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                            <div class="single-product">

                                                <figure>

                                                    <img class="normal" src="{{ asset('./assets/client/images/product/19.jpg') }}" alt=""/>

                                                    <img class="hover" src="{{ asset('./assets/client/images/product/19h.jpg') }}" alt=""/>

                                                    <span class="product-position color1">New</span>

                                                    <ul>

                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>

                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>

                                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>

                                                    </ul>

                                                </figure>

                                                <div class="product-content">

                                                    <h4>NeoArt Jacket</h4>

                                                    <p>Men Wear</p>

                                                    <span class="price">$30</span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!--New product area end here-->

                </div>

                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">

                    <div class="sidbar-area">

                        <div class="widget categori">

                            <div class="widget-title">

                                <h3>Categories</h3>

                            </div>

                            <div class="categori-content">

                                <ul>

                                    <li><a href="#">LifeStyle <span>(40)</span></a></li>

                                    <li><a href="#">T-Shirt <span>(20)</span></a></li>

                                    <li><a href="#">Dress <span>(100)</span></a></li>

                                    <li><a href="#">Sports Shoes  <span>(150)</span></a></li>

                                    <li><a href="#">Sunglass <span>(80)</span></a></li>

                                    <li><a href="#">Travel Bag  <span>(90)</span></a></li>

                                    <li><a href="#">Accessories <span>(200)</span></a></li>

                                </ul>

                            </div>

                        </div>

                        <div class="widget price">

                            <div class="widget-title">

                                <h3>Price</h3>

                            </div>

                            <div class="price-con">

                                 <div id="range-price" class="range-box"></div>

                                 <input type="text" id="price" readonly/>

                                 <input type="text" id="price2" readonly/>

                            </div>

                        </div>

                        <div class="widget seal">

                            <div class="widget-title">

                                <h3>Best Selling</h3>

                            </div>

                            <div class="seal-con">

                                <div class="list-seal">

                                    <div class="seal-img">

                                        <img src="{{ asset('./assets/client/images/product/13-sm.jpg') }}" alt=""/>

                                    </div>

                                    <div class="seal-con">

                                        <a href="#"><h4>Product Title</h4></a>

                                        <ul class="list-inline">

                                            <li><i class="fa fa-star"></i></li>

                                            <li><i class="fa fa-star"></i></li>

                                            <li><i class="fa fa-star"></i></li>

                                            <li><i class="fa fa-star"></i></li>

                                            <li><i class="fa fa-star"></i></li>

                                        </ul>

                                        <strong>$20</strong>

                                    </div>

                                </div>

                                <div class="list-seal">

                                    <div class="seal-img">

                                        <img src="{{ asset('assets/client/images/product/14-sm.jpg')}}" alt=""/>

                                    </div>

                                    <div class="seal-con">

                                        <a href="#"><h4>Product Title</h4></a>

                                        <ul class="list-inline">

                                            <li><i class="fa fa-star"></i></li>

                                            <li><i class="fa fa-star"></i></li>

                                            <li><i class="fa fa-star"></i></li>

                                            <li><i class="fa fa-star"></i></li>

                                            <li><i class="fa fa-star"></i></li>

                                        </ul>

                                        <strong>$20</strong>

                                    </div>

                                </div>

                                <div class="list-seal">

                                    <div class="seal-img">

                                        <img src="{{ asset('./assets/client/images/product/15-sm.jpg') }}" alt=""/>

                                    </div>

                                    <div class="seal-con">

                                        <a href="#"><h4>Product Title</h4></a>

                                        <ul class="list-inline">

                                            <li><i class="fa fa-star"></i></li>

                                            <li><i class="fa fa-star"></i></li>

                                            <li><i class="fa fa-star"></i></li>

                                            <li><i class="fa fa-star"></i></li>

                                            <li><i class="fa fa-star"></i></li>

                                        </ul>

                                        <strong>$20</strong>

                                    </div>

                                </div>

                                <div class="list-seal">

                                    <div class="seal-img">

                                        <img src="{{ asset('./assets/client/images/product/16-sm.jpg') }}" alt=""/>

                                    </div>

                                    <div class="seal-con">

                                        <a href="#"><h4>Product Title</h4></a>

                                        <ul class="list-inline">

                                            <li><i class="fa fa-star"></i></li>

                                            <li><i class="fa fa-star"></i></li>

                                            <li><i class="fa fa-star"></i></li>

                                            <li><i class="fa fa-star"></i></li>

                                            <li><i class="fa fa-star"></i></li>

                                        </ul>

                                        <strong>$20</strong>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="widget tags">

                            <div class="widget-title">

                                <h3>Popular Tags</h3>

                            </div>

                            <div class="tags-list">

                                <ul class="list-inline">

                                    <li><a href="#">Fashion</a></li>

                                    <li><a href="#">Glamour</a></li>

                                    <li><a href="#">Shoes</a></li>

                                    <li><a href="#">Dress</a></li>

                                    <li><a href="#">Kid’s</a></li>

                                    <li><a href="#">Accessories</a></li>

                                    <li><a href="#">Mobile</a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

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
        <script src="{{ asset('./assets/client/js/jquery.addToCart.js') }}"></script>
@endsection
