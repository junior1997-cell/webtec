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
                                    <h3 class="mb-0">Notas de debito</h3>
                                  </div>
                                  <div class="col-4 text-right">
                                    <a type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Agregar Nota</a>
                                  </div>
                                </div>
                              </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- ================================= BOTON DISPARADOR DE MODAL ================================= -->

                                <!-- ================================= MODAL ================================= -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    <div class="modal-content">
                                    <!-- ================================= MODAL TITULO ================================= -->
                                    <div class="modal-header">
                                        <center style="text-align: -webkit-center !important;">
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar Nota</h5>
                                        </center>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <!-- ================================= MODAL CUERPO ================================= -->
                                    <div class="modal-body">
                                        <div class="row col-12">
                                            <div class="card-body mb-12">  
                                                <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Nro.Documento</label>
                                                                <input class="form-control" type="text" placeholder="Default input">
                                                              </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="form-control-label">.</label>
                                                                <input class="form-control" type="date" value="2018-11-23" id="example-date-input">
                                                            </div>
                                                        </div>
                                                        <div class="col"></div>
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Imp.bruto</label>
                                                                <input class="form-control" type="text" placeholder="S/0.00">
                                                              </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Descuento</label>
                                                                <input class="form-control" type="text" placeholder="S/0.00">
                                                              </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Sub Total</label>
                                                                <input class="form-control" type="text" placeholder="S/0.00">
                                                              </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="form-control-label">IGV</label>
                                                                <input class="form-control" type="text" placeholder="S/0.00">
                                                              </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Total</label>
                                                                <input class="form-control" type="text" placeholder="S/0.00">
                                                              </div>
                                                        </div>
                                                </div>
                
                                                <hr>
                                                <h3>Datos del Cliente</h3>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Cliente</label>
                                                            <input class="form-control" type="text" placeholder="Default input">
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="form-group">
                                                            <label class="form-control-label">.</label><br>
                                                            <button type="button" class="btn btn-secondary">...</button>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="form-control-label">RUC/DNI</label>
                                                            <input class="form-control" type="number" placeholder="Default input">
                                                          </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Credito</label>
                                                            <input class="form-control" type="number" placeholder="Default input">
                                                          </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Direccion</label>
                                                            <input class="form-control" type="text" placeholder="Default input">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="moneda">Moneda</label>
                                                            <select class="form-control" id="moneda">
                                                              <option>Soles</option>
                                                              <option>Dolares</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <hr>
                                                
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h3>Documento de venta</h3>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <select class="form-control" id="moneda">
                                                                      <option>Nota de credito</option>
                                                                      <option>Nota de credito</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <h3>Nro.pedido</h3>
                                                        <div class="row">
                                                            
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <input class="form-control" type="date" value="2018-11-23" id="example-date-input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <h3>Medio de pago</h3>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <select class="form-control" id="tipoPago">
                                                                      <option>Contado</option>
                                                                      <option>Credito</option>
                                                                    </select>
                                                                </div>
                                                            </div>
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
                                        <button type="button" class="btn btn-primary">Guardar producto</button>
                                    </div>
                                    <!-- FIN-MODAL-FOOTER -->
                                    </div>
                                </div>
                                </div>
                                <!-- FIN-MODAL -->

                                <!-- ================================= Tabla ================================= -->
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
            </div>
            @include('layouts.footer')
        </div>
    </div>
        @include('layouts.script')
    </body>
</html>
