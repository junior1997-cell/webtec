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
                <h6 class="h2 text-white d-inline-block mb-0">Herramientas</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item">
                      <a href="#"><i class="fas fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Parametros</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Formulario</li>
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
            <!-- ====================================== ..:: CARD ::.. ================================== -->
            <div class="card mb-4">
              <!-- ================================= CARD HEADER ================================= -->
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h3 class="mb-0">Busqueda de producto</h3>
                  </div>
                  <div class="col-4 text-right">
                    <a type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Agregar producto</a>
                  </div>
                </div>
              </div>
              <!-- ================================= CARD BODY ================================= -->
              <div class="card-body">
                <!-- ================================= BOTON DISPARADOR DE MODAL ================================= -->

                <!-- ================================= MODAL ================================= -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content">
                      <!-- ================================= MODAL TITULO ================================= -->
                      <div class="modal-header">
                        <center style="text-align: -webkit-center !important;">
                          <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
                        </center>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <!-- ================================= MODAL CUERPO ================================= -->
                      <div class="modal-body">
                          <div class="row col-12">
                            
                              
                              <div class="card-body mb-12 col-12">
                                
                                <div class="row">
                                  <div class="col-8">
                                    <div class="custom-control custom-checkbox ">
                                      <input class="custom-control-input" id="customCheck1" type="checkbox">
                                      <label class="custom-control-label" for="customCheck1">Inc.Stock Cero</label>
                                    </div>
                                    <div class="form-group row">
                                      <label for="example-text-input" class="col-md-1 col-form-label form-control-label">F1</label>
                                      <div class="col-md-10">
                                        <input class="form-control" type="text" id="example-text-input">
                                      </div>
                                    </div>
                                    <center>
                                      <div class="row ">
                                        <div class="custom-control custom-checkbox">
                                          <input class="custom-control-input" id="customCheck1a" type="checkbox">
                                          <label class="custom-control-label" for="customCheck1a">Precio 1 </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input class="custom-control-input" id="customCheck2" type="checkbox">
                                          <label class="custom-control-label" for="customCheck2">Precio 2 </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input class="custom-control-input" id="customCheck3" type="checkbox">
                                          <label class="custom-control-label" for="customCheck3">Precio 3 </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input class="custom-control-input" id="customCheck4" type="checkbox">
                                          <label class="custom-control-label" for="customCheck4">Precio 4 </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input class="custom-control-input" id="customCheck5" type="checkbox">
                                          <label class="custom-control-label" for="customCheck5">Precio 5 </label>
                                        </div>
                                      </div>
                                    </center>
                                  </div>
                                  <div class="col-4">
                                    <div class="custom-control custom-checkbox mb-3">
                                      <input class="custom-control-input" id="venta" type="checkbox">
                                      <label class="custom-control-label" for="venta">Venta diferida</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                      <input class="custom-control-input" id="bonificacion" type="checkbox">
                                      <label class="custom-control-label" for="bonificacion">Bonificaion</label>
                                    </div>
                                    <div class="form-group col-8">
                                      <label class="form-control-label" for="almacen">Almacen</label>
                                      <select class="form-control form-control-sm" id="almacen">
                                        <option>PRiNCIPAL</option>
                                        <option>SECUNDARIO</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
              
                                <hr><!-- SEPARADOR -->
              
                                <div class="">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">Cantidad</label>
                                        <input type="text" class="form-control" id="example3cols1Input">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label class="form-control-label" for="example3cols2Input">Precio</label>
                                        <input type="number" class="form-control" id="example3cols2Input" placeholder="S/.0.00">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label class="form-control-label" for="example3cols3Input">Subtotal</label>
                                        <input type="number" class="form-control" id="example3cols3Input" placeholder="S/.0.00">
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
              <!-- FIN-CARD-BODY -->
            </div>
            <!-- FIND-CARD -->
          </div>
        </div>

      @include('layouts.footer')
    </div>

    @include('layouts.script')
  </body>
</html>
