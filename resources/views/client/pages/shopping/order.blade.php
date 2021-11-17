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
        <link rel="stylesheet" href="{{ asset('assets/client/css/mystyle.css') }}">
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
        <div class="board-view-detail-order hidden">
        </div>
        <div class="board-rating-product hidden">
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
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading">Danh sách các đơn hàng</div>

                                <!-- Table -->
                                <table class="List-order table">
                                    <thead class="table">
                                        <tr>
                                            <th>Mã đơn hàng</th>
                                            <th>Địa chi giao hàng</th>
                                            <th>Ngày đặt hàng</th>
                                            <th>Trạng thái đơn hàng</th>
                                            <th>Ngày cập nhật</th>
                                            <th>Vận chuyển</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table">
                                        @foreach ($order as $value )
                                        <tr>
                                            <td>{{ $value->key_token }}</td>
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
                                                            echo 'Hoàn thành đơn hàng';
                                                            break;
                                                        }
                                                        case '4':{
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
                                                    <button type="button" data-id="{{ $value->order_id }}" class="btn btn-danger cancel">Hủy</button>
                                                @endif
                                                <button type="button" data-id="{{ $value->order_id }}" class="btn btn-success view-order">View</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                              </div>

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
                                    @if ($value)

                                    @endif
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
                                                        echo 'Hoàn thành đơn hàng';
                                                        break;
                                                    }
                                                    case '4':{
                                                        echo 'Đã hủy';
                                                        break;
                                                    }
                                                }
                                            @endphp
                                        </td>
                                        <td>{{ $value->updated_at }}</td>
                                        <td>{{ $value->shippers->name }}</td>
                                        <td>
                                            <button type="button" data-id="{{ $value->order_id }}" class="btn btn-success view-order">View</button>
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
                                        <th>Mã đơn hàng</th>
                                        <th>Địa chi giao hàng</th>
                                        <th>Ngày đặt hàng</th>
                                        <th>Trạng thái đơn hàng</th>
                                        <th>Ngày cập nhật</th>
                                        <th>Vận chuyển</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="order-cancel">
                                    @foreach ($orderCancel as $value )
                                    <tr>
                                        <td>{{ $value->key_token }}</td>
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
                                                        echo 'Hoàn thành đơn hàng';
                                                        break;
                                                    }
                                                    case '4':{
                                                        echo 'Đã hủy';
                                                        break;
                                                    }
                                                }
                                            @endphp
                                        </td>
                                        <td>{{ $value->updated_at }}</td>
                                        <td>{{ $value->shippers->name }}</td>
                                        <td>
                                            <button data-id="{{ $value->order_id }}" class="btn btn-success view-order">View</button>
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
        <script src="{{ asset('./assets/client/js/jquery.addToCart.js') }}"></script>
        <script>
            const urlShippingOrderDeatail = '{{ route('shipping.order.detail') }}';
            const urlShippingCancelOrder = '{{ route('shipping.order.cancel') }}';
            const urlShippingRating = '{{ route('shipping.order.rating') }}'
        </script>
        <script>
            $(document).on('click','table button.view-order',function(){
                var id = parseInt($(this).data('id'));
                $('.board-view-detail-order').html('');
                if(id != ''){
                    $.ajax({
                        type: 'Post',
                        url: urlShippingOrderDeatail,
                        data:{id:id},
                        dataType: 'JSON',
                        success: function(data){
                            if(data !=0){
                                var customer = data.customer;
                                var order = data.order;
                                var product = data.product;
                                var board = createBoardOrder(customer,order,product);
                                $('.board-view-detail-order').removeClass('hidden');
                                setTimeout(() => {
                                    $('.board-view-detail-order').html(board);
                                }, 1000);

                            }
                            else{
                                console.log('No data');
                            }
                        },
                        error: function(){
                            console.log('error');
                        }
                    })
                }
            })
            //Tạo board chi tiết order
            function createBoardOrder(customer, order,product){
                var status = '';
                switch(order.status){
                    case 0:{
                        status = 'Chờ xác nhận';
                        break;
                    }
                    case 1:{
                        status = 'Đang giao';
                        break;
                    }
                    case 2:{
                        status = 'Đã nhận hàng';
                        break;
                    }
                    case 3:{
                        status = 'Hoàn thành giao hàng';
                        break;
                    }
                    case 4:{
                        status = 'Đã hủy'
                        break;
                    }
                }
                var board = ' <div class="board">\
                        <div class="row">\
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 text-center">\
                                <h2> Thông tin đơn hàng</h2>\
                            </div>\
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-right">\
                                <strong><button class="close" >X</button></strong>\
                            </div>\
                        </div>\
                        <div class="row">\
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">\
                                <div class="infomation">\
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">\
                                        <i class="f007"></i>\
                                    </div>\
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">\
                                    </div>\
                                    <strong class="text-center">Customer</strong>\
                                    <strong>Tên khách hàng: '+customer.name+'</strong>\
                                    <strong>Số điện thoại: '+customer.phone+' </strong>\
                                    <strong>Email: '+customer.email+'</strong>\
                                    <strong>Địa chỉ: '+order.address+'</strong>\
                                </div>\
                            </div>\
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">\
                                <div class="infomation">\
                                    <div class="row">\
                                        <strong class="text-center">Thông tin đơn hàng</strong>\
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">\
                                            <strong>Mã đơn hàng: '+order.key_token+'</strong>\
                                            <strong>Tổng sản phẩm: '+order.totalQuantity+'</strong>\
                                            <strong>Tổng Tiền: '+order.totalPrice+'$</strong>\
                                            <strong>Ngày đặt hàng: '+order.created_at+'</strong>\
                                        </div>\
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">\
                                            <strong>Note: '+order.note+'</strong>\
                                            <strong>Discount:0</strong>\
                                            <strong>Trạng thái: '+status+'</strong>\
                                            <strong>Vận chuyển: '+order.shipper+'</strong>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>\
                        <div class="row">\
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">\
                                <div class="product-order text-center">\
                                    <legend>Danh sách sản phẩm mua</legend>\
                                </div>\
                                <div class="row"></div>\
                                <div class="row">';
                                    $.each(product,function(index,val){
                                        image = JSON.parse(val.url_image)
                                        board += '<div class="product-single">\
                                                <div class="row">\
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">\
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">\
                                                        <a href="/products/'+val.slug+'">\
                                                            <figure>\
                                                                <img style="margin-bottom: 5px" src="/assets/storage/images/product/'+image[0]+'" alt="'+val.product_name+'">\
                                                            </figure>\
                                                        </a>\
                                                    </div>\
                                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 text-left">\
                                                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">\
                                                            <a href="/products/'+val.slug+'"><strong>'+val.product_name+'</strong></a>\
                                                            <br>\
                                                            <strong>Size: <span>'+val.size+'</span></strong>\
                                                            <br>\
                                                            <strong>Color: <span>'+val.color+'</span></strong>\
                                                        </div>\
                                                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">\
                                                            <strong>Unit Price</strong>\
                                                            <br>\
                                                            <strong>'+val.price+'$</strong>\
                                                        </div>\
                                                    </div>\
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">\
                                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">\
                                                            <strong>Quantity</strong>\
                                                            <br>\
                                                            <strong>'+val.quantiyOrder+'</strong>\
                                                        </div>\
                                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-9">\
                                                            <strong>Total</strong>\
                                                            <br>\
                                                            <strong>'+val.totalPrice+'$</strong>\
                                                        </div>\
                                                    </div>\
                                                </div>';
                                        if(val.rated == 0){
                                            board +='<button data-id="'+val.product_id+'" data-sku="'+val.sku+'" data-order="'+order.order_id+'" class="btn btn-danger rating">Đánh giá</button>';
                                        }
                                        board+='</div>\
                                        </div>';
                                    })
                               board+='</div>\
                            </div>\
                        </div>\
                    </div>';
                return board;
            }
            $(document).on('click','.board-view-detail-order button.close',function(){
                $(".board-view-detail-order").addClass('hidden');
            })
            $(document).on('click','.board-rating-product button.close',function(){
                $(".board-rating-product").addClass('hidden');
                $('.board-view-detail-order').css('z-index', '9999');
            })

            $(document).on('click','table button.cancel',function(){
                var idProduct = parseInt($(this).data('id'));
                if(idProduct != ''){
                    $.ajax({
                        type:'POST',
                        url: urlShippingCancelOrder,
                        data:{id:idProduct},
                        dataType:'JSON',
                        success: function(data){
                            window.location.href = '{{ route('shipping.order') }}';
                        },
                        error: function(){
                            console.log('error');
                        }
                    })
                }
            })

            // Xuất hiện bảng đánh giá
            $(document).on('click','.board .product-single button.rating',function(){
                var idProduct = $(this).data('id');
                var idOrder = $(this).data('order');
                var sku = $(this).data('sku');
                var boardRating = createBoardRating(idProduct,idOrder,sku);
                $('.board-rating-product').html(boardRating);
                $('.board-rating-product').removeClass('hidden');
                $('.board-view-detail-order').css('z-index','1');
            })

            //Tạo board đánh giá
            function createBoardRating(idProduct,idOrder,sku){
                var board ='<div class="board">\
                        <div class="row">\
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 text-center">\
                                <h3>Đánh giá sản phẩm</h3>\
                            </div>\
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center"><button class="close">X</button></div>\
                        </div>\
                        <div class="row">\
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">\
                                <div class="rating-star">\
                                    <ul>\
                                        <li>\
                                            <i data-id="1" id ="1" class="fa fa-star yellow"></i>\
                                            <i data-id="2" id ="2" class="fa fa-star yellow"></i>\
                                            <i data-id="3" id="3" class="fa fa-star yellow"></i>\
                                            <i data-id="4" id="4" class="fa fa-star yellow"></i>\
                                            <i data-id="5" id="5" class="fa fa-star yellow"></i>\
                                        </li>\
                                        <input type="hidden" name="rate" value="5" id="rate">\
                                    </ul>\
                                </div>\
                            </div>\
                        </div>\
                        <div class="row">\
                            <div class="comment-rating">\
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">\
                                    <strong>Đánh giá:</strong>\
                                    <div id="comment-auto" class="row">\
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">\
                                                <span >Chất lượng sản phẩm tuyệt vời</span>\
                                                <span>Đóng gói sản phẩm đẹp và chắc chắn</span>\
                                                <span>Shop phục vụ rất tốt</span>\
                                                <span>Rất đáng tiền</span>\
                                                <span>Thời gian giao hàng nhanh</span>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">\
                                            <textarea name="comment" id="comment" placeholder="Sản phẩm chất lượng tuyệt vời" class="form-control" id="" cols="40" rows="7"></textarea>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>\
                        <div class="row">\
                            <div class="rating">\
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">\
                                    <button data-id="'+idProduct+'" data-sku="'+sku+'" data-order="'+idOrder+'" class="btn btn-danger rate">Đánh giá</button>\
                                </div>\
                            </div>\
                        </div>\
                    </div>';
                    return board;
            }

            // Chọn vote
            $(document).on('click','.board .rating-star ul li i',function(){
                star = parseInt($(this).data('id'));
                switch(star)
                {
                    case 1:{
                        $('.board .rating-star ul li i').removeClass('hidden-star');
                        $('.board .rating-star ul li i#2,i#3,i#4,i#5').addClass('hidden-star');
                        $('.board .rating-star ul input').val(star);
                        break;
                    }
                    case 2:{
                        $('.board .rating-star ul li i').removeClass('hidden-star');
                        $('.board .rating-star ul li i#3,i#4,i#5').addClass('hidden-star');
                        $('.board .rating-star ul input').val(star);
                        break;
                    }
                    case 3:{
                        $('.board .rating-star ul li i').removeClass('hidden-star');
                        $('.board .rating-star ul li i#4,i#5').addClass('hidden-star');
                        $('.board .rating-star ul input').val(star);
                        break;
                    }
                    case 4:{
                        $('.board .rating-star ul li i').removeClass('hidden-star');
                        $('.board .rating-star ul li i#5').addClass('hidden-star');
                        $('.board .rating-star ul input').val(star);
                        break;
                    }
                    case 5:{
                        $('.board .rating-star ul li i').removeClass('hidden-star');
                        $('.board .rating-star ul input').val(star);
                        break;
                    }

                }
                var comment = createCommentAuto(star);
                $('.board .comment-rating #comment-auto').html(comment);
            })

            //Chọn comment tự động
            $(document).on('click','.board .comment-rating #comment-auto span',function(){
                $('.board .comment-rating #comment-auto span').removeClass('activeClick');
                $(this).addClass('activeClick');
                let comment = $(this).html();
                $('.board .comment-rating #comment').val(comment);
            })

            //Tạo comment tự động
            function createCommentAuto(star){
                var comment ='';
                var star5 = '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">\
                    <span>Chất lượng sản phẩm tuyệt vời</span>\
                    <span>Đóng gói sản phẩm đẹp và chắc chắn</span><span>Shop phục vụ rất tốt</span>\
                    <span>Rất đáng tiền</span>\
                    <span>Thời gian giao hàng nhanh</span></div>';
                var star4 ='<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">\
                    <span>Chất lượng sản phẩm tuyệt vời</span>\
                    <span>Đóng gói sản phẩm đẹp và chắc chắn</span><span>Shop phục vụ rất tốt</span>\
                    <span>Rất đáng tiền</span>\
                    <span>Thời gian giao hàng nhanh</span></div>';
                var star3 = '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">\
                    <span>Chất lượng sản phẩm tạm được</span>\
                    <span>Đóng gói sản phẩm tạm được</span><span>Shop phục vụ tạm được</span>\
                    <span>Giá cả chấp nhận được</span>\
                    <span>Thời gian giao hàng tạm được</span></div>';
                var star2 = '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">\
                    <span>Chất lượng sản phẩm kém</span>\
                    <span>Đóng gói sản phẩm kém</span><span>Shop phục vụ kém</span>\
                    <span>Không đáng tiền</span>\
                    <span>Thời gian giao hàng nhanh</span></div>';
                var star1 = '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">\
                    <span>Chất lượng sản phẩm kém</span>\
                    <span>Đóng gói sản phẩm kém</span><span>Shop phục vụ rất kém</span>\
                    <span>Rất không đáng tiền</span>\
                    <span>Thời gian giao hàng rất chậm</span></div>';
                switch(star){
                    case 1:{
                        comment = star1;
                        break;
                    }
                    case 2:{
                        comment = star2;
                        break;
                    }
                    case 3:{
                        comment = star3;
                        break;
                    }
                    case 4:{
                        comment = star4;
                        break;
                    }
                    case 5:{
                        comment = star5;
                        break;
                    }
                }
                return comment;
            }

            // Đánh giá
            $(document).on('click','.board .rating button.rate',function(){
                var idProduct = $(this).data('id');
                var idOrder = parseInt($(this).data('order'));
                var star = $('.board .rating-star input#rate').val();
                var comment = $('.board .comment-rating textarea#comment').val();
                var sku = $(this).data('sku');
                $.ajax({
                    type:'POST',
                    url: urlShippingRating,
                    data:{
                        idProduct:idProduct,
                        idOrder:idOrder,
                        star:star,
                        comment:comment,
                        sku:sku
                        },
                    dataType:'JSON',
                    success: function(data){
                        if(data == 1){
                            $('.board-rating-product').addClass('hidden');
                            $('.board-view-detail-order').addClass('hidden');
                            $('.board-view-detail-order').css('z-index','9999');
                        }
                        else{
                            alert("Không tìm thấy sản phẩm");
                        }
                    },
                    error: function(){
                        console.log('error');
                    }

                })
            })
        </script>
@endsection
