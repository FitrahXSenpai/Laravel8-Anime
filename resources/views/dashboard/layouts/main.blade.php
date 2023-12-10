<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://laravel-app.test/css/style.css">
    <link rel="stylesheet" href="http://laravel-app.test/css/dashboard.css">
    <link rel="stylesheet" href="http://laravel-app.test/css/trix.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>FXS OTAKU - {{ $title }}</title>
    <style> trix-toolbar [data-trix-button-group="file-tools"] { display: none; } </style>
  </head>
  <body>
  @include('dashboard.partials.header')
    <div class="row">
        @include('dashboard.partials.sidebar')
    </div>
    <div class="main">
        <main class="content">
            <div class="container p-0 mt-4">
                @yield('content')
            </div>
        </main>
        <div id="toTopBtn" onclick="scrolltoTop();"></div>
    </div>
    <script src="http://laravel-app.test/js/scripts.js"></script>
    <script src="http://laravel-app.test/js/dashboard.js"></script>
    <script src="http://laravel-app.test/js/trix.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>