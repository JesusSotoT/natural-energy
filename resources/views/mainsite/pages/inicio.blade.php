@extends('mainsite.layouts.site')

@section('content')

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
    <div class="row">
        @foreach ($best_products as $product)
        <div class="col-md-6 col-lg-4 col-xl-3 item"><img class="img-fluid" src="{{ asset('assets') }}/products/{{ $product->image }}" />
            <h5 class="name text-center">{{ $product->name }}</h5>
            <p class="title text-center">Musician</p>
        </div>
        @endforeach
    </div>
</div>
@endsection
