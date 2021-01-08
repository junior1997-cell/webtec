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
                                        <h3 class="mb-0">Formulario notas de debito</h3>
                                    </div>
                                    <div class="col-4 text-right">
                                        <h3>Buscar en:</h3>
                                    </div>
                                    <div class="col-4 text-right">
                                        <form class="d-flex">
                                            <input class="form-control " type="search" placeholder="Buscar venta" aria-label="Search">
                                            <button type="button" class="btn btn-success">Buscar</button>
                                        </form>
                                    </div>
                                </div>                                
                            </div>
                            <!-- Card body -->
                            <div class="card-body mb-12">
                                <!-- Form groups used in grid -->
                                    <!-- Card Table -->

                                <div class="row">
                                    <button type="button" class="btn btn-success">Buscar</button>
                                    <button type="button" class="btn btn-danger">Quitar item</button>
                                    <button type="button" class="btn btn-primary">Editar item</button>
                                </div>
                                
                                <hr>

                                <div class="row">
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
                                                                        <img alt="Image placeholder" src=" {{asset('/argon/assets/img/theme/bootstrap.jpg')}}" />
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
                                                                        <img alt="Image placeholder" src=" {{asset('/argon/assets/img/theme/bootstrap.jpg')}}" />
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
                                                                        <img alt="Image placeholder" src=" {{asset('/argon/assets/img/theme/bootstrap.jpg')}}" />
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
                                                <label class="form-control-label">Importe bruto</label>
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

                                <div class="card card-frame">
                                    <div class="card-body">
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input class="custom-control-input" id="anulado" type="checkbox">
                                            <label class="custom-control-label" for="anulado">Registrar como anulada</label>
                                        </div>
                                        <div class="row">
                                            <button type="button" class="btn btn-primary">Nuevo</button>
                                            <button type="button" class="btn btn-success">Registrar</button>
                                            <button type="button" class="btn btn-warning">Limpiar lista</button>
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
    </div>
        @include('layouts.script')
    </body>
</html>
