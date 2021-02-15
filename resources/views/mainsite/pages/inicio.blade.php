@extends('mainsite.layouts.site')

@section('content')
    <section>
        <div class="hero-container">
            <div class="hero"></div>
            <div class="hero-stuff">
                <div class="row">
                    <div class="col-12">
                        <h1 class="">SALUD<span> &amp; </span> BIENESTAR</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12"></div>
                    <h3>El impulso perfecto a tu día</h3>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>Porque cada persona es diferente,
                            nos adecuamos a tu estilo de vida</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="best-seller-tittle">Nuestros productos mas vendidos</div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="intro">
                <h2 class="text-center"></h2>
                <p class="text-center"></p>
            </div>
            <div class="row pt-4">
                @foreach ($best_products as $item)
                    <div class="col-md-6 col-lg-4 col-xl-3 best-seller_row mb-5"><img class="img-fluid"
                            src="{{ asset('assets') }}/products/{{ $item->image }}" />
                        <div class="row">
                            <div class="col-12 mt-2">
                                <h5 class="best-seller-product-name text-center">{{ $item->name }}</h5>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <a class="btn btn-gradient gradient2 btn-details-prod" id="{{ $item->id }}"> Ver +</a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <a class="btn btn-gradient1" href="{{ route('productos', ['filter' => 'all']) }}"> Ver todos los
                        productos </a>
                </div>
            </div>
        </div>
    </section>

    <section id="nosotros-sec">
        <div class="container pt-4">
            <div class="row">
                <div class="col-12">
                    <div class="best-seller-tittle">Acerca de nosotros</div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row pt-5 pb-2">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <img class="img-fluid" src="{{ asset('assets') }}/img/mainsite/about-img.jpeg" alt="">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 text-about-init">
                    <strong>Natural Energy</strong> es una marca de productos
                    naturales, suplementos alimenticios y energéticos, que nace
                    en 2019 en Guadalajara Jalisco, con la finalidad de llegar
                    al consumidor preocupado por su bienestar y salud.
                    <br><br>
                    Teniendo una amplia variedad/gama de productos con diferentes
                    presentaciones con una excelente calidad en todas sus lineas a un
                    precio accesible
                </div>
            </div>
        </div>
    </section>

    @push('js')


    @endpush


@endsection
