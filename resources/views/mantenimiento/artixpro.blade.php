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
                                <div class="row align-items-center">
                                  <div class="col-8">
                                    <h3 class="mb-0">Venta de articulos</h3>
                                  </div>
                                  <div class="col-4 text-right">
                                    <a type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Agregar remision</a>
                                  </div>
                                </div>
                              </div>
                                <!-- ================================= MODAL ================================= -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    <div class="modal-content">
                                    <!-- ================================= MODAL TITULO ================================= -->
                                    <div class="modal-header">
                                        <center style="text-align: -webkit-center !important;">
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar remisión</h5>
                                        </center>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <!-- ================================= MODAL CUERPO ================================= -->
                                    <div class="modal-body">
                                        <div class="card-body mb-12">

                                            <div class="row">
                                                <div class="col"></div>
                                                <div class="col"><h3>Datos para la guia de remisión</h3></div>
                                                <div class="col"></div>
                                            </div>
            
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Transportista</label>
                                                        <div class="col-md-8">
                                                          <input class="form-control" type="text" value="John Snow" id="example-text-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4"></div>
                                                <div class="col-4">
                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Nro de guia</label>
                                                        <div class="col-md-8">
                                                          <input class="form-control" type="text" value="201625245" id="example-text-input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="example3cols1Input">DNI Conductor</label>
                                                        <input type="number" class="form-control" id="dniInput">
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="example3cols1Input">Nombre Conductor</label>
                                                        <input type="text" class="form-control" id="nombreInput">
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="example3cols1Input">Licencia del conductor</label>
                                                        <input type="number" class="form-control" id="licenciaInput">
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="motivoFormControlSelect">Motivo de traslado</label>
                                                        <select class="form-control" id="motivoFormControlSelect">
                                                          <option>Motivo 1</option>
                                                          <option>Motivo 2</option>
                                                          <option>Motivo 3</option>
                                                          <option>Motivo 4</option>
                                                          <option>Motivo 5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="fecha-input" class="form-control-label">Fecha traslado</label>
                                                        <input class="form-control" type="date" value="2020-01-09" id="fecha-input">
                                                    </div>
                                                </div>
                                            </div>
            
                                            <!-- Border 1 -->
                                            <div class="border" style="margin-bottom: 10px; padding: 20px;">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="direccion-partida-input" class="form-control-label">Direccion de partida</label>
                                                            <input class="form-control" type="text" value="Jr.integracion 248 - Morales" id="direccion-partida-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-3"></div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label for="ibigeo-partida-input" class="form-control-label">Ubigeo</label>
                                                            <input class="form-control" type="text" id="ibigeo-partida-input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
            
                                            <!-- Border 2 -->
                                            <div class="border" style="margin-bottom: 10px; padding: 20px;">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="direccion-llegada-input" class="form-control-label">Direccion de llegada</label>
                                                            <input class="form-control" type="text" value="Jr.Alfonso Ugaste - Tarapoto" id="direccion-llegada-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-3"></div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label for="ubigeo-llegada-input" class="form-control-label">Ubigeo</label>
                                                            <input class="form-control" type="text" id="ubigeo-llegada-input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
            
                                            <!-- Border 3 -->
                                            <div class="border" style="margin-bottom: 10px; padding: 20px;">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="placa-carro-input" class="form-control-label">Placa del vehiculo</label>
                                                            <input class="form-control" type="text" value="Jr.Alfonso Ugaste - Tarapoto" id="placa-carro-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-3"></div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label for="marca-carro-input" class="form-control-label">Marca de carro</label>
                                                            <input class="form-control" type="text" id="marca-carro-input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
            
                                        </div>    
                                        <!-- ================================= FIN-CUADRO-BRODER ================================= -->
                                    </div>
                                    <!-- FIN-MODAL-BODY -->

                                    <!-- MODAL FOOTER -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary">Guardar remision</button>
                                    </div>
                                    <!-- FIN-MODAL-FOOTER -->
                                    </div>
                                    </div>
                                </div>
                                <!-- FIN-MODAL -->

                            <!-- Card body -->
                            <div class="card-body mb-12">
                                <!-- Tabla -->
                                <div class="table-responsive py-4">
                                    <table class="table table-flush" id="datatable-buttons">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Edit</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td><a type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Editar</a></td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td><a type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Editar</a></td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td><a type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Editar</a></td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td><a type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Editar</a></td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td><a type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Editar</a></td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td><a type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Editar</a></td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td><a type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Editar</a></td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td><a type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Editar</a></td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td><a type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Editar</a></td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td><a type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Editar</a></td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td><a type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Editar</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
