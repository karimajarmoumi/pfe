<!doctype html>
<!-- str_replace () remplace certains caractères par d'autres caractères dans une chaîne !-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
        <!-- Bootrap !-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- CSS !-->
        <link rel="stylesheet" href="{{asset('admin/plugins/toastr/app.css')}}">
        <!-- Ajax !-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MAROC Météo-COURRIERS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- icon !-->
        
        <!-- icon !--> 

        <link rel="icon" type="image/png" sizes="16x16" href="https://lh3.googleusercontent.com/proxy/Juj7i0u_cRzGf-AFHAOgciHJN4HBMbO57a7QpEvSHvO7OwuMjg89lk46czS7QlbMyK05s2rHP2ID5X879PRzn-4MMTaHoBUAiC_FR9M">
      
        <!-- Styles -->
        <style>
            html, body {
                background-image: url('http://www.cabinetbarond.fr/wp-content/uploads/2012/10/Light-Blue-Abstract-Wallpaper-Hd-Pictures-4-HD-Wallpapers.jpg');
                color: #636b6f;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            } 
            .left { float:left; margin:20px  30px; }
            @import url(https://fonts.googleapis.com/css?family=Raleway:400,700,900,400italic,700italic,900italic);
       
            *,
:before,
:after {
    box-sizing: border-box;
}

body {
    background-color: #fdf9fd;
    color: #011a32;
    font: 16px/1.25 'Raleway', sans-serif;
    text-align: center;
}

#wrapper {
    margin-left: auto;
    margin-right: auto;
    max-width: 80em;
}

h1 {
    animation: text-shadow 1.5s ease-in-out infinite;
    font-size: 5em;
    font-weight: 900;
    line-height: 1;
}

h1:hover {
    animation-play-state: paused;
}

a {
    color: #fff;
}

a:hover {
    text-decoration: none;
}


@keyframes text-shadow {
    0% {  
        transform: translateY(0);
        text-shadow: 
            0 0 0 #0c2ffb, 
            0 0 0 #2cfcfd, 
            0 0 0 #fb203b, 
            0 0 0 #fefc4b;
    }

    20% {  
        transform: translateY(-1em);
        text-shadow: 
            0 0.125em 0 #0c2ffb, 
            0 0.25em 0 #2cfcfd, 
            0 -0.125em 0 #fb203b, 
            0 -0.25em 0 #fefc4b;
    }

    40% {  
        transform: translateY(0.5em);
        text-shadow: 
            0 -0.0625em 0 #0c2ffb, 
            0 -0.125em 0 #2cfcfd, 
            0 0.0625em 0 #fb203b, 
            0 0.125em 0 #fefc4b;
    }
    
   60% {
        transform: translateY(-0.25em);
        text-shadow: 
            0 0.03125em 0 #0c2ffb, 
            0 0.0625em 0 #2cfcfd, 
            0 -0.03125em 0 #fb203b, 
            0 -0.0625em 0 #fefc4b;
    }

    80% {  
        transform: translateY(0);
        text-shadow: 
            0 0 0 #0c2ffb, 
            0 0 0 #2cfcfd, 
            0 0 0 #fb203b, 
            0 0 0 #fefc4b;
    }
}

@media (prefers-reduced-motion: reduce) {
    * {
      animation: none !important;
      transition: none !important;
    }
}
        </style>
    </head>
    <body>
        <!-- Logo !-->
      <img class="left" alt="" src="data:image/jpeg;base64,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" height="70px" width="70px" />
        <!-- Logo !-->
      <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                   
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a type="button" href="{{ route('login') }}" class="btn btn-primary btn-lg mb-2"  >Login</a>
                      <!-- On a pas besoin de register !-->
                       <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary" ">Register</a>
                        @endif -->
                    @endauth
                </div>
            @endif
            
            <div id="wrapper">
    <div id="container">

        <h1>MAROC-Météo vous souhaite la bienvenue</h1>
      <p>Gérer vos Courrier.</p>
      

    </div>
</div></div>
           <!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">

<!-- Footer Elements -->
<div class="container">

  <!-- Call to action -->
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1" style="color: #fff;">Contacter Nous</h5>
    </li>
    <li class="list-inline-item">
      <a type="button" href="https://www.facebook.com/karima.jarmoumi.984" class="btn btn-outline-primary ">Facebook</a>
      <a type="button" href="https://www.linkedin.com/in/karima-jarmoumi-082b721a1/" class="btn btn-outline-success ">linkedin</a>
      <a type="button" href="https://twitter.com/KJarmoumi" class="btn btn-outline-danger">Twitter</a>
    </li>
  </ul>
  <!-- Call to action -->

</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3" style="color: #fff;">© 2021 Copyright:
  <a href="https://www.linkedin.com/in/karima-jarmoumi-082b721a1/"> JARMOUMI Karima-0656517621</a>
</div>
<!-- Copyright -->
</div>
</footer>
<!-- Footer -->

    </body>
</html>