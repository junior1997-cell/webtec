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
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
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
                  <h3 class="mb-0">Formulario busqueda de producto</h3>
                </div>
                <!-- Card body -->
                <div class="card-body mb-4">
                  <!-- Form groups used in grid -->
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

                  <hr><!-- --------------- -->

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
                    <div class="row">
                      <button type="button" class="btn btn-success">Agregar proucto</button>
                      <button type="button" class="btn btn-danger">Salir</button>
                    </div>
                  </div>
                </div>
            </div>

            <div class="card mb-12">
              <!-- Card Table -->
              <div class="card-body mb-12">
                <div class="">
                  <div class="row">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                          <thead class="thead-light">
                            <tr>
                              <th scope="col" class="sort" data-sort="name">cod</th>
                              <th scope="col" class="sort" data-sort="budget">Articulo</th>
                              <th scope="col" class="sort" data-sort="status">Stock Total</th>
                            </tr>
                          </thead>
                          <tbody class="list">
                            <tr>
                              <th scope="row">
                                <div class="media align-items-center">
                                  <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src=" {{asset('/argon/assets/img/theme/bootstrap.jpg')}}">
                                  </a>
                                  <div class="media-body">
                                    <span class="name mb-0 text-sm">Argon Design System</span>
                                  </div>
                                </div>
                              </th>
                              <td class="budget">
                                $2500 USD
                              </td>
                              <td>
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-warning"></i>
                                  <span class="status">pending</span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                  <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle mr-3">
                                      <img alt="Image placeholder" src=" {{asset('/argon/assets/img/theme/bootstrap.jpg')}}">
                                    </a>
                                    <div class="media-body">
                                      <span class="name mb-0 text-sm">Argon Design System</span>
                                    </div>
                                  </div>
                                </th>
                                <td class="budget">
                                  $2500 USD
                                </td>
                                <td>
                                  <span class="badge badge-dot mr-4">
                                    <i class="bg-warning"></i>
                                    <span class="status">pending</span>
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">
                                  <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle mr-3">
                                      <img alt="Image placeholder" src=" {{asset('/argon/assets/img/theme/bootstrap.jpg')}}">
                                    </a>
                                    <div class="media-body">
                                      <span class="name mb-0 text-sm">Argon Design System</span>
                                    </div>
                                  </div>
                                </th>
                                <td class="budget">
                                  $2500 USD
                                </td>
                                <td>
                                  <span class="badge badge-dot mr-4">
                                    <i class="bg-warning"></i>
                                    <span class="status">pending</span>
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">
                                  <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle mr-3">
                                      <img alt="Image placeholder" src=" {{asset('/argon/assets/img/theme/bootstrap.jpg')}}">
                                    </a>
                                    <div class="media-body">
                                      <span class="name mb-0 text-sm">Argon Design System</span>
                                    </div>
                                  </div>
                                </th>
                                <td class="budget">
                                  $2500 USD
                                </td>
                                <td>
                                  <span class="badge badge-dot mr-4">
                                    <i class="bg-warning"></i>
                                    <span class="status">pending</span>
                                  </span>
                                </td>
                              </tr>
                          </tbody>
                        </table>
                      </div>    
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                          <thead class="thead-light">
                            <tr>
                              <th scope="col" class="sort" data-sort="name">Unidad</th>
                              <th scope="col" class="sort" data-sort="budget">Precio 1</th>
                              <th scope="col" class="sort" data-sort="status">Precio 2</th>
                              <th scope="col" class="sort" data-sort="status">Precio 3</th>
                              <th scope="col" class="sort" data-sort="status">Precio 4</th>
                              <th scope="col" class="sort" data-sort="status">Precio 5</th>
                            </tr>
                          </thead>
                          <tbody class="list">
                            <tr>
                              <th scope="row">
                                <div class="media align-items-center">
                                  <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src=" {{asset('/argon/assets/img/theme/bootstrap.jpg')}}">
                                  </a>
                                  <div class="media-body">
                                    <span class="name mb-0 text-sm">Argon Design System</span>
                                  </div>
                                </div>
                              </th>
                              <td class="budget">
                                $2500 USD
                              </td>
                              <td class="budget">
                                $2500 USD
                              </td>
                              <td class="budget">
                                $2500 USD
                              </td>
                              <td class="budget">
                                $2500 USD
                              </td>
                              <td class="budget">
                                $2500 USD
                              </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                  <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle mr-3">
                                      <img alt="Image placeholder" src=" {{asset('/argon/assets/img/theme/bootstrap.jpg')}}">
                                    </a>
                                    <div class="media-body">
                                      <span class="name mb-0 text-sm">Argon Design System</span>
                                    </div>
                                  </div>
                                </th>
                                <td class="budget">
                                  $2500 USD
                                </td>
                                <td class="budget">
                                  $2500 USD
                                </td>
                                <td class="budget">
                                  $2500 USD
                                </td>
                                <td class="budget">
                                  $2500 USD
                                </td>
                                <td class="budget">
                                  $2500 USD
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">
                                  <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle mr-3">
                                      <img alt="Image placeholder" src=" {{asset('/argon/assets/img/theme/bootstrap.jpg')}}">
                                    </a>
                                    <div class="media-body">
                                      <span class="name mb-0 text-sm">Argon Design System</span>
                                    </div>
                                  </div>
                                </th>
                                <td class="budget">
                                  $2500 USD
                                </td>
                                <td class="budget">
                                  $2500 USD
                                </td>
                                <td class="budget">
                                  $2500 USD
                                </td>
                                <td class="budget">
                                  $2500 USD
                                </td>
                                <td class="budget">
                                  $2500 USD
                                </td>
                              </tr>
                          </tbody>
                        </table>
                      </div>    
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <!--</div>
      </div>-->
      
      @include('layouts.footer')
    </div>
  </div>
@include('layouts.script')
</body>

</html>