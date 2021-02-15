<nav class="navbar navbar-expand-md sticky-top navbar-light nav-blank">

    <div class="navbar-collapse collapse w-50 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav ml-auto mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('productos', [ 'filter' => 'all']) }}">PRODUCTOS</a>
            </li>
        </ul>
    </div>
    <div class="navbar-collapse collapse w-50 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav ml-auto mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('nosotros') }}">NOSOTROS</a>
            </li>
        </ul>
    </div>
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="{{ route('inicio') }}">
            <img class="img-fluid rounded mx-auto d-block logo-brand" src="{{ asset('assets') }}/img/mainsite/logos/logo-200.png">
        </a>
    </div>
    <div class="navbar-collapse collapse w-50 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('blog') }}">BLOG</a>
            </li>
        </ul>
    </div>
    <div class="navbar-collapse collapse w-50 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto mr-auto">
            <li class="nav-item row">
                <div class="row">
                    <a class="nav-link" href="{{ route('contacto') }}"><i class="far fa-envelope"></i></a>
                    <a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
                    <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </li>
        </ul>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>
