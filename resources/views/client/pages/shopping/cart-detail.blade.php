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
<section class="breadcumb-area af" style="background: url(images/breadcumb/1.jpg);">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                <div class="breadcumb-content">

                    <div class="breadcumb-title">

                        <h1>Shipping Method</h1>

                    </div>

                    <div class="breadcumb-link">

                        <ul>

                            <li><a href="index-2.html">Home</a></li>

                            <li>-</li>

                            <li><a href="#">Men</a></li>

                            <li>-</li>

                            <li><a href="#">Shipping Method</a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--Breadcumb area end here-->

<!--Shipping area start here-->

<section class="shipping-area section">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mr-b30">

                <div class="button-area row">

                    <ul class="tab-nav" role="tablist">

                        <li class="active col-sm-4"><a href="#checkout" aria-controls="checkout" role="tab" data-toggle="tab">01. Checkout</a></li>

                        <li class="col-sm-4"><a href="#shipping" aria-controls="shipping" role="tab" data-toggle="tab">02. Shipping Method</a></li>

                        <li class="col-sm-4"><a href="#payment" aria-controls="payment" role="tab" data-toggle="tab">03.Payment</a></li>

                    </ul>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="tab-content" id="shiping">
                @if (Session('Cart'))
                <div class="tab-pane active" id="checkout">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="product-list table-cart">
                            @if ($cart = Session('Cart'))
                                <table>
                                    @foreach ($cart->products as $product)
                                    <tr>

                                        <td><img src="{{ asset('assets/client/images/product/1-sm.png') }}" alt=""/></td>

                                        <td>

                                            <div class="des-pro">

                                                <h4>{{ $product['productInfo']->product_name }}</h4><p>LifeStyle</p>

                                            </div>

                                        </td>

                                        <td><strong>${{ number_format( $product['productInfo']->price,2) }}</strong></td>

                                        <td>

                                            <div class="order-pro order1">
                                                <input type="number" style="height: 100%; width: 100px"  class="quantity" value="{{ $product['quantity'] }}" />
                                            </div>
                                        </td>

                                        <td><span class="prize">${{ number_format($product['price'],2) }}</span></td>

                                        <td><i class="fa fa-times close-item" data-sku="{{ $product['sku'] }}"></i></td>
                                    </tr>
                                    @endforeach

                                </table>
                                <div class="total text-right">

                                    <span>Total Price :</span>
                                    <strong>${{ number_format($cart->totalPrice,2) }}</strong>

                                </div>
                                <div class="next-step text-center">

                                    <button>Next Step</button>

                                </div>
                            @else
                                <div class="container alert alert-danger" >
                                    Giỏ hàng rỗng
                                </div>
                                <div class="alert">
                                    <a href="{{ route('home') }}">Quay lại hàng</a>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>

                <div class="tab-pane" id="shipping">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                        <div class="form-area row">

                            <h3>Billing Information</h3>

                            <form>

                                <fieldset>

                                    <div class="col-sm-6">

                                        <label>First Name *</label>

                                        <input type="text">

                                    </div>

                                    <div class="col-sm-6">

                                        <label>Last Name *</label>

                                        <input type="text">

                                    </div>

                                </fieldset>

                                <fieldset>

                                    <div class="col-sm-12">

                                        <label>Company Name</label>

                                        <input type="text">

                                    </div>

                                </fieldset>

                                <fieldset>

                                    <div class="col-sm-6">

                                        <label>E-mail Address * *</label>

                                        <input type="email">

                                    </div>

                                    <div class="col-sm-6">

                                        <label>Phone *</label>

                                        <input type="number">

                                    </div>

                                </fieldset>

                                <fieldset>

                                    <div class="col-sm-12">

                                        <label>Country</label>

                                        <select>

                                            <option>Select Your Country</option>

                                            <option>Bangladesh</option>

                                            <option>China</option>

                                            <option>USA</option>

                                        </select>

                                    </div>

                                </fieldset>

                                <fieldset>

                                    <div class="col-sm-12">

                                        <label>Address</label>

                                        <input type="text">

                                        <input type="text">

                                    </div>

                                </fieldset>

                                <fieldset>

                                    <div class="col-sm-12">

                                        <label>Town / City</label>

                                        <input type="text">

                                    </div>

                                </fieldset>

                                <fieldset>

                                    <div class="col-sm-6">

                                        <label>District *</label>

                                        <select>

                                            <option>Select Your District</option>

                                            <option>Dhaka</option>

                                            <option>Khulna</option>

                                            <option>Bagerhat</option>

                                        </select>

                                    </div>

                                    <div class="col-sm-6">

                                        <label>Postcode / ZIP</label>

                                        <input type="text">

                                    </div>

                                </fieldset>

                            </form>

                        </div>

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                        <div class="order-list">

                            <h3>Your Order</h3>

                            <table>

                                <tr>

                                    <td>Product</td>

                                    <td>Total</td>

                                </tr>

                                <tr>

                                    <td>1. Nikki Mike Pro</td>

                                    <td>$ 99.00</td>

                                </tr>

                                <tr>

                                    <td>2. Nikki Mike Pro </td>

                                    <td>$ 59.00</td>

                                </tr>

                                <tr class="row-bold">

                                    <td>Subtotal</td>

                                    <td>$ 158.00</td>

                                </tr>

                                <tr class="row-bold">

                                    <td>Total</td>

                                    <td>$ 158.00</td>

                                </tr>

                            </table>

                        </div>

                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 next-step text-center">

                        <button>Next Step</button>

                    </div>

                </div>

                <div class="tab-pane" id="payment">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="faq">
                            <div class="faq-content">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                      <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="pd-l10">Direct Bank Tranfeer</span>
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                      <div class="panel-body">
                                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                      <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                         <span class="pd-l10"> Check Payments</span>
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                      <div class="panel-body">
                                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                      <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                         <span class="pd-l10">Cash On Delivery</span>
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                      <div class="panel-body">
                                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="next-step text-center">

                        <button>Next Step</button>

                    </div>

                    </div>

                </div>
                @else
                <div class="container alert alert-danger" >
                    Giỏ hàng rỗng
                </div>
                <div class="alert">
                    <a class="btn btn-success" href="{{ route('home') }}">Quay lại </a>
                </div>
                @endif


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
        <script src="{{ asset('./assets/client/js/jquery.addtocart.js') }}"></script>
@endsection
