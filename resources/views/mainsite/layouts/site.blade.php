<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/mainsite/logos/logo-green.png">
  <link rel="icon"  href="{{ asset('assets') }}/img/mainsite/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/now-ui-dashboard-pro" />


  <!--  Social tags      -->
  <meta name="keywords" content="Natural Energy, vitamins, natural, energy, pure, natural products, natural news">
  <meta name="description" content="Natural Energy es una marca de productos naturales, suplementos alimenticios y energéticos, que nace en 2019 en Guadalajara Jalisco, con la finalidad de llegar al consumidor preocupado por su bienestar y salud">


  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Natural Energy healthy life">
  <meta itemprop="description" content="Natural Energy es una marca de productos naturales, suplementos alimenticios y energéticos, que nace en 2019 en Guadalajara Jalisco, con la finalidad de llegar al consumidor preocupado por su bienestar y salud">

  <meta itemprop="image" content="{{ asset('assets') }}/img/mainsite/logos/logo-green.png">


  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:title" content="Natural Energy | Bienvenidos">

  <meta name="twitter:description" content="Natural Energy es una marca de productos naturales, suplementos alimenticios y energéticos, que nace en 2019 en Guadalajara Jalisco, con la finalidad de llegar al consumidor preocupado por su bienestar y salud">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="{{ asset('assets') }}/img/mainsite/logos/logo-green.png">


  <!-- Open Graph data -->
  <meta property="og:title" content="Natural Energy | Bienvenidos" />
  <meta property="og:type" content="Site" />
  <meta property="og:image" content="{{ asset('assets') }}/img/mainsite/logos/logo-green.png"/>
  <meta property="og:description" content="Natural Energy es una marca de productos naturales, suplementos alimenticios y energéticos, que nace en 2019 en Guadalajara Jalisco, con la finalidad de llegar al consumidor preocupado por su bienestar y salud" />
  <meta property="og:site_name" content="Natural Energy" />
  <title>
    Natural Energy | Bienvenidos
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="{{ asset('assets') }}/css/mainsite.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>

<body>
    <div class="container-fluid flag-tel">
        <div class="text-center">
            <div>Pedidos al telefono: <a class="phone-call-balckflag" href="tel: 3338252909"> 33 38-25-29-09</a></div>
        </div>
    </div>
        @include('mainsite.layouts.navbar')
        @yield('content')
        @include('mainsite.layouts.footer')

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  @stack('js')
</body>

</html>
