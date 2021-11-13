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
<style>
    span{
        color: red
    }
</style>
<!-- modernizr css -->
<script src="{{ asset('./assets/client/js/vendor/modernizr-2.8.3.min.js') }}"></script>
@endsection
@section('content')
@include('client.includes.support')
<div class="container">
    <section>
        <div class="row">

            <div style="margin:0 auto" class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                <form action="{{ route('user.profile.update') }}" enctype="multipart/form-data" method="POST" id="form-info" role="form">
                    @csrf
                    @isset($error)
                    <span>{{ $error->error->first('address') }}</span>
                    @endisset
                    <legend><strong style="color: blue">Thông Tin Khách Hàng</strong></legend>
                    <div class="avatar">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <figure>
                                            <img style="max-width: 100%" id="avt_preview" src="{{ asset($user->avatar) }}" alt="{{ $user->name }}">
                                            <input type="file" accept="image/*" name="avatar" id="avatar" style="form-control-file">
                                        </figure>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Email: {{ $user->email }} </label>
                    </div>
                    <div class="form-group">
                        <label for="phone">Name</label><span id="error-name">*</span>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone </label><span id="error-phone">*</span>
                        <input type="number" class="form-control" name="phone" id="phone" value="{{ $user->phone }}" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label><span id="error-address">*</span>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <select name="city" id="city" class="form-control" required="required">
                                    @if (isset($address[3]))
                                        <option value="3/{{ $address[3] }}">{{ $address[3] }}</option>
                                    @else
                                        <option value="">Tỉnh/Thành phố</option>
                                    @endif
                                </select>
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <select name="district" id="district" class="form-control" required="required">
                                    @if (isset($address[2]))
                                        <option value="2/{{ $address[2] }}">{{ $address[2] }}</option>
                                    @else
                                        <option value="">Quận/Huyện</option>
                                    @endif
                                </select>
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <select name="ward" id="ward" class="form-control" required="required">
                                    @if (isset($address[1]))
                                        <option value="{{ $address[1] }}">{{ $address[1] }}</option>
                                    @else
                                        <option value="">Xã/Phường</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Đường/Số nhà</label>
                        <input type="text" class="form-control" name="street" id="street" value="@if (isset($address[0]))
                            {{ $address[0] }}
                        @endif" placeholder="Đường/Số nhà">
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>

        </div>
    </section>
</div>
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
<script src="{{ asset('assets/client/js/jquery.api.province.js') }}"></script>
<script>
    $(document).on('submit','form#form-info',function(){
        $("span").html('*');
        var regexName =  /^[^\d+]*[\d+]{0}[^\d+]*$/;
        var regexPhone = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
        var name = $("#name").val().trim();
        var phone = $("#phone").val().trim();
        var city = $("#city").val().trim();
        var district = $("#district").val().trim();
        var ward = $("#ward").val().trim();
        var street = $("#street").val().trim();
        if(!regexName.test(name)|| name == ''){
            $("#error-name").html('Tên không hợp lệ')
            return false;
        }
        if(!regexPhone.test(phone) || phone == ''){
            $("#error-phone").html(' Số điện thoại không hợp lệ')
            return false;
        }
        if(street ==''||city == ''||district == ''||ward == '')
        {
            $("#error-address").html(' Địa chỉ chưa đầy đủ');
            return false;
        }
        else{
            return true;
        }
    })
    avatar.onchange = evt => {
            const [file] = avatar.files
            if (file) {
              avt_preview.src = URL.createObjectURL(file)
            }
          }
</script>
@endsection
