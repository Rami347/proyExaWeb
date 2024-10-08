<?php

include ("conexion/conexion.php");
include("bloqueo.php"); 
// Desactivar la visualización de errores
ini_set('display_errors', 0);
error_reporting(0);
//include("destroy.php");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      
      <title>VENTAS</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- vuerpo -->
   <body class="main-layout position_head">
      <!-- cargador -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      
     <!-- encabezado -->
      <header>
         <!-- encabezado interno -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="principal.php"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <?php
                			session_start(); // Asegúrate de tener esto al inicio
							   if (isset($_SESSION['cli'])) {
							   	echo "<h1 class='display-4 fw-bolder'>".$_SESSION['cli']."</h1>";
							   } else {
							   	echo "<h1 class='display-4 fw-bolder'>No hay cliente registrado</h1>";
							   }
                		?>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
 
      <!-- Nuestra sección de Glasses -->
      <div class="glasses">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>La Suprema</h2>
                     <p>Suprema es una empresa de alimentos que produce harina, fideos, galletas y avena, 
                        destacándose por su calidad y oferta de productos esenciales para la alimentación diaria.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass1.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>30</h3>
                     <p>400 gr</p>
                     <p>Tornillo</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/fideos3.jpg" alt="#"/></figure>
                     <h3><span class="blu">$</span>30</h3>
                     <p>400 gr</p>
                     <p>Codo Mediano</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass3.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>20</h3>
                     <p>400 gr</p>
                     <p>Harina</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass4.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>25</h3>
                     <p>1 Kg</p>
                     <p>Harina</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass5.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>30</h3>
                     <p>2 Kg</p>
                     <p>Harina</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass6.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>10</h3>
                     <p>40 gr</p>
                     <p>Galletas Wafs</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass7.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>18</h3>
                     <p>30 gr</p>
                     <p>Queque Marmolado</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass8.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>20</h3>
                     <p>400 gr</p>
                     <p>Avena con Chia</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <!-- pie de pagina -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br>Ubicación</li>
                        <li><a href="Formulario Personal/index2.html" target="_blank"><i class="fa fa-briefcase" aria-hidden="true"></i></a><br> Portafolio</li>
                        <li><a href="https://www.facebook.com/friends?locale=es_LA" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a><br> Facebook</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2024 Todos los derechos reservados. Diseño por<a href="https://html.design/"> Ram Pat Quen</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      
      <!-- Archivos Javascript-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- barra lateral -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

