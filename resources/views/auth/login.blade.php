@extends('layouts.app', [
    'namePage' => 'Iniciar sesion',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'login',
    'backgroundImage' => asset('assets') . "/img/mainsite/banner-1024.jpg",
])

@section('content')
    <div class="content">
        <div class="container">
        <div class="col-md-12 ml-auto mr-auto">
            <div class="header bg-gradient-primary py-10 py-lg-2 pt-lg-12">
                <div class="container">
                    <div class="header-body text-center mb-7">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-9">
                                <p class="text-lead text-light mt-3 mb-0">
                                    @include('alerts.migrations_check')
                                </p>
                            </div>
                            <div class="col-lg-5 col-md-6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 ml-auto mr-auto">
            <form role="form" method="POST" action="{{ route('login') }}">
                @csrf
            <div class="card card-login card-plain">
                <div class="card-header">
                    <img class="img-fluid ml-5" src="{{ asset('assets/img/mainsite/logos/logo-200.png') }}" alt="Logo">
                </div>
                <div class="card-body ">
                <div class="input-group no-border form-control-lg {{ $errors->has('email') ? ' has-danger' : '' }}">
                    <span class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                    </div>
                    </span>
                    <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Correo Electronico') }}" type="email" name="email" required autofocus>
                </div>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <div class="input-group no-border form-control-lg {{ $errors->has('password') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="now-ui-icons objects_key-25"></i></i>
                    </div>
                    </div>
                    <input placeholder="Contraseña" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Contraseña') }}" type="password" required>
                </div>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                </div>
                <div class="card-footer">
                <button  type = "submit" class="btn btn-primary btn-round btn-lg btn-block">{{ __('Iniciar sesión') }}</button>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
        demo.checkFullPageBackgroundImage();
        });
    </script>
@endpush
