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
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar cliente</h5>
                                        </center>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <!-- ================================= MODAL CUERPO ================================= -->
                                    <div class="modal-body">
                                        <div class="card-body mb-12">
                                            <!-- Border 1 -->
                                            <div class="border" style="margin-bottom: 10px; padding: 20px;">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label for="cliente-input" class="form-control-label">Cliente</label>
                                                            <input class="form-control" type="text" value="Publico general" id="cliente-input">
                                                        </div>
                                                    </div>

                                                    <div class="col-2">
                                                        <div class="form-group">
                                                            <label for="credito-input" class="form-control-label">Credito</label>
                                                            <input class="form-control" type="text" value="S/0.00" id="credito-input">
                                                        </div>
                                                    </div>

                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label for="ruc-dni-input" class="form-control-label">RUC/DNI</label>
                                                            <input class="form-control" type="number" value="Publico general" id="ruc-dni-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label for="direccion-input" class="form-control-label">Direccion</label>
                                                            <input class="form-control" type="text" value="Direccion" id="direccion-input">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="cliente-input" class="form-control-label">Persona/Direccion de entrega</label>
                                                            <input class="form-control" type="text" value="Publico general" id="cliente-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label for="monedaFormControlSelect">Moneda</label>
                                                            <select class="form-control" id="monedaFormControlSelect">
                                                              <option>Soles</option>
                                                              <option>Dolares</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-gropu">
                                                            <label for="monedaFormControlSelect">Cliente</label><br>
                                                            <button type="button" class="btn btn-secondary">cliente</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Border 2 -->
                                            <div class="border" style="margin-bottom: 10px; padding: 20px;">
                                                <div class="row">
                                                   <div class="col-5">
                                                        <div class="border" style="margin-bottom: 10px; padding: 20px;">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="monedaFormControlSelect">Doc. de venta</label>
                                                                        <select class="form-control" id="monedaFormControlSelect">
                                                                          <option>Boleta de venta</option>
                                                                          <option>Factura</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                   </div>
                                                   <div class="col-4">
                                                        <div class="border" style="margin-bottom: 10px; padding: 20px;">
                                                            <div class="row">
                                                                <div class="col-8">
                                                                    <div class="form-group">
                                                                        <label for="pedido-date-input" class="form-control-label">Nro.pedido</label>
                                                                        <input class="form-control" type="date" value="2018-11-23" id="pedido-date-input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="form-gropu">   
                                                                        <label for="">Sin F.emisión</label>
                                                                        <label class="custom-toggle">
                                                                            <input type="checkbox" checked>
                                                                            <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                   </div>
                                                   <div class="col-3">
                                                       <div class="border" style="margin-bottom: 10px; padding: 20px;">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="monedaFormControlSelect">Medio pago</label>
                                                                <select class="form-control" id="monedaFormControlSelect">
                                                                  <option>Contado</option>
                                                                  <option>Cuotas</option>
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
                                        <button type="button" class="btn btn-primary">Guardar cliente</button>
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

                                <div class="border" style="margin-bottom: 10px; padding: 20px;">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="importe-input" class="form-control-label">Importe bruto</label>
                                                <input class="form-control" type="number" value="S/0.00" id="importe-input">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="trans-input" class="form-control-label">Trans.grat</label>
                                                <input class="form-control" type="number" value="S/0.00" id="trans-input">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="dscto-input" class="form-control-label">Dscto</label>
                                                <input class="form-control" type="number" value="S/0.00" id="dscto-input">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="subtotal-input" class="form-control-label">Sub total</label>
                                                <input class="form-control" type="number" value="S/0.00" id="subtotal-input">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="igv-input" class="form-control-label">IGV 18%</label>
                                                <input class="form-control" type="number" value="S/0.00" id="igv-input" readonly>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="icbpef-input" class="form-control-label">ICBPEF</label>
                                                <input class="form-control" type="number" value="S/0.00" id="icbpef-input" readonly>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="valortotal-input" class="form-control-label">Valor total</label>
                                                <input class="form-control" type="number" value="S/0.00" id="valortotal-input">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="pago-input" class="form-control-label">Pagado con</label>
                                                <input class="form-control" type="text" value="S/0.00" id="pago-input">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="vuelto-input" class="form-control-label">Vuelto</label>
                                                <input class="form-control" type="text" value="S/0.00" id="vuelto-input">
                                            </div>
                                        </div>
                                    </div>

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
