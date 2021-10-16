<!Doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from staging-themelocation.com/allo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Aug 2021 16:31:50 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Allo | Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('css_by_page')

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--Header area start here-->
        @include('client.includes.header')
        <!--Header area end here-->
        <!--Slider area start here-->
        @yield('content')
        <!--support area end here-->
        <!--Footer area start here-->
        @include('client.includes.footer')
        <!--Footer area end here-->


		<!-- all js here -->
		<!-- jquery latest version -->
        @yield('js_by_page')
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>
    </body>

<!-- Mirrored from staging-themelocation.com/allo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Aug 2021 16:32:14 GMT -->
</html>
