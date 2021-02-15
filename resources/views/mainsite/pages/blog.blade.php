@extends('mainsite.layouts.site')

@section('content')

<section class="publicaciones-blog-home">
    <div class="container">
      <div class="">
        <div class="row-page row">
            <!-- Principal Article -->
            @foreach ($lastArticlePublished as $lap)
            <div class="col-page col-sm-8 col-md-6">
                <a href="{{ route('article', [ 'id' => $lap->id ]) }}" class="black fondo-publicacion-home">
                  <div class="img-publicacion-principal-home">
                    <img class="img-responsive" src="{{ asset('assets') }}/img/mainsite/blog/covers/{{ $lap->cover_image }}">
                  </div>
                  <div class="contenido-publicacion-principal-home">
                    <h3>{{ $lap->title }}</h3>
                    {!! BBCode::convertToHtml($lap->subheading) !!}
                  </div>
                  <div class="mascara-enlace-blog-home">
                    <span>Leer</span>
                  </div>
                </a>
              </div>
            @endforeach
           <!-- Principal Article -->

        <!-- Second Article -->
        @foreach ($secondArticle as $item)
        <div class="col-page col-sm-4 col-md-3">
            <a href="{{ route('article', [ 'id' => $item->id ]) }}"  class="fondo-publicacion-home">
              <div class="img-publicacion-home">
                <img class="img-fluid" src="{{ asset('assets') }}/img/mainsite/blog/covers/{{ $item->cover_image }}">
              </div>
              <div class="contenido-publicacion-home">
                <h3>{{ $item->title }}</h3>
                {!! BBCode::convertToHtml($item->subheading) !!}

              </div>
              <div class="mascara-enlace-blog-home">
                <span>Leer</span>
            </div>
            </a>
          </div>
        @endforeach
        <!-- Second Article -->

        <!-- Third Article -->
        @foreach ($thirdArticle as $item)
        <div class="col-page col-sm-4 col-md-3">
            <a href="{{ route('article', [ 'id' => $item->id ]) }}"  class="fondo-publicacion-home">
              <div class="img-publicacion-home">
                <img class="img-fluid"" src="{{ asset('assets') }}/img/mainsite/blog/covers/{{ $item->cover_image }}">
              </div>
              <div class="contenido-publicacion-home">
                <h3>{{ $item->title }}</h3>
                {!! BBCode::convertToHtml($item->subheading) !!}
              </div>
              <div class="mascara-enlace-blog-home">
                <span>Leer</span>
            </div>
            </a>
          </div>
        @endforeach
        <!-- Third Article -->

        <!-- All articles -->
        @foreach ($allArticles as $item)
        <div class="col-page col-sm-4 col-md-3">
            <a href="{{ route('article', [ 'id' => $item->id ]) }}"  class="fondo-publicacion-home">
              <div class="img-publicacion-home">
                <img class="img-fluid"" src="{{ asset('assets') }}/img/mainsite/blog/covers/{{ $item->cover_image }}">
              </div>
              <div class="contenido-publicacion-home">
                <h3>{{ $item->title }}</h3>
                {!! BBCode::convertToHtml($item->subheading) !!}
              </div>
              <div class="mascara-enlace-blog-home">
                <span>Leer</span>
            </div>
            </a>
          </div>
        @endforeach
        <!-- All articles -->


        <!-- Jingle Shops Section -->
          <div class="col-page col-sm-4 col-md-3">
            <a href="#" class="todas-las-publicaciones-home">
                <span>Ven y conoce nuestras tiendas.</span>
                <br>
                <div class="text-center pt-5">
                    <i class="fas fa-store-alt" style="color: white; font-size:80px;"></i>
                </div>
            </a>
          </div>
        <!-- Jingle Shops Section -->

        </div>
      </div>
    </div>
  </section>



@push('js')



@endpush


@endsection
