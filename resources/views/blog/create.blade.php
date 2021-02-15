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
          <h4 class="card-title"> Agregar Nuevo Articulo</h4>
        </div>
        <div class="card-body">
            <div class="container">
                <form action="{{ route('store-new-article') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="titleArticle">Titulo:</label>
                        <input type="text" class="form-control" id="nameProduct" name="name">
                      </div>
                      <div class="form-group">
                        <label for="descArticle">Descripción:</label>
                        <textarea id="descArticle" name="descArticle" class="ckeditor" cols="10" rows="40"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="contentArticle">Contenido:</label>
                        <textarea id="contentArticle" name="contentArticle" class="ckeditor" cols="10" rows="40"></textarea>
                      </div>
                      <p>Thumbnail del articulo:</p>
                      <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="thumbnailFile" name="thumbnailFile">
                        <label class="custom-file-label" for="thumbnailFile">Choose file</label>
                      </div>
                      <p>Cover del articulo:</p>
                      <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="coverFile" name="coverFile">
                        <label class="custom-file-label" for="coverFile">Choose file</label>
                      </div>
                      <div class="row float-right">
                          <div class="col-4">
                                <button type="submit" class="btn btn-success">Crear</button>
                          </div>
                          <div class="col-2">
                                <a href="{{ route('articles') }}" class="btn btn-danger"> Cancelar</a>
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

@endpush
