<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MAROC Météo-COURRIERS | Se Connecter</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="16x16" href="https://lh3.googleusercontent.com/proxy/Juj7i0u_cRzGf-AFHAOgciHJN4HBMbO57a7QpEvSHvO7OwuMjg89lk46czS7QlbMyK05s2rHP2ID5X879PRzn-4MMTaHoBUAiC_FR9M">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('admin/plugins/toastr/app.css')}}">

      <!--style !-->
  <style>
.hold-transition {
  background-image:url('http://www.cabinetbarond.fr/wp-content/uploads/2012/10/Light-Blue-Abstract-Wallpaper-Hd-Pictures-4-HD-Wallpapers.jpg') ;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  color: #636b6f;
  font-family: 'Itim', sans-serif;
  color: #fff;
  font-weight: 200;
  height: 100vh;
  margin: 0; 
}

</style>
     <!--style !-->
</head>

<body  class="hold-transition login-page">
  <div class="login-box">
  <div class="login-logo">
    <a href=""><b>COURRIER </b>MAROC-Météo</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Connectez-vous pour démarrer votre session</p>

      <form action="{{route('login')}}" method="post">
      @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
      
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-lg mb-2">Log in</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js+')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>

</body>
</html>
