@extends('templates.frontend')

@section("content")
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4 class="h4 text-blue mb-30">Sobre nosotros</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                    <div class="row">
                        <div class="col-md-8">
                            <p>This is the about us section where you can introduce your team or company.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="back/vendors/images/about.jpg" alt="About Us" class="img-fluid img-rounded">
                        </div>
                    </div>
                </div>
                <!-- Integration of the cards -->
                <h4 class="h4 text-blue mb-30">Card groups</h4>
                <div class="card-group mb-30">
                    <div class="card card-box">
                        <img class="card-img-top" src="back/vendors/images/card1.jpg" alt="Card image cap"/>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                            </p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                    <div class="card card-box">
                        <img class="card-img-top" src="back/vendors/images/card2.jpg" alt="Card image cap"/>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                This card has supporting text below as a natural lead-in to additional content.
                            </p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                    <div class="card card-box">
                        <img class="card-img-top" src="back/vendors/images/card3.jpg" alt="Card image cap"/>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.
                            </p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
                {{-- Segundo cuadro de texto --}}
                <h4 class="h4 text-blue mb-30">Historia</h4>

                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                    <div class="row">
                        <div class="col-md-8">
                            <p>This is the about us section where you can introduce your team or company.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="back/vendors/images/about.jpg" alt="About Us" class="img-fluid img-rounded">
                        </div>
                    </div>
                </div>

                {{-- Carrousel --}}
                <h4 class="h4 text-blue mb-30">Colaboradores</h4>

                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="back/vendors/images/card3.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="color-white">First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="back/vendors/images/card3.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="color-white">Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="back/vendors/images/card3.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="color-white">Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
									
            </div>
        </div>
    </div>
@endsection