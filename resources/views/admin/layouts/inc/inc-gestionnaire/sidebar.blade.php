  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style=" background-image: linear-gradient( #178fe6,#ffb3b3);">
    <!-- Brand Logo -->
    <a href="{{ route('home')}}" class="brand-link">
      <img class="left" alt="" src="{{asset('/logo.jpg')}}" height="70px" width="70px" />
      <span class="brand-text font-weight-light" style="font-size: 40px;"> Courriers</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block" style="color: #fff; font-size: 30px; " ><img classe="icon-admin" alt="" src="{{asset('/53176.png')}}" /><B>{{Auth::user()->name}}</B></a>
        </div>
      
      </div>
      <!-- class nav
                 nav-item
                nav-link
      !-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{route('gestionnaire.dashboard')}}" class="nav-link  ? active : '' ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de Bord
              </p>
            </a>
    
        <ul class="nav nav-treeview">
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="fas fa-envelope"></i>
              <p>
                Gestion des Courriers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('courrier.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous les Courriers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('gestionnaire.courrier.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Ajouter un Courriers </p>
                </a>
              </li>
        </ul>
        
        <ul class="nav nav-treeview">
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="fas fa-envelope"></i>
              <p>
                Gestion des Synthèse
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('courrier.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous les Synthèses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('gestionnaire.courrier.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Ajouter une Synthèse </p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
