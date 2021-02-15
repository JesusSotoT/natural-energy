@extends('layouts.app', [
'namePage' => 'Gestor de Productos',
'class' => 'login-page sidebar-mini ',
'activePage' => 'articles',
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
                        <h4 class="card-title"> Articulos en blog</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-right">
                                    <a href="{{ route('new-article') }}" class="btn btn-success">Crear Nuevo Articulo</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Titulo
                                    </th>
                                    <th>
                                        Fecha de publicacion
                                    </th>
                                    <th class="text-center">
                                        Acciones
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($allArticles as $article)
                                        <tr>
                                            <td>{{ $article->id }}</td>
                                            <td width="40%">{{ $article->title }}</td>
                                            <td>{{ $article->created_at}}</td>
                                            <td class="text-center"> <form action="{{ route('view-article', $article->id) }}" method="post" style="display:inline-block;" class ="delete-form">
                                                @csrf
                                                <input type="text" name="id" hidden value="{{ $article->id }}">
                                                <button type="submit"  class="btn btn-primary btn-icon btn-sm delete-button"  title="Ver">
                                                    <i class="far fa-eye"></i>
                                                </button>
                                              </form>
                                              <form action="{{ route('update-article', $article->id) }}" method="post" style="display:inline-block;" class ="delete-form">
                                                @csrf
                                                <input type="text" name="id" hidden value="{{ $article->id }}">
                                                <button type="submit" class="btn btn-info btn-icon btn-sm delete-button"  title="Modificar">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </button>
                                              </form>
                                            <form action="{{ route('destroy-article', $article->id) }}" method="post" style="display:inline-block;" class ="delete-form">
                                              @csrf
                                              <input type="text" name="id" hidden value="{{ $article->id }}">
                                              <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm delete-button" data-original-title="Eliminar" title="Eliminar" onclick="confirm('{{ __('Esta Seguro de eliminar el articulo?') }}') ? this.parentElement.submit() : ''">
                                                <i class="fas fa-times"></i>
                                            </button>
                                            </form></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
