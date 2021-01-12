@extends('layouts.app', [
    'namePage' => 'Gestor de Productos',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'products',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
  <div class="content">

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

setTimeout(function() {
	notify.update({'type': 'primary', 'message': '<strong>Actualizar</strong> sus datos'});
}, 3000);

setTimeout(function() {
	notify.update({'type': 'danger', 'message': 'Y <strong> eliminarlos</strong> '});
}, 4000);

setTimeout(function() {
	notify.update({'type': 'warning', 'message': 'Por favor , siempre revisa las notificaciones para saber que estas haciendo.'});
}, 5000);
    });
  </script>
@endpush
