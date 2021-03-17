<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>Stark Industries</title>
  </head>
  <body>
    <div class="">
      @include('partials.header')
      @yield('content')
      @include('partials.footer')
    </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3"></script>
    <script type="text/javascript" src="{{asset('/js/script.js')}}"></script>
  </body>
</html>
