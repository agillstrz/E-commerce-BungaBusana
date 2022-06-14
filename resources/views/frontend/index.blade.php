<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('owlcarousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/frontend.css') }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    <title>@yield('Title')</title>
  </head>
  <body>

   @include('frontend.layouts.navbar')

@yield('sampul')
    
    <section>
        @yield('conten')
    </section>

  

    
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    
      @include('frontend.layouts.script')
   
   @yield('scripts')
  </body>


</html>