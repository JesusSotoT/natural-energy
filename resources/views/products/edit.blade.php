@extends('layouts.app', [
    'namePage' => 'Gestor de Productos',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'products',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
@foreach ($item as $data)
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Editar Producto</h4>
        </div>
        <div class="card-body">
            <div class="container">
                <form action="{{ route('store-update-product') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nameProduct">Nombre:</label>
                        <input type="text" class="form-control" id="iDProduct" name="id" value="{{$data->id}}" hidden>
                        <input type="text" class="form-control" id="nameProduct" name="name" value="{{$data->name}}">
                      </div>
                      <div class="form-group">
                        <label for="descProduct">Descripción:</label>
                        <textarea id="descProduct" name="desc" class="form-control" cols="40" rows="40" >{{$data->description}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="contentProduct">Contenido:</label>
                        <input type="text" class="form-control" id="contentProduct" name="contentProd" value="{{$data->content}}">
                      </div>
                      <div class="form-group">
                        <label for="mInfoProduct">Informacion Adicional:</label>
                        <textarea id="mInfoProduct" name="mInfo"class="form-control" cols="40" rows="40" value="">{{$data->m_info}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="recommendProduct">Recomendaciones de uso:</label>
                        <textarea id="recommendProduct" name="recommend" class="form-control" cols="40" rows="40">{{$data->recomend}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="warningProduct">Advertencias:</label>
                        <textarea id="warningProduct" name="warning" class="form-control" cols="40" rows="40">{{$data->warning}}</textarea>
                      </div>
                      <p>Imagen de producto (1400 × 900 px):</p>
                      <div class="col-4">
                        <img src="{{ asset('assets') }}/products/{{ $data->image }}"  class="img-fluid" style="border: solid 2px #000;">
                      </div>
                      <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="customFile" name="customFile" value="{{ $data->image }}">
                        <label class="custom-file-label" for="customFile">{{ $data->image }}</label>
                      </div>
                      <p>Imagen miniatura de tienda (90 × 190 px):</p>
                      <div class="col-4">
                        <img src="{{ asset('assets') }}/products/thumbnails/{{ $data->image }}"  class="img-fluid" style="border: solid 2px #000;">
                      </div>
                      <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="thumbnailImage" name="thumbnailImage" value="{{ $data->image }}">
                        <label class="custom-file-label" for="thumbnailImage">{{ $data->image }}</label>
                      </div>
                      <p>Imagen tabla nutrimental(1000 × 890 px):</p>
                      <div class="col-3 pb-2">
                        <img src="{{ asset('assets') }}/products/tablas/{{ $data->nutrition_table_image }}"  class="img-fluid" style="border: solid 2px #000;">
                      </div>
                      <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="tableImage" name="tableImage" value="{{ $data->nutrition_table_image }}">
                        <label class="custom-file-label" for="tableImage">{{ $data->nutrition_table_image }}</label>
                      </div>
                      <div class="row float-right">
                          <div class="col-4">
                                <button type="submit" class="btn btn-success">Crear</button>
                          </div>
                          <div class="col-2">
                                <a href="{{ route('products') }}" class="btn btn-danger"> Cancelar</a>
                          </div>
                      </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection

@push('js')

@endpush
