<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content=" Jairo Galeas">
  <link rel="icon" href="../../../../favicon.ico">
  <title>Lista del Personal</title>
  <!-- Bootstrap core CSS -->
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!--Cosas enlaces-->
  <link rel="stylesheet" href="../CSS/index.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a45e4463fd.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Explora&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
</head>

<body>
  <div class="login">
    <nav class="nav">
      <img class="log" src="../IMG/logoooo.png" alt="">
      <div class="logo">BEAUTE</div>
      <ul class="menu">
        <li><a href="perfil_administrador.html">Regresar</a></li>
        <li><a href="iniciarsesionAdmin.html">Configuracion</a></li>
        <li><a href="iniciarsesionAdmin.html">Cerrar sesion</a></li>
      </ul>
    </nav>
    <div class="contenedor head">
      <h1 class="titulo">Un buen perfume te hace sentir presente, aunque estes ausente.</h1>
    </div>
  </div>
  <main id="centra"><br><br><br><br><br>
    <div class="container">
      <h1 class="page-header text-center">Lista del aromas</h1>
      <div class="row">
        <a href="agregar_aromas1.html" id="ad" class="btn btn-primary" data-toggle="modal"><span
            class="fa fa-plus"></span> Nuevo</a>
        <form action="#">
          <select name="tipsProveedor" id="tiposProv">
            <option value="1">Aromas</option>
            <option value="2">Envases</option>
          </select>
        </form>
        <table class="table table-bordered table-striped" id="MiAgenda">
          <thead>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>CATEGORIA</th>
            <th>DESCRIPCION</th>
            <th>PROVEEDOR</th>
            <th>ACCIONES</th>
          </thead>
          <?php
          include("proveedores.php");
          $prov = new proveedores();
          $prov->conectarBD();
          $prov->lista();
          $prov->Cerrarconexion();
          ?>
        </table>
        
        
      </div>

    </div>

    </div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
  </main><br><br><br>
  <footer id="contacto">
    <div class="contenedor footer-content">
      <div class="contact-us">
        <h1 class="nombre">BEUTE</h1>
        <small class="">&copy; Derechos Reservados 2023</small> <br> <br>
      </div>
      <div class="line"></div>
      <div class="derechos">
        <a class="registro1" href="#">Inicio</a>
        <a class="registro1" href="#">Registate</a>
        <a class="registro1" href="#">Productos</a>
        <a class="registro1" href="#">Comicate con nosotros</a>
        <a class="registro1" href="#">Avisos Legales</a>
        <a class="registro1" href="">Telefono: +52 5568720012</a>
      </div>
  </footer>
  <script src="../JS/barra.js"></script>
  <script src="../JS/menu.js"></script>
  <script src="../S/lightbox.js"></script>
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>