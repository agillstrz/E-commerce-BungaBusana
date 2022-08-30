<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('style/login.css') }}" />
    <script src="https://kit.fontawesome.com/bb6b15c5b9.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>
    @include('auth.layouts.navbar')
    @yield('conten')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
 
 <footer class="text-lg-start text-white fixed-bottom container-fluid " style="background-color: #333333">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">© 2022 Copyright Bunga Busana
     </div>
</footer>
</body>

</html>
