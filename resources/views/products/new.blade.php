@extends('layouts.app', [
    'namePage' => 'Gestor de Productos',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'products',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Agregar Nuevo Producto</h4>
        </div>
        <div class="card-body">
            <div class="container">
                <form action="{{ route('store-new-product') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nameProduct">Nombre:</label>
                        <input type="text" class="form-control" id="nameProduct" name="name">
                      </div>
                      <div class="form-group">
                        <label for="descProduct">Descripción:</label>
                        <textarea id="descProduct" name="desc" class="form-control" cols="40" rows="40"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="contentProduct">Contenido:</label>
                        <input type="number" class="form-control" id="contentProduct" name="contentProd">
                      </div>
                      <div class="form-group">
                        <label for="mInfoProduct">Informacion Adicional:</label>
                        <textarea id="mInfoProduct" name="mInfo"class="form-control" cols="40" rows="40"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="recommendProduct">Recomendaciones de uso:</label>
                        <textarea id="recommendProduct" name="recommend" class="form-control" cols="40" rows="40"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="warningProduct">Advertencias:</label>
                        <textarea id="warningProduct" name="warning" class="form-control" cols="40" rows="40"></textarea>
                      </div>
                      <p>Imagen:</p>
                      <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="customFile" name="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
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
@endsection

@push('js')
  <script>
    $(document).ready(function() {

var notify = $.notify('<strong>Gestor de procutos</strong> En este modulo podras...', {
	type: 'success',
	allow_dismiss: false,
});

setTimeout(function() {
	notify.update({'type': 'success', 'message': '<strong>Agregar</strong> nuevos productos'});
}, 2000);

    });
  </script>
@endpush
