<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- favicon -->
    <link rel=icon href="{{ asset('frontend/favicons.ico') }}" sizes="16x16" type="image/icon">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- LineAwesome -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/line-awesome.min.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

</head>

<body>
    
    @include('frontend.layout.header')
    
    @yield('content')

    @include('frontend.layout.footer')


    <!-- jquery -->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- jquery Migrate -->
    <script src="{{ asset('frontend/assets/js/jquery-migrate-1.4.1.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- wow -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <!-- Nice Select -->
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <!-- custom script -->
    <script src="{{ asset('frontend/js/script.js') }}"></script>
    <script>
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
      </script>
    <!-- maps  -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD__ZDRp-xfFYUAOIN_oDPmp9-pV0S6Ea4&callback=initMap&libraries=&v=weekly"async></script>

</body>

</html>