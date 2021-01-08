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
                      <div class="col-sm-8">awd</div>
                      <div class="col">awd</div>
                      <div class="col">wad</div>
                  </div>
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
      
      @include('layouts.footer')
    </div>
  </div>
@include('layouts.script')
</body>

</html>