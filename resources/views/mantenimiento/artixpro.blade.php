<!DOCTYPE html>
<html>
    @include('layouts.head')
    
    <body>
        @include('layouts.sidenav')

        <div class="main-content" id="panel">
            @include('layouts.topnav')

            <div class="header bg-primary pb-6">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="row align-items-center py-4">
                            <div class="col-lg-6 col-7">
                                <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
                                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                        <li class="breadcrumb-item">
                                            <a href="#"><i class="fas fa-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Default</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid mt--6">
                <div class="row">
                    <div class="col">
                        <div class="card mb-4">
                            <!-- Card header -->
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-4">
                                        <h3 class="mb-0">Venta de articulos</h3>
                                    </div>
                                </div>                                
                            </div>
                            <!-- Card body -->
                            <div class="card-body mb-12">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col"><h3>Datos para la guia de remisión</h3></div>
                                    <div class="col"></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            @include('layouts.footer')
        </div>
        @include('layouts.script')
    </body>
</html>
