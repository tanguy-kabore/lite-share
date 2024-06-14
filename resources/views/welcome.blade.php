@extends('layouts.master')

@section('content')
    <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark"
        style="height:100vh; background-size: cover; background-image: url(https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-0.3.5&s=c3d0603820b595592d80f5a239938c67&auto=format&fit=crop&w=1500&q=80);">

        <div class="container-fluid">
            <div class="row  justify-content-center align-items-center d-flex text-center h-100">
                <div class="col-12 col-md-8  h-50 ">
                    <h1 class="display-2  text-light mb-2 mt-5"><strong>Lite-share</strong> </h1>
                    <p class="lead  text-light mb-5">Espace ouvert de partage</p>
                    <p><a href="/about" class="btn bg-danger shadow-lg btn-round text-light btn-lg btn-rised">En savoir plus
                            ></a></p>

                    <div class="btn-container-wrapper p-relative d-block  zindex-1">
                        <a class="btn btn-link btn-lg   mt-md-3 mb-4 scroll align-self-center text-light" href="/about">
                            <i class="fa fa-angle-down fa-4x text-light"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Page Content-->
    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-5">
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i
                                    class="bi bi-collection"></i></div>
                            <h2 class="fs-4 fw-bold">Lite-share</h2>
                            <p class="mb-0">Un espace ouvert dédié au partage de connaissance!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i
                                    class="bi bi-cloud-download"></i></div>
                            <h2 class="fs-4 fw-bold">Gratuit</h2>
                            <p class="mb-0">Des millions de livres à télécharger gratuitement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
