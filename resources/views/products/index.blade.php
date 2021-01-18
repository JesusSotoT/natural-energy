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
                    <td>{{ $p->name }}</td>
                    <td><img src="{{ $p->image }}" alt="Imagen producto {{ $p->id }}"></td>
                    <td class="text-center">
                          <a type="button" href="{{route("user.edit",$p->id)}}" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </a>
                        <form action="{{ route('user.destroy', $p->id) }}" method="post" style="display:inline-block;" class ="delete-form">
                          @csrf
                          @method('delete')
                          <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm delete-button" data-original-title="" title="" onclick="confirm('{{ __('Are you sure you want to delete this user?') }}') ? this.parentElement.submit() : ''">
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
