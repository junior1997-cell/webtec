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
          <!--<li class="nav-item">
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
          </li>-->

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
              <i class="ni ni-ungroup text-black"></i>
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
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> T </span>
                    <span class="sidenav-normal"> Tipos de clientes </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#navbar-ventas" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-ventas">
                    <span class="sidenav-mini-icon"> V </span>
                    <span class="sidenav-normal"> Ventas </span>
                  </a>
                  <div class="collapse show" id="navbar-ventas" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Bancos</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Tarjetas</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="#navbar-ubigeo" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-ubigeo">
                    <span class="sidenav-mini-icon"> U </span>
                    <span class="sidenav-normal"> Ubigeo </span>
                  </a>
                  <div class="collapse show" id="navbar-ubigeo" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Departamento</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Distrito</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Provincia</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> T </span>
                    <span class="sidenav-normal"> Tipos de Prioridades </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#navbar-documento" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-documento">
                    <span class="sidenav-mini-icon"> T </span>
                    <span class="sidenav-normal"> Tipo Documento </span>
                  </a>
                  <div class="collapse show" id="navbar-documento" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Compra</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Venta</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> T </span>
                    <span class="sidenav-normal"> Tipo nivel de acceso </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> C </span>
                    <span class="sidenav-normal"> Comisiones </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> C </span>
                    <span class="sidenav-normal"> Caja </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#navbar-guia" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-guia">
                    <span class="sidenav-mini-icon"> G </span>
                    <span class="sidenav-normal"> Guia de Remision </span>
                  </a>
                  <div class="collapse show" id="navbar-guia" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Motivo traslado</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> G </span>
                    <span class="sidenav-normal"> Gastos </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#navbar-guia" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-guia">
                    <span class="sidenav-mini-icon"> O </span>
                    <span class="sidenav-normal"> Otros </span>
                  </a>
                  <div class="collapse show" id="navbar-guia" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Restaurar articulos eliminados</a>
                      </li>
                    </ul>
                  </div>
                </li>

              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#navbar-movimientos" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-movimientos">
              <i class="ni ni-ungroup text-green"></i>
              <span class="nav-link-text">Movimientos</span>
            </a>
            <div class="collapse" id="navbar-movimientos">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="#navbar-actualizar" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-actualizar">
                    <span class="sidenav-mini-icon"> A </span>
                    <span class="sidenav-normal"> Actualizar almacen </span>
                  </a>
                  <div class="collapse show" id="navbar-actualizar" style="">
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
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> R </span>
                    <span class="sidenav-normal"> Registrar compras </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> M </span>
                    <span class="sidenav-normal"> Modificar/Eliminar Compra</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> A </span>
                    <span class="sidenav-normal"> Automatizar compras </span>
                  </a>
                </li><li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> I </span>
                    <span class="sidenav-normal"> Reimprimir amortizaciones </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> V </span>
                    <span class="sidenav-normal"> Valorizar compra -Flete </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> A </span>
                    <span class="sidenav-normal"> Amortizacion gastos </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#navbar-gastos" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-gastos">
                    <span class="sidenav-mini-icon"> A </span>
                    <span class="sidenav-normal"> Administración Gastos </span>
                  </a>
                  <div class="collapse show" id="navbar-gastos" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Registro Gastos</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Modificar Gastos</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Pago Gastos</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Reporte Gastos</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="#navbar-caja" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-caja">
                    <span class="sidenav-mini-icon"> A </span>
                    <span class="sidenav-normal"> Administración Caja </span>
                  </a>
                  <div class="collapse show" id="navbar-caja" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Apertura Caja</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Cierre Caja</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#navbar-reportes" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-reportes">
              <i class="ni ni-ungroup text-red"></i>
              <span class="nav-link-text">Reportes</span>
            </a>
            <div class="collapse" id="navbar-reportes">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="#navbar-reporte" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-reporte">
                    <span class="sidenav-mini-icon"> R </span>
                    <span class="sidenav-normal"> Reporte movimientos </span>
                  </a>
                  <div class="collapse show" id="navbar-reporte" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Generar Cardex</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Saldos de inventario</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Inv.por almacen-Kardex valorizado</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Lista salida de Almacen</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Resumen asiento contable</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Resumen inventario Fisico</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Saldo por almacen</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Ingreso-Salida por almacen</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Consulta Kardex</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> R </span>
                    <span class="sidenav-normal"> Reporte ventas </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> R </span>
                    <span class="sidenav-normal"> Reporte compras </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> G </span>
                    <span class="sidenav-normal"> Gestion archivos SUNAT </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#navbar-listado" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-listado">
                    <span class="sidenav-mini-icon"> L </span>
                    <span class="sidenav-normal"> Listado de ... </span>
                  </a>
                  <div class="collapse show" id="navbar-listado" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Productos</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Situacion de documentos</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Lista VendoFazil</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> C </span>
                    <span class="sidenav-normal">  Cuentas por pagar </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> C </span>
                    <span class="sidenav-normal"> Cuentas por cobrar </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#navbar-listadocliente" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-listadocliente">
                    <span class="sidenav-mini-icon"> L </span>
                    <span class="sidenav-normal"> Listado de clientes </span>
                  </a>
                  <div class="collapse show" id="navbar-listadocliente" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Lista de clientes</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Lista de proveedores</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> I </span>
                    <span class="sidenav-normal"> Ingreso efectivo caja </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> K </span>
                    <span class="sidenav-normal"> Kardex por articulo </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#navbar-movimientocaja" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-movimientocaja">
                    <span class="sidenav-mini-icon"> M </span>
                    <span class="sidenav-normal"> Movimiento Caja </span>
                  </a>
                  <div class="collapse show" id="navbar-movimientocaja" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Ingreso Caja</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Egreso Caja</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Saldo Caja</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="#navbar-reporteesta" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-reporteesta">
                    <span class="sidenav-mini-icon"> R </span>
                    <span class="sidenav-normal"> Reportes Estadisticos </span>
                  </a>
                  <div class="collapse show" id="navbar-reporteesta" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Ventas mensuales por cliente</a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Ventas mensuales por productos</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="#navbar-resumenventas" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-resumenventas">
                    <span class="sidenav-mini-icon"> R </span>
                    <span class="sidenav-normal"> Resumen ventas </span>
                  </a>
                  <div class="collapse show" id="navbar-resumenventas" style="">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="#!" class="nav-link ">Resumen ventas diarias</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="../../pages/examples/pricing.html" class="nav-link">
                    <span class="sidenav-mini-icon"> C </span>
                    <span class="sidenav-normal"> Cierre caja X y Z </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
              <i class="ni ni-ui-04 text-info"></i>
              <span class="nav-link-text">Ventas</span>
            </a>
            <div class="collapse" id="navbar-components">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="../../pages/components/buttons.html" class="nav-link">
                    <span class="sidenav-mini-icon"> V </span>
                    <span class="sidenav-normal"> Venta producto </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../pages/components/buttons.html" class="nav-link">
                    <span class="sidenav-mini-icon"> M </span>
                    <span class="sidenav-normal"> Modificar/Eliminar venta </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../pages/components/buttons.html" class="nav-link">
                    <span class="sidenav-mini-icon"> N </span>
                    <span class="sidenav-normal"> Nota de credito </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../pages/components/buttons.html" class="nav-link">
                    <span class="sidenav-mini-icon"> N </span>
                    <span class="sidenav-normal"> Nota de debito </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../pages/components/buttons.html" class="nav-link">
                    <span class="sidenav-mini-icon"> G </span>
                    <span class="sidenav-normal"> Generar cronograma de pago </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../pages/components/buttons.html" class="nav-link">
                    <span class="sidenav-mini-icon"> R </span>
                    <span class="sidenav-normal"> Reimprimir ventas </span>
                  </a>
                </li> 
                <li class="nav-item">
                  <a href="../../pages/components/buttons.html" class="nav-link">
                    <span class="sidenav-mini-icon"> C </span>
                    <span class="sidenav-normal"> Cobranzas </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../pages/components/buttons.html" class="nav-link">
                    <span class="sidenav-mini-icon"> R </span>
                    <span class="sidenav-normal"> Reimprimir cobranzas </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>