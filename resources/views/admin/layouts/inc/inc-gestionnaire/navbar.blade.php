  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #ffcccc;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
     
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('gestionnaire.dashboard')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('courrier.view')}}" class="nav-link">Courrier</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('courrier.view')}}" class="nav-link">Synthèse</a>
      </li>
    </ul>
   
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item mr-3">
      <a  href="{{route('logout')}}" > <i class="fa fa-power-off"></i>  Se deconnecter</a>
            <form action="{{route('logout')}}" id="logout-form" method="POST" style="display: none;">
                @csrf
            </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
