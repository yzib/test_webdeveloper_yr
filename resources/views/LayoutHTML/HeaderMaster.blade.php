<!DOCTYPE html>

<html class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="{{ asset('/assets') . '/' }}" data-base-url="{{url('/')}}" data-framework="laravel" data-template="vertical-menu-laravel-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>@yield('title') | Car.Rent/Loan/Borrows </title>
  <meta name="description" content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />
  <meta name="keywords" content="{{ config('variables.templateKeyword') ? config('variables.templateKeyword') : '' }}">
  <!-- laravel CRUD token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Canonical SEO -->
  <link rel="canonical" href="{{ config('variables.productPage') ? config('variables.productPage') : '' }}">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />
    <!-- jQuery 2.1.3 -->
      <script src='{{asset('assets/style/floating/jQuery/jQuery-2.1.3.min.js')}}' type='text/javascript'></script>
    <!-- jQuery UI 1.11.2 -->
    <script src='{{asset('assets/style/floating/jQuery/js/jquery-ui.min.js')}}' type='text/javascript'></script>
    <!-- Bootstrap 3.3.2 -->
    <link href='{{asset('assets/style/floating/bootstrap/css/bootstrap.min.css')}}' rel='stylesheet' type='text/css' /> 
    <!-- Bootstrap 3.3.2 JS -->
    <script src='{{asset('assets/style/floating/bootstrap/js/bootstrap.min.js')}}' type='text/javascript'></script> 
    <!-- FontAwesome 4.3.0 -->
    <link href='{{asset('assets/style/floating/font-awesome/css/font-awesome.min.css')}}' rel='stylesheet' type='text/css' />
    <!-- Theme style -->
    <link href="{{asset('assets/style/floating/skins/skin-blue-light.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('assets/style/floating/AdminLTE.min.css')}}" rel='stylesheet' type='text/css' />
	<script src="{{asset('assets/style/floating/slimScroll/jquery.slimscroll.min.js')}}" type='text/javascript'></script>
    <script src="{{asset('assets/style/floating/fastclick/fastclick.min.js')}}" type='text/javascript'></script>
    <script src="{{asset('assets/style/floating/fastclick/app.min.js')}}" type='text/javascript'></script>
		
	
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
</head>

<body class="skin-blue-light">
  

  <!-- Layout Content -->
  @yield('layoutContent')
  <!--/ Layout Content -->  
</body>

</html>
