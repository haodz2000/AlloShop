<!Doctype html>
<html class="no-js" lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Mirrored from staging-themelocation.com/allo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Aug 2021 16:31:50 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('admin.includes.css')
    </head>
    <body>
        <!--start wrapper-->
    <div class="wrapper">
        <!--start top header-->
        @include('admin.includes.header')
        <!--end top header-->

        <!--start sidebar -->
        @include('admin.includes.sidebar')
        <!--end sidebar -->

       <!--start content-->
       {{-- @yield('content') --}}
        <main class="page-content">
        {{-- @if ( Session::has('success') )
            <div class="alert alert-success alert-dismissible" role="alert">
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif

        @if ( Session::has('error') )
            <div class="alert alert-danger alert-dismissible" role="alert">
                <strong>{{ Session::get('error') }}</strong>
            </div>
        @endif --}}
            @yield('content')
        </main>
       <!--end page main-->

        @include('admin.includes.customizer')

    </div>
  <!--end wrapper-->

		<!-- all js here -->
		<!-- jquery latest version -->
        @include('admin.includes.js')
    </body>

<!-- Mirrored from staging-themelocation.com/allo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Aug 2021 16:32:14 GMT -->
</html>
