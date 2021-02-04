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
          <h4 class="card-title"> Todos los productos</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="text-right">
                        <a href="{{ route('new-product') }}" class="btn btn-success">Crear Nuevo Producto</a>
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
                  Nombre
                </th>
                <th>
                    Contenido
                  </th>
                <th class="text-right">
                  Imagen
                </th>
                <th class="text-center">
                  Acciones
                </th>
              </thead>
              <tbody>
                  @foreach ($product as $p)
                  <tr>
                    <td>{{ $p->id }}</td>
                    <td width="40%">{{ $p->name }}</td>
                    <td width="10%">{{ $p->content }}</td>
                    @if ($p->image == null)
                    <td width="20%" class="text-right"><img class="img-fluid" width="25%" src="{{ asset('assets') }}/products/generic.jpg" alt="Imagen producto {{ $p->id }}"></td>
                    @else
                    <td class="text-right"><img class="img-fluid" width="25%" src="{{ asset('assets') }}/products/{{ $p->image }}" alt="Imagen producto {{ $p->id }}"></td>
                    @endif
                    <td class="text-center">
                       <!--  <a type="button" href="{{route("user.edit",$p->id)}}" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </a> -->
                        <form action="{{ route('destroy-product', $p->id) }}" method="post" style="display:inline-block;" class ="delete-form">
                          @csrf
                          <input type="text" name="id" hidden value="{{ $p->id }}">
                          <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm delete-button" data-original-title="" title="" onclick="confirm('{{ __('Esta Seguro de eliminar el producto?') }}') ? this.parentElement.submit() : ''">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </form>
                      </td>
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
