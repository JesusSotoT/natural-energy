@extends('layouts.app', [
    'namePage' => 'Inicio',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'home',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
<div class="container pt-5 mt-5 pb-5 mb-5">
    <div class="text-center">
        BIENVENIDO
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
