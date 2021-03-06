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
<div class="order-form form-control hidden">

</div>
<section class="shipping-area section">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mr-b30">

                <div class="button-area row">

                    <ul class="tab-nav" role="tablist">

                        <li class="active col-sm-6"><a href="#checkout" aria-controls="checkout" role="tab" data-toggle="tab">01. Checkout</a></li>

                        <li class="col-sm-6"><a href="#shipping" aria-controls="shipping" role="tab" data-toggle="tab">02. Payment</a></li>

                        {{-- <li class="col-sm-4"><a href="#payment" aria-controls="payment" role="tab" data-toggle="tab">03.Payment</a></li> --}}

                    </ul>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="tab-content" id="shiping">
                @if (Session('Cart'))
                <div class="tab-pane active" id="checkout">
                    <span class="alert"></span>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-list table-cart">
                            @if ($cart = Session('Cart'))
                                <table>
                                    @foreach ($cart->products as $product)
                                    <div class="row">
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="{{ route('products.slug',['slug'=>$product['productInfo']->slug]) }}">
                                                        @php
                                                            $image = json_decode($product['productInfo']->url_image)
                                                        @endphp
                                                        <img  src="{{ asset('assets/storage/images/product/'.$image[0]) }}"alt="{{ $product['productInfo']->product_name }}"/>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="des-pro">
                                                    <a href="{{ route('products.slug',['slug'=>$product['productInfo']->slug]) }}">
                                                        <h4>{{ $product['productInfo']->product_name }}</h4>
                                                    </a>
                                                    <p>
                                                            <span>Size:</span>
                                                            <select data-id="{{ $product['productInfo']->product_id }}" data-sku="{{ $product['sku'] }}" class="size form-control">
                                                                <option value="{{ $product['size'] }}">{{ $product['size'] }}</option>
                                                            </select>
                                                            <span>Color:</span>
                                                            <select data-id="{{ $product['productInfo']->product_id }}" data-sku="{{ $product['sku'] }}" class="color form-control">
                                                                <option value="{{ $product['color'] }}">{{ $product['color'] }}</option>
                                                            </select>
                                                    </p>
                                                </div>
                                            </td>
                                            <td><strong>${{ number_format( $product['productInfo']->price,2) }}</strong></td>
                                            <td>
                                                <div class="order-pro order1">
                                                    <input  type="number" style="height: 100%; width: 80px"  class="quantity_order form-control" data-sku="{{ $product['sku'] }}" value="{{ $product['quantity'] }}" />
                                                </div>
                                            </td>
                                            <td><span class="prize">${{ number_format($product['price'],2) }}</span></td>

                                            <td><i class="fa fa-times close-item" data-sku="{{ $product['sku'] }}"></i></td>
                                        </tr>
                                    </div>
                                    @endforeach
                                </table>
                                <div class="total text-right">
                                    <span>Total Price :</span>
                                    <strong>${{ number_format($cart->totalPrice,2) }}</strong>
                                </div>
                                <div class="next-step text-center">
                                    <a href="{{ route('home') }}"><button class="text-success">Ti???p t???c mua s???m</button></a>
                                </div>
                            @else
                                <div class="container alert alert-danger" >
                                    Gi??? h??ng r???ng
                                </div>
                                <div class="next-step text-center">
                                    <a href="{{ route('home') }}"><button class="text-success">Ti???p t???c mua s???m</button></a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="shipping">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="faq">
                                <div class="faq-content">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                      <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                          <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span class="pd-l10">S??? d???ng th??ng tin v?? ?????a ch??? c??</span>
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                          <div class="panel-body">
                                            <Form action="{{ route('checkout') }}" method="Post">
                                                @csrf
                                                <input type="hidden" name="infomation" value="old">
                                                <fieldset>

                                                    <div class="col-sm-12">

                                                        <label class="form-control">Name: {{ Auth::user()->name }}</label>
                                                    </div>

                                                </fieldset>

                                                <fieldset>

                                                    <div class="col-sm-12">

                                                        <label class="form-control">E-mail Address: {{ Auth::user()->email }}</label>

                                                    </div>

                                                    <div class="col-sm-12">
                                                        <label class="form-control">Phone: {{ Auth::user()->phone }}</label>
                                                    </div>
                                                </fieldset>
                                                <fieldset>

                                                    <div class="col-sm-12">
                                                        <label class="form-control">Address: {{ Auth::user()->address }}</label>
                                                    </div>

                                                </fieldset>
                                                <fieldset>

                                                    <div class="col-sm-12">
                                                        <label>????n v??? v???n chuy???n :</label>
                                                        <select class="form-control" name="shipper" id="shipper">
                                                            @foreach ($shippers as $shipper )
                                                                <option value="{{ $shipper->shipper_id  }}">{{ $shipper->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </fieldset>
                                                <fieldset>
                                                    <div class="col-sm-12">
                                                        <label>Ghi ch??</label>
                                                        <br>
                                                        <textarea class="form-control" name="note" id="note" cols="50" rows="3">
                                                        </textarea>
                                                    </div>
                                                </fieldset>
                                                <br>
                                                <fieldset>
                                                    <div class="col-sm-12">
                                                        <button style="margin-left:40%" type="submit" class="btn btn-success">Check-Out</button>
                                                    </div>
                                                </fieldset>
                                            </Form>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                          <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                             <span class="pd-l10">S??? d???ng ?????a ch??? m???i</span>
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                          <div class="panel-body">
                                            <Form action="{{ route('checkout') }}" method="Post">
                                                @csrf
                                                <input type="hidden" name="infomation" value="new">
                                                <fieldset>
                                                    <div class="col-sm-12">
                                                        <label class="form-control">T??n: {{ Auth::user()->name }}</label>
                                                    </div>
                                                </fieldset>

                                                <fieldset>
                                                    <div class="col-sm-12">
                                                        <label class="form-control">E-mail: {{ Auth::user()->email }}</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="form-control">S??? ??i???n tho???i: {{ Auth::user()->phone }}</label>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="col-sm-12">
                                                        <label for="address">Address:</label>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <select required data-id="" class="form-control" name="city" id="city">
                                                                    <option value="">T???nh/Th??nh ph???</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <select required data-id="" class="form-control" name="district" id="district">
                                                                    <option value="">Qu???n/Huy???n</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <select required data-id="" class="form-control" name="ward" id="ward">
                                                                    <option value="">X??/Ph?????ng</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <label>???????ng/S??? nh??:</label>
                                                        @if (isset($error))
                                                            <span class="alert alert-danger">{{ $error }}</span>
                                                        @endif
                                                        <input class="form-control" required type="text" name="address" id="address">
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="col-sm-12">
                                                        <label>????n v??? v???n chuy???n :</label>
                                                        <select class="form-control" name="shipper" id="shipper">
                                                            @foreach ($shippers as $shipper )
                                                                <option value="{{ $shipper->shipper_id  }}">{{ $shipper->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </fieldset>
                                                <fieldset>

                                                    <div class="col-sm-12">
                                                        <label>Ghi ch??</label>
                                                        <br>
                                                        <textarea class="form-control" name="note" id="note" cols="50" rows="3">
                                                        </textarea>
                                                    </div>

                                                </fieldset>
                                                <br>
                                                <fieldset>
                                                    <div class="col-sm-12">
                                                        <button style="margin-left: 40%" type="submit" class="btn btn-success">Check-Out</button>
                                                    </div>
                                                </fieldset>
                                            </Form>
                                          </div>
                                        </div>
                                      </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                @else

                <div class="row alert alert-danger" >
                    Gi??? h??ng r???ng
                </div>
                <div class="next-step text-center">
                    <a href="{{ route('home') }}"><button class="text-success">Ti???p t???c mua s???m</button></a>
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
        @include('client.includes.router')
        <script src="{{ asset('./assets/client/js/jquery.addToCart.js')}}"></script>
        <script src="{{ asset('assets/client/js/jquery.formOrder.js') }}">
        </script>
        <script>
        </script>
        <script src="{{ asset('assets/client/js/jquery.api.province.js') }}"></script>

@endsection
