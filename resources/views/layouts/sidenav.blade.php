<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header  d-flex  align-items-center">
      <a class="navbar-brand" href="{{ url('/')}}">
        <img src="/argon/assets/img/brand/logo_ceatec.png" class="navbar-brand-img" alt="...">
      </a>
      <div class=" ml-auto ">
        <!-- Sidenav toggler -->
        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
              <i class="ni ni-shop text-primary"></i>
              <span class="nav-link-text">Dashboards</span>
            </a>
            <div class="collapse show" id="navbar-dashboards">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="{{ url('/dashboard')}}" class="nav-link">
                    <span class="sidenav-mini-icon"> D </span>
                    <span class="sidenav-normal"> Dashboard </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('/dashboard')}}" class="nav-link">
                    <span class="sidenav-mini-icon"> A </span>
                    <span class="sidenav-normal"> Alternative </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#navbar-herramientas" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-herramientas">
              <i class="ni ni-ungroup text-orange"></i>
              <span class="nav-link-text">Herramientas</span>
            </a>
            <div class="collapse" id="navbar-herramientas">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> P </span>
                    <span class="sidenav-normal"> Parametros </span>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#navbar-seguridad" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-seguridad">
                    <span class="sidenav-mini-icon"> S </span>
                    <span class="sidenav-normal"> Seguridad </span>
                  </a>
                  <div class="collapse show" id="navbar-seguridad" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Empresas y usuarios</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Usuarios</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Niveles de acceso</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="#navbar-copia" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-copia">
                    <span class="sidenav-mini-icon"> C </span>
                    <span class="sidenav-normal"> Copia de seguridad </span>
                  </a>
                  <div class="collapse show" id="navbar-copia" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Back up total</a>
                      </li>
                    </ul>
                  </div>
                </li>

              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#navbar-mantenimiento" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-mantenimiento">
              <i class="ni ni-ungroup text-orange"></i>
              <span class="nav-link-text">Mantenimiento</span>
            </a>
            <div class="collapse" id="navbar-mantenimiento">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> A </span>
                    <span class="sidenav-normal"> Articulo </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> C </span>
                    <span class="sidenav-normal"> Cliente proovedor </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> A </span>
                    <span class="sidenav-normal"> ArticulosXproveedor </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#navbar-empresa" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-empresa">
                    <span class="sidenav-mini-icon"> E </span>
                    <span class="sidenav-normal"> Empresa </span>
                  </a>
                  <div class="collapse show" id="navbar-empresa" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Empresa</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Sucursal</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Almacen</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Zona</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Sector</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="#navbar-grupo" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-grupo">
                    <span class="sidenav-mini-icon"> G </span>
                    <span class="sidenav-normal"> Grupo,Familia,Marca,Unidad </span>
                  </a>
                  <div class="collapse show" id="navbar-grupo" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Grupo</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Familia</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Marca</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Unidad</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Tipo Origen</a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="nav-item">
                  <a href="#navbar-seguridad" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-seguridad">
                    <span class="sidenav-mini-icon"> S </span>
                    <span class="sidenav-normal"> Seguridad </span>
                  </a>
                  <div class="collapse show" id="navbar-seguridad" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Empresas y usuarios</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Usuarios</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Niveles de acceso</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="#navbar-copia" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-copia">
                    <span class="sidenav-mini-icon"> C </span>
                    <span class="sidenav-normal"> Copia de seguridad </span>
                  </a>
                  <div class="collapse show" id="navbar-copia" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Back up total</a>
                      </li>
                    </ul>
                  </div>
                </li>
                
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
              <i class="ni ni-ungroup text-orange"></i>
              <span class="nav-link-text">Examples</span>
            </a>
            <div class="collapse" id="navbar-examples">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> P </span>
                    <span class="sidenav-normal"> Pricing </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
              <i class="ni ni-ui-04 text-info"></i>
              <span class="nav-link-text">Components</span>
            </a>
            <div class="collapse" id="navbar-components">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="../../pages/components/buttons.html" class="nav-link">
                    <span class="sidenav-mini-icon"> B </span>
                    <span class="sidenav-normal"> Buttons </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#navbar-multilevel" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-multilevel">
                    <span class="sidenav-mini-icon"> M </span>
                    <span class="sidenav-normal"> Multi level </span>
                  </a>
                  <div class="collapse show" id="navbar-multilevel" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Third level menu</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Just another link</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">One last link</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="../../pages/widgets.html">
              <i class="ni ni-archive-2 text-green"></i>
              <span class="nav-link-text">Widgets</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
