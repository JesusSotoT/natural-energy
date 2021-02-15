@extends('mainsite.layouts.site')

@section('content')
    @foreach ($article as $data)
        <section class="pb-4">
            <div class="hero-blog">
                <div class="hero-overlay">
                    <h4 class="text-hero-blog pt-2">{{ $data->title }}</h4>
                </div>
                <img src="{{ asset('assets') }}/img/mainsite/blog/covers-detail/{{ $data->cover_image_detail }}"
                    alt="bubbles from surf" class="hero-image">
            </div>
        </section>


        <!-- Page Content -->
        <div class="container">

            <div class="row">

                <!-- Blog Entries Column -->
                <div class="col-lg-8">
                    <hr>
                    <!-- Date/Time -->
                    <p>Fecha de publicación: {{ date_format($data->created_at, 'd/M/Y') }}</p>
                    <hr>
                    <div class="content-article">
                        {!! BBCode::convertToHtml($data->content) !!}
                    </div>
                    <hr>
                </div>

                <!-- Sidebar Widgets Column -->
                <div class="col-md-4">

                    <!-- Search Widget -->
                    <div class="card my-4">
                        <h5 class="card-header">Search</h5>
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div class="card my-3">
                        <h5 class="card-header">Categories</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="#">Simba</a>
                                        </li>
                                        <li>
                                            <a href="#">Nyati</a>
                                        </li>
                                        <li>
                                            <a href="#">Faru</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="#">Kiboko</a>
                                        </li>
                                        <li>
                                            <a href="#">Fisi</a>
                                        </li>
                                        <li>
                                            <a href="#">Pundamlia</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Side Widget -->
                    <div class="card my-4">
                        <h5 class="card-header">Contactanos</h5>
                        <div class="card-body">
                           <div class="row pb-2">
                            <i class="fas fa-map-marker-alt ml-2"></i><a href="" class="ml-3 text-center">Ver tiendas</a>
                           </div>
                           <div class="row">
                            <i class="fas fa-phone ml-2 mr-2"></i><a href="tel:3338252909"> 333 38252909</a>
                           </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    @endforeach


    @push('js')



    @endpush


@endsection
