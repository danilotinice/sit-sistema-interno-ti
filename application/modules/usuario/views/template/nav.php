<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
    <div class="navbar-wrapper">
      <div class="navbar-container content">
        <div class="collapse navbar-collapse show" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
            <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
              <ul class="dropdown-menu">
                <li class="arrow_box">
                  <form>
                    <div class="input-group search-box">
                      <div class="position-relative has-icon-right full-width">
                        <input class="form-control" id="search" type="text" placeholder="Search here...">
                        <div class="form-control-position navbar-search-close"><i class="ft-x"> </i></div>
                      </div>
                    </div>
                  </form>
                </li>
              </ul>
            </li>
          </ul>

          <!-- Navbar topo lateral direito -->

          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online"><img src="<?= base_url('public/theme-assets/images/logo/logo.png'); ?>" alt="Danilo"><i></i></span></a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="theme-assets/images/portrait/small/avatar-s-19.png" alt=""><span class="user-name text-bold-700 ml-1">John Doe</span></span></a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i> Logout</a>
                </div>
              </div>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </nav>

  <!-- ////////////////////////////////////////////////////////////////////////////-->


  <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a class="navbar-brand" href="<?= base_url(''); ?>"><img class="brand-logo" alt="nice for you" src="<?= base_url('public/theme-assets/images/logo/logo.png'); ?>" />
            <h3 class="brand-text">GESTÃO DE TI</h3>
          </a></li>
        <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
      </ul>
    </div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item"><a href="<?= base_url('home'); ?>"><i class="ft-home"></i><span class="menu-title" data-i18n="">Inicio</span></a>
        </li>
        <li class="nav-item"><a href="<?= base_url('usuario/update'); ?>"><i class="ft-user"></i><span class="menu-title" data-i18n="">Usuario</span></a>
        </li>
        <li class="nav-item"><a href="<?= base_url('inventario'); ?>"><i class="ft-cpu"></i><span class="menu-title" data-i18n="">Inventario</span></a>
        </li>
        <li class="nav-item"><a href="<?= base_url('contrato'); ?>"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Contratos</span></a>
        </li>
        <li class="nav-item"><a href="<?= base_url('orcamento'); ?>"><i class="ft-target"></i><span class="menu-title" data-i18n="">Orçamentos</span></a>
        </li>
      </ul>
    </div>

    <div class="navigation-background"></div>
  </div>

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!-- Chart -->
        <div class="row match-height">
          <div class="col-12">
            <div class="">
              <img class="" src="<?= base_url('public/theme-assets/images/backgrounds/gestaoti.jpg'); ?>" alt="gestão de ti">
            </div>
          </div>
        </div>