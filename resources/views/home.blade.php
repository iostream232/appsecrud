@extends('tablar::page')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                   
                    <h2 class="page-title">
                       
                        Sistema de Información y Gestión del Logro Académico 
                    </h2>

                </div>
                <!-- Page title actions -->
            </div>
        </div>
    </div>

    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="row">
                        <!-- Misión Card -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header" style="background-color: #28a745; color: white;">
                                    <h4 class="card-title">Misión</h4>
                                </div>
                                <div class="card-body">
                                    <p>
                                    Formar estudiantes comprometidos con su entorno, capaces de enfrentar los retos del futuro con responsabilidad, ética y excelencia académica.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Visión Card -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header" style="background-color: #007bff; color: white;">
                                    <h4 class="card-title">Visión</h4>
                                </div>
                                <div class="card-body">
                                    <p>
                                    Ser una institución educativa líder, reconocida por la calidad de su enseñanza y por fomentar el crecimiento integral de sus estudiantes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
