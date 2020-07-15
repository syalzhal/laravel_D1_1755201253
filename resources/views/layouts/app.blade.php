<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <!-- script -->
    <script src="{{ asset('js/app.js') }}"></script>

    <title>@yield('title')</title>
  </head>
  <body>
    @include('layouts.navbar')
    <div class="container-fluid">
        <div class="row mt-1">
            <div class="col-md-2">
                @include('layouts.sidebar')
            </div>
            <div class="col-md-10">
                @include('layouts.breadcrumd')
                @yield('content')
            </div>
        </div>
    </div>

    
  </body>
</html>