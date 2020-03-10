
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php 
        
		#MANTENER LA RUTA FIJA DEL PROYECTO
        $url = Ruta::ctrRuta();


        #Establecer el titulo para cada página
        $ruta = null; 
        $rutas = array(); 
        if(isset($_GET['ruta'])) {

            $rutas = explode('/', $_GET['ruta']); 
            $ruta = $rutas[0];

            if($rutas[0] == 'nosotros') {
                $ruta = 'Nosotros'; 
            }elseif($rutas[0] == 'productos') {
                $ruta = 'Productos';
            }elseif($rutas[0] == 'contacto') {
                $ruta = 'Contacto';
            }else {
                $ruta = 'Inicio';
            }

        }else {
            $ruta = 'Inicio'; 
        }
    
    ?>

    <title>Savo - <?php echo $ruta; ?> </title>

    <!--=====================================
	Marcado HTML5
	======================================-->

	<meta name="title" content="<?php echo $ruta; ?>">

    <meta name="description" content="Savo Rental es un sistema de renta y alquiler de carros con sede en Maimi, Florida y Maracay, Aragua">

    <meta name="keyword" content="Carros Alquiler Sistema software Savo Renal Renta Autos">


    <!--=====================================
    Marcado de Open Graph FACEBOOK
    ======================================-->

    <meta property="og:title"   content="<?php echo $ruta; ?>">
    <meta property="og:url" content="<?php echo $url.$rutas[0];?>">
    <meta property="og:description" content="Savo Rental es un sistema de renta y alquiler de carros con sede en Maimi, Florida y Maracay, Aragua">
    <meta property="og:image"  content="<?php echo $url?>vistas/img/icon-s.png">
    <meta property="og:type"  content="website">	
    <meta property="og:site_name" content="<?php echo $url?>vistas/img/icon-s.png">
    <meta property="og:locale" content="es_VE">

    <!--=====================================
    Marcado para DATOS ESTRUCTURADOS GOOGLE
    ======================================-->

    <meta itemprop="name" content="<?php echo $ruta; ?>">
    <meta itemprop="url" content="<?php echo $url.$rutas[0];?>">
    <meta itemprop="description" content="Savo Rental es un sistema de renta y alquiler de carros con sede en Maimi, Florida y Maracay, Aragua">
    <meta itemprop="image" content="<?php echo $url?>vistas/img/icon-s.png">

    <!--=====================================
    Marcado de TWITTER
    ======================================-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo $ruta; ?>">
    <meta name="twitter:url" content="<?php echo $url.$rutas[0];?>">
    <meta name="twitter:description" content="Savo Rental es un sistema de renta y alquiler de carros con sede en Maimi, Florida y Maracay, Aragua">
    <meta name="twitter:image" content="<?php echo $url?>vistas/img/icon-s.png">
    <meta name="twitter:site" content="@savorental">


    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/bootstrap-grid.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/custom.css">
    <link rel="shortcut icon" href="<?php echo $url; ?>vistas/img/icon-s.png" type="image/png">

    <script src="<?php echo $url; ?>vistas/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo $url; ?>vistas/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light header-nav">
       
        <!-- Just an image -->
        <nav class="navbar navbar-light ">
            <a class="navbar-brand" href="#">
                <img src="vistas/img/logo.png" width="85" height="30" alt="">
            </a>
        </nav>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-center <?php echo $ruta == 'Inicio' ? 'color-savo':''; ?>" href="inicio">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-center <?php echo $ruta == 'Nosotros' ? 'color-savo':''; ?>" href="nosotros">Nosotros<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-center <?php echo $ruta == 'Productos' ? 'color-savo':''; ?>" href="productos">Productos<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link text-center <?php echo $ruta == 'Contacto' ? 'color-savo':''; ?>" href="contacto">Contacto<span class="sr-only">(current)</span></a>
            </li>

          </ul>
          <form class="form-inline my-2 my-lg-0">
          
            <button class="btn my-2 my-sm-0 color-savo mx-auto" type="button"> <i class="fab fa-twitter"></i> </button>
            <button class="btn my-2 my-sm-0 color-savo mx-auto" type="button"> <i class="fab fa-instagram"></i> </button>
            <button class="btn my-2 my-sm-0 color-savo mx-auto" type="button"> <i class="fab fa-whatsapp"></i> </button>
            <button class="btn my-2 my-sm-0 color-savo mx-auto" type="button"> <a href="contacto"><i class="far fa-envelope"></i></a>  </button>
          </form>
        </div>
      </nav>

      <?php  
        
        #Establecer las rutas blancas para cada página
        // var_dump($url); 
        

        if(isset($_GET['ruta'])) {

            if($rutas[0] == 'inicio') {
                include 'modulos/inicio.php'; 
            }elseif($rutas[0] == 'nosotros') {
                include 'modulos/nosotros.php';
            }elseif($rutas[0] == 'productos') {
                include 'modulos/productos.php';
            }elseif($rutas[0] == 'contacto') {
                include 'modulos/contacto.php';
            }else {
                include 'modulos/inicio.php';
            }
                
        }else {
            include 'modulos/inicio.php'; 
        }

    
        
      ?>

      <script src="<?php echo $url; ?>vistas/js/custom.js"></script>
      <script src="<?php echo $url; ?>vistas/js/validar.js"></script>

      <!-- Start of HubSpot Embed Code --> 
      <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7050666.js"></script> 
      <!-- End of HubSpot Embed Code -->
</body>
</html>