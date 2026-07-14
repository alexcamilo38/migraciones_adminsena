@extends('layouts.app')

@section('content')
    <div class="container-fluid px-0">

        <div id="senaCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">


            <!-- Indicadores -->
            <div class="carousel-indicators">

                <button type="button" data-bs-target="#senaCarousel" data-bs-slide-to="0" class="active"></button>

                <button type="button" data-bs-target="#senaCarousel" data-bs-slide-to="1"></button>

                <button type="button" data-bs-target="#senaCarousel" data-bs-slide-to="2"></button>

                <button type="button" data-bs-target="#senaCarousel" data-bs-slide-to="3"></button>

            </div>

            <div class="carousel-inner">

                <!-- IMAGEN 1 BIENVENIDA -->

                <div class="carousel-item active">


                    <div class="position-relative">

                        <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72" class="d-block w-100"
                            style="height:650px; object-fit:cover;">


                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.60);">
                        </div>


                    </div>



                    <div class="carousel-caption">

                        <h1>
                            ADMIN SENA
                        </h1>

                        <p>
                            Bienvenido al sistema de gestión académica
                        </p>

                        <a href="/areas/create" class="btn btn-success btn-lg px-5">

                            Comenzar

                        </a>

                    </div>


                </div>





                <!-- IMAGEN 2 TECNOLOGIA -->


                <div class="carousel-item">


                    <div class="position-relative">

                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3" class="d-block w-100"
                            style="height:650px; object-fit:cover;">


                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.55);">
                        </div>


                    </div>



                    <div class="carousel-caption">

                        <h1>
                            Innovación Tecnológica
                        </h1>

                        <p>
                            Gestiona ambientes y equipos del centro SENA
                        </p>

                        <a href="/computer/list" class="btn btn-light btn-lg px-5">

                            Ver Equipos

                        </a>

                    </div>


                </div>







                <!-- IMAGEN 3 APRENDICES -->


                <div class="carousel-item">


                    <div class="position-relative">

                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f" class="d-block w-100"
                            style="height:650px; object-fit:cover;">


                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.55);">
                        </div>

                    </div>



                    <div class="carousel-caption">


                        <h1>
                            Formación Profesional
                        </h1>


                        <p>
                            Administra aprendices e instructores fácilmente
                        </p>


                        <a href="/apprentice/list" class="btn btn-success btn-lg px-5">

                            Aprendices

                        </a>


                    </div>


                </div>








                <!-- IMAGEN 4 CENTRO -->


                <div class="carousel-item">


                    <div class="position-relative">


                        <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2" class="d-block w-100"
                            style="height:650px; object-fit:cover;">



                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.55);">
                        </div>


                    </div>



                    <div class="carousel-caption">


                        <h1>
                            Centro de Formación
                        </h1>


                        <p>
                            Organiza áreas, programas y procesos académicos
                        </p>


                        <a href="/area/list" class="btn btn-light btn-lg px-5">

                            Explorar

                        </a>


                    </div>


                </div>




            </div>





            <button class="carousel-control-prev" type="button" data-bs-target="#senaCarousel" data-bs-slide="prev">

                <span class="carousel-control-prev-icon"></span>

            </button>



            <button class="carousel-control-next" type="button" data-bs-target="#senaCarousel" data-bs-slide="next">

                <span class="carousel-control-next-icon"></span>

            </button>



        </div>


    </div>
@endsection
