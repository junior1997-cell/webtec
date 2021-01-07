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