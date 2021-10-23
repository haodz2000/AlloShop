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
        <link rel="stylesheet" href="{{ asset('assets/client/css/mystyle.css') }}">
@endsection
@section('content')
@include('client.includes.support')
<section class="breadcumb-area af" style="background: url(images/breadcumb/1.jpg);">

    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                <div class="breadcumb-content">

                    <div class="breadcumb-title">

                        <h1>Just Order</h1>

                    </div>

                    <div class="breadcumb-link">

                        <ul>

                            <li><a href="index-2.html">Home</a></li>

                            <li>-</li>

                            <li><a href="#">Shipping</a></li>

                            <li>-</li>

                            <li><a href="#">Order</a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
<section class="shipping-area section">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mr-b30">

                    <div class="button-area row">

                        <ul class="tab-nav" role="tablist">

                            <li class="active col-sm-4"><a href="#checkout" aria-controls="checkout" role="tab" data-toggle="tab">01.Tất cả đơn hàng</a></li>

                            <li class="col-sm-4"><a href="#shipping" aria-controls="shipping" role="tab" data-toggle="tab">02.Đơn hàng đang giao</a></li>

                            <li class="col-sm-4"><a href="#payment" aria-controls="payment" role="tab" data-toggle="tab">03.Đơn hàng đã hủy</a></li>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="tab-content" id="shiping">
                    <div class="tab-pane active" id="checkout">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @if (isset($order) && count($order)>=1)
                            <table class="List-order">
                                <thead>
                                    <tr>
                                        <th>OrderID</th>
                                        <th>Địa chi giao hàng</th>
                                        <th>Ngày đặt hàng</th>
                                        <th>Trạng thái đơn hàng</th>
                                        <th>Ngày cập nhật</th>
                                        <th>Vận chuyển</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order as $value )
                                    <tr>
                                        <td>{{ $value->order_id }}</td>
                                        <td>{{ $value->address }}</td>
                                        <td>{{ $value->created_at }}</td>
                                        <td>
                                            @php
                                                $status = $value->status;
                                                switch($status){
                                                    case '0': {
                                                        echo "Chờ xác nhận";
                                                        break;
                                                    }
                                                    case '1':{
                                                        echo "Đang giao";
                                                        break;
                                                    }
                                                    case '2':{
                                                        echo "Đã nhận hàng";
                                                        break;
                                                    }
                                                    case '3':{
                                                        echo 'Đã hủy';
                                                        break;
                                                    }
                                                }
                                            @endphp
                                        </td>
                                        <td>{{ $value->updated_at }}</td>
                                        <td>{{ $value->shippers->name }}</td>
                                        <td>
                                            @if ($value->status == 0)
                                                <button class="btn btn-danger">Hủy</button>
                                            @endif
                                            <button class="btn btn-success">View</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <div class="text-danger">
                                <p>Không có đơn hàng nào</p>
                                <a class="btn btn-primary" href="{{ route('home') }}" >Mua Hàng</a>
                            </div>
                            @endif

                        </div>

                    </div>
                    <div class="tab-pane" id="shipping">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @if(isset($orderTrans)&& count($orderTrans) >=1)
                            <table class="List-order">
                                <thead>
                                    <tr>
                                        <th>OrderID</th>
                                        <th>Địa chi giao hàng</th>
                                        <th>Ngày đặt hàng</th>
                                        <th>Trạng thái đơn hàng</th>
                                        <th>Ngày cập nhật</th>
                                        <th>Vận chuyển</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orderTrans as $value )
                                    <tr>
                                        <td>{{ $value->order_id }}</td>
                                        <td>{{ $value->address }}</td>
                                        <td>{{ $value->created_at }}</td>
                                        <td>
                                            @php
                                                $status = $value->status;
                                                switch($status){
                                                    case '0': {
                                                        echo "Chờ xác nhận";
                                                        break;
                                                    }
                                                    case '1':{
                                                        echo "Đang giao";
                                                        break;
                                                    }
                                                    case '2':{
                                                        echo "Đã nhận hàng";
                                                        break;
                                                    }
                                                    case '3':{
                                                        echo 'Đã hủy';
                                                        break;
                                                    }
                                                }
                                            @endphp
                                        </td>
                                        <td>{{ $value->updated_at }}</td>
                                        <td>{{ $value->shippers->name }}</td>
                                        <td>
                                            <button class="btn btn-danger">Hủy</button>
                                            <button class="btn btn-success">View</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <div class="text-danger">
                                Không có đơn hàng nào
                            </div>
                            @endif

                        </div>
                    </div>
                    <div class="tab-pane" id="payment">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @if(isset($orderCancel)&& count($orderCancel) >=1)
                            <table class="List-order">
                                <thead>
                                    <tr>
                                        <th>OrderID</th>
                                        <th>Địa chi giao hàng</th>
                                        <th>Ngày đặt hàng</th>
                                        <th>Trạng thái đơn hàng</th>
                                        <th>Ngày cập nhật</th>
                                        <th>Vận chuyển</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orderTrans as $value )
                                    <tr>
                                        <td>{{ $value->order_id }}</td>
                                        <td>{{ $value->address }}</td>
                                        <td>{{ $value->created_at }}</td>
                                        <td>
                                            @php
                                                $status = $value->status;
                                                switch($status){
                                                    case '0': {
                                                        echo "Chờ xác nhận";
                                                        break;
                                                    }
                                                    case '1':{
                                                        echo "Đang giao";
                                                        break;
                                                    }
                                                    case '2':{
                                                        echo "Đã nhận hàng";
                                                        break;
                                                    }
                                                    case '3':{
                                                        echo 'Đã hủy';
                                                        break;
                                                    }
                                                }
                                            @endphp
                                        </td>
                                        <td>{{ $value->updated_at }}</td>
                                        <td>{{ $value->shippers->name }}</td>
                                        <td>
                                            <button class="btn btn-success">View</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <div class="text-danger">
                                Không có đơn hàng nào
                            </div>
                            @endif
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
        <script src="{{ asset('./assets/client/js/jquery.addtocart.js') }}"></script>
@endsection
