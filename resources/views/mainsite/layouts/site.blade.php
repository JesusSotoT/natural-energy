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
  <meta name="csrf-token" content="{{ csrf_token() }}">


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
        <!-- MODAL DETALLE PRODUCTO -->
<div class="modal fade" tabindex="-1" role="dialog" id="product-detail-modal" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 100%; height: 100%;">
      <div class="modal-content">
          <div class="modal-header" style="background-color: #07322a;">
              <h5 class="modal-title" id="modal-detail-product-name" style="color:#fff;">NATURAL ENERGY</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size: 30px; color:#fff;">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                  <div class="col-md-6 product_img">
                      <img id="image-product-detail" class="img-fluid">

                      <div class=" pt-5 ml-3">
                          <h5>+ INFO</h5>
                          <hr />
                          <p style="font-weight: 500;" id="m-info-detail"></p>
                          <p style="font-weight: bold;" id="">Metodo de empleo:</p>
                          <p id="recommend-detail"></p>
                          <p style="font-weight: bold;" id="">PRECAUCIÓN:</p>
                          <p id="modal-detail-warning"></p>
                      </div>
                  </div>
                  <div class="col-md-6 product_content">
                      <h4 id="title-name-product-detail-heading" class="ml-3"></h4>
                      <img id="image-product-table-detail"  class="img-fluid">
                      <div class="space-ten"></div>
                      <div class="pt-2">
                          <hr/>
                          <div class="row">
                              <div class="col">
                                  <i class="fas fa-map-marker-alt"></i><a href="" class="ml-3 text-center">Ver tiendas</a>
                              </div>
                              <div class="col">
                                  <i class="fas fa-phone"></i> <a href="tel:3338252909">333 38252909</a>
                              </div>
                          </div>
                          <hr/>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
  <!-- MODAL DETALLE PRODUCTO -->
  <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
    <div class="modal-dialog-center">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Any questions? Feel free to contact us.</h4>
            </div>
            <form action="#" method="post" accept-charset="utf-8">
            <div class="modal-body">
                  <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                            <input class="form-control" name="firstname" placeholder="Firstname" type="text" required autofocus />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                            <input class="form-control" name="lastname" placeholder="Lastname" type="text" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                            <input class="form-control" name="email" placeholder="E-mail" type="text" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                            <input class="form-control" name="subject" placeholder="Subject" type="text" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <textarea style="resize:vertical;" class="form-control" placeholder="Message..." rows="6" name="comment" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="panel-footer" style="margin-bottom:-14px;">
                    <input type="submit" class="btn btn-success" value="Send"/>
                        <!--<span class="glyphicon glyphicon-ok"></span>-->
                    <input type="reset" class="btn btn-danger" value="Clear" />
                        <!--<span class="glyphicon glyphicon-remove"></span>-->
                    <button style="float: right;" type="button" class="btn btn-warning btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

        @include('mainsite.layouts.footer')

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/1a77f106f0.js" crossorigin="anonymous"></script>
<script>
    jQuery(document).ready(function(){


                $('.btn-details-prod').click(function(e){
                   e.preventDefault();
                   let id = $(this).attr("id");
                   let _token   = $('meta[name="csrf-token"]').attr('content');

                   jQuery.ajax({
                    url: "{{ route('detail-product')}}",
                      method: 'post',
                      data: {
                          id: id,
                        _token: _token
                    },
                    dataType: "JSON",

                      success: function(data){
                          console.log(data)
                         for(var i = 0; i < data.length; i++){
                             $('#modal-detail-product-name').text('NATURAL ENERGY - ' + data[i].name + ' - ' + data[i].content)
                             $('#title-name-product-detail-heading').text(data[i].description)
                             $('#image-product-table-detail').attr("src", '{{ asset('assets') }}/products/tablas/' + data[i].nutrition_table_image)
                             $('#m-info-detail').text(data[i].m_info)
                             $('#recommend-detail').text(data[i].recomend)
                             $('#modal-detail-warning').text(data[i].warning)
                             if(data[i].image == ''){
                                $('#image-product-detail').attr("src", '{{ asset('assets') }}/products/generic-modal.png')

                             }else{
                                $('#image-product-detail').attr("src", '{{ asset('assets') }}/products/' + data[i].image)
                             }

                         }
                      }});
                      $('#product-detail-modal').modal("show");

                   });
                });
    </script>
  @stack('js')
</body>

</html>
