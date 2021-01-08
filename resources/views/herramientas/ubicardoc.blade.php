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
                <h6 class="h2 text-white d-inline-block mb-0">Mantenimiento</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item">
                      <a href="#"><i class="fas fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Articulos</a></li>
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
                    <h3 class="mb-0">Ubicar Documento</h3>
                  </div>
                  <div class="col-4 text-right">
                    <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                  </div>
                </div>
              </div>
              <!-- ================================= CARD BODY ================================= -->
              <div class="card-body">
                <!-- ================================= BOTON DISPARADOR DE MODAL ================================= -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  MODAL UBICAR DOCMUENTO
                </button>

                <!-- ================================= MODAL ================================= -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content">
                      <!-- ================================= MODAL TITULO ================================= -->
                      <div class="modal-header">
                        <center style="text-align: -webkit-center !important;">
                          <h5 class="modal-title" id="exampleModalLabel">Ubicar Documento</h5>
                        </center>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <!-- ================================= MODAL CUERPO ================================= -->
                      <div class="modal-body">
                        <label class="form-control-label" for="input-username">Filtrar</label>
                        <!-- ================================= CUADRO BORDER================================= -->
                        <div class="border" style="margin-bottom: 10px; padding: 20px;">
                          <div class="row">

                            <!-- ================================= INPUT FILTRAR ================================= -->
                            <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                              <div class="form-group">
                                <input type="text" id="input-username" class="form-control" placeholder="Filtrar" />
                              </div>
                            </div>

                            <!-- ========================== LABEL POR =========================== -->
                            <div class="cent-ico-radio col-xs-1 col-sm-1 col-md-1 col-lg-1">
                              <div class="form-group">
                                <label class="form-control-label">POR</label>
                              </div>
                            </div>
                            <div class="col-xs-5 col-sm-11 col-md-5 col-lg-5">
                              <!-- ======================= INPUT PARA SELECIONAR ========================= -->
                              <select class="form-control" data-toggle="select">
                                <option>Buscar</option>
                                <option>AFP</option>
                                <option>PRIMA</option>
                                <option>ERP</option>
                                <option>CEATEC</option>
                                <option>ALEXITO</option>
                              </select>
                            </div>
                            <!-- ================================= INPUT FECHA ================================= -->
                            <div class="col-lg-6" >
                              <div class="row input-daterange datepicker align-items-center">
                                <div class="col">
                                  <div class="form-group">
                                    <label class="form-control-label">Fecha Inicio</label>
                                    <div class="input-group input-group-merge">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="fas fa-calendar-alt"></i>
                                        </span>
                                      </div>
                                      <input class="form-control" placeholder="Start date" type="text" value="01/10/2021" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-group">
                                    <label class="form-control-label">Fecha Fin</label>
                                    <div class="input-group input-group-merge">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="fas fa-calendar-alt"></i>
                                        </span>
                                      </div>
                                      <input class="form-control" placeholder="End date" type="text" value="01/16/2021" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- =============================== INPUT TIPO DOCUMENTO =============================== -->
                            <div class="col-lg-6" style="padding-right: 0px !important;">

                              <div class="column">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 ">
                                  <label class="form-control-label">Tipo de Documento</label>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                                  <div class="row">
                                    <div class="cent-ico-radio col-xs-2 col-sm-2 col-md-2 col-lg-2 " >
                                      <!-- ========================= RADIO BUTTOON ====================== -->
                                      <label class="custom-toggle custom-toggle-warning">
                                        <input type="checkbox" checked />
                                        <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes">
                                        </span>
                                      </label>
                                    </div>

                                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 ">
                                      <!-- ======================= INPUT PARA SELECIONAR ========================= -->
                                      <select class="form-control" data-toggle="select">
                                        <option>Buscar</option>
                                        <option>AFP</option>
                                        <option>PRIMA</option>
                                        <option>ERP</option>
                                        <option>CEATEC</option>
                                        <option>ALEXITO</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- ================================= FIN-CUADRO-BRODER ================================= -->

                        <!-- TABLA DOC -->
                        <div class="table-responsive py-4">
                          <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                              <tr>
                                <th>Item</th>
                                <th>Cod. de Compra</th>
                                <th>Proveedor</th>
                                <th>Tipo</th>
                                <th>Numero de Documento</th>
                              </tr>
                            </thead>
                            <tfoot>
                              <tr>
                                <th>Item</th>
                                <th>Cod. de Compra</th>
                                <th>Proveedor</th>
                                <th>Tipo</th>
                                <th>Numero de Documento</th>
                              </tr>
                            </tfoot>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                              </tr>
                              <tr>
                                <td>7</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                              </tr>
                              <tr>
                                <td>8</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010/10/14</td>
                              </tr>
                              <tr>
                                <td>9</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009/09/15</td>
                              </tr>
                            </tbody>
                          </table>
                          <!-- FIN-TABLE- -->
                        </div>

                        <!-- LABEL DETALLE -->
                        <label class="form-control-label" for="input-username">
                          Detalle de la compra
                        </label>

                        <!-- TABLA DE TALLE DE COMPRA -->
                        <div class="table-responsive py-4">
                          <table class="table table-flush" id="datatable-buttons">
                            <thead class="thead-light">
                              <tr>
                                <th>Item</th>
                                <th>Articulo</th>
                                <th>Unidad</th>
                                <th>Cantidad</th>
                                <th>Costo</th>
                                <th>Igv</th>
                                <th>Descuento</th>
                              </tr>
                            </thead>
                            <tfoot>
                              <tr>
                                  <th>Item</th>
                                  <th>Articulo</th>
                                  <th>Unidad</th>
                                  <th>Cantidad</th>
                                  <th>Costo</th>
                                  <th>Igv</th>
                                  <th>Descuento</th>
                              </tr>
                            </tfoot>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                              </tr>
                              <tr>
                                <td>7</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                              </tr>
                              <tr>
                                <td>8</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010/10/14</td>
                                <td>55</td>
                                <td>2010/10/14</td>
                              </tr>
                              <tr>
                                <td>9</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009/09/15</td>
                                <td>39</td>
                                <td>2009/09/15</td>
                              </tr>
                            </tbody>
                          </table>
                          <!-- FIN-TABLE- -->
                        </div>
                      </div>
                      <!-- FIN-MODAL-BODY -->

                      <!-- MODAL FOOTER -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                      <!-- FIN-MODAL-FOOTER -->
                    </div>
                  </div>
                </div>
                <!-- FIN-MODAL -->
              </div>
              <!-- FIN-CARD-BODY -->
            </div>
            <!-- FIND-CARD -->
          </div>
        </div>
      </div>

      @include('layouts.footer')
    </div>

    @include('layouts.script')
  </body>
</html>
