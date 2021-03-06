@extends('usuario.layouts.plantilla')
@section('seccion')
    <main class="page">
        <section class="clean-block features"
            style="padding: 15px 0;padding-bottom: 10px;background: rgba(9, 162, 255, 1);">
            <div class="carousel slide" data-ride="carousel" id="carousel-1" style="width: 100%;margin: 0;">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="jumbotron pulse animated hero-nature carousel-hero">
                            <h1 class="hero-title">Reparacion de computadoras</h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="jumbotron pulse animated hero-photography carousel-hero">
                            <h1 class="hero-title">Venta de componentes</h1>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="jumbotron pulse animated hero-technology carousel-hero">
                            <h1 class="hero-title">Limpieza de equipos</h1>
                        </div>
                    </div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i
                            class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a
                        class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i
                            class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2" class="active"></li>
                </ol>
            </div>
        </section>
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Nosotros</h2>
                    <p>Tecnilap</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col">
                        <h3 class="text-center">Misi??n</h3>
                        <p class="text-center">Organizar informaci??n, art??culos y/o productos dentro de una empresa y/o
                            organizaci??n con el objetivo de optimizar procesos </p>
                    </div>
                    <div class="col">
                        <h3 class="text-center">Visi??n</h3>
                        <p class="text-center">Brindar al usuario la seguridad y acceso a toda la informaci??n necesaria
                            dentro de la empresa y organizaci??n, de cualquier tipo, para lograr un excelente control de
                            datos optimizados, ahorrando tiempo en cada consulta, para as?? llegar a la obtenci??n de mejores
                            resultados.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
