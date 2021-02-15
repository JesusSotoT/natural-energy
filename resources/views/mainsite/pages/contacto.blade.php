@extends('mainsite.layouts.site')

@section('content')
<div class="container pb-5">
    <div class="row pt-5 pb-5">
        <div class="col-12">
            <h2 class="text-center">CONTACTO</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
            <input class="form-control" name="firstname" placeholder="Nombre" type="text" required autofocus />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
            <input class="form-control" name="lastname" placeholder="Apellidos" type="text" required />
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
            <input class="form-control" name="email" placeholder="E-mail" type="text" required />
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
            <input class="form-control" name="subject" placeholder="Asunto" type="text" required />
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <textarea style="resize:vertical;" class="form-control" placeholder="Mensaje..." rows="6" name="comment" required></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center pt-4">
            <input type="submit" class="btn btn-success btn-lg pr-4 pl-4" value="Enviar"/>
        </div>
    </div>
</div>


@push('js')



@endpush


@endsection
