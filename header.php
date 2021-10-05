<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Encuellados</title>
  <link  rel="icon"   href="imagenes/favicon.png" type="image/png" />
<link  rel="icon"   href="images/icono/icono.ico" type="image/png" />
  <link rel="stylesheet" href="assets/helpers/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <!-- Link Swiper's CSS -->
  <link
  rel="stylesheet"
  href="https://unpkg.com/swiper/swiper-bundle.min.css"
/>
  <link rel="stylesheet" href="assets/css/master.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light navegador">
    <div class="container-fluid">
      <a class="navbar-brand logo"  href="#"><img  src="images/logo/LOGO3.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto text-center">
          <li class="nav-item">
            <a class="nav-link active"  aria-current="page" href="index.php">Home</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="productos.php">Productos</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#Contacto">Contactanos</a>
          </li> 
        </ul>
        <div>
        <a href="LoginAdmin.php"><Button class="btn btn-success">ingresar</Button></a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Floating Whatsapp ==================================================-->
  <div class="floating-insta">
    <a class="floating-image" href="https://www.instagram.com/encuellados/?hl=es" target="_blank">
      <img src="images/redes/instagram.png" alt="" title="" />
    </a>       
  </div>
  <div class="floating-whatsapp">
    <a class="floating-image" href="https://wa.me/+57" target="_blank">
      <img src="https://abcwsecureserver.net/ananda-wp/wp-content/uploads/2021/05/whats.svg" alt="" title="whats" />
    </a>       
  </div>

  <!--conexion-->
  <?php include 'conexion/Conexion.php';?>
  

  
  