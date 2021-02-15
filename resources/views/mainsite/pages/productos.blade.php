@extends('mainsite.layouts.site')

@section('content')
<div class="container">
    <div class="container pt-5">
        <div class="row">
          <div class="col-md-8 order-md-2 col-lg-9">
            <div class="container-fluid">
              <div class="row   mb-5">
                <div class="col-12">
                  <div class="dropdown text-md-left text-center float-md-left mb-3 mt-3 mt-md-0 mb-md-0">
                    <label class="mr-2" hidden>Sort by:</label>
                    <a class="btn btn-lg btn-light dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" hidden></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" x-placement="bottom-start" style="position: absolute; transform: translate3d(71px, 48px, 0px); top: 0px; left: 0px; will-change: transform;">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row items-row">
                  @foreach ($items as $item)
                  <div class="col-6 col-md-6 col-lg-4">
                    <div class="card h-100 border-0">
                      <div class="card-img-top">
                          @if($item->image == '')
                          <img src="{{ asset('assets') }}/products/thumbnails/generic.png"  class="img-fluid mx-auto d-block">
                          @else
                          <img src="{{ asset('assets') }}/products/thumbnails/{{ $item->image }}"  class="img-fluid mx-auto d-block">
                          @endif
                      </div>
                      <div class="card-body text-center">
                        <p class="card-title">
                          <a  class="font-weight-bold text-dark text-uppercase small product-detail-num" id="{{ $item->id }}">{{ $item->name }}</a>
                        </p>
                        <a class="btn btn-info btn-details-prod" id="{{ $item->id }}"> Ver +</a>
                    </div>
                    </div>
                  </div>
                  @endforeach
              </div>

            </div>
          </div>
          <div class="col-md-4 order-md-1 col-lg-3 sidebar-filter">
            <h6 class="text-uppercase font-weight-bold mb-3">Categorias</h6>
            <div class="mt-2 mb-2 pl-2">
              <div class="custom-control custom-checkbox">
                <a href="{{ route('productos', [ 'filter' => 'all' ]) }}" class="nav-link" style="color: #1d8007;">TODOS LOS PRODUCTOS</a>
                  @foreach ($categories as $category)
                  <a href="{{ route('productos', [ 'filter' => $category->id ]) }}" class="nav-link" style="color: #1d8007;">{{ $category->category_name }}</a>
                  @endforeach
              </div>
            </div>
          </div>

        </div>
      </div>
</div>



@push('js')



@endpush


@endsection
