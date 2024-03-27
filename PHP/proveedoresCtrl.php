
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a45e4463fd.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Explora&display=swap" rel="stylesheet">
    <link rel="icon" href="../IMG/logo.png">
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Beaute Oficial.</title>
</head>
<body>
    <div class="red">
        <div id="facebook"><a href="#" target="none" class="fa-brands fa-facebook-f"></a></div>
        <div id="instagram"><a href="#" target="none" class="fa-brands fa-instagram"></a></div>
        <div id="whatsapp"><a href="#" target="none" class="fa-brands fa-whatsapp"></a></div>
        <div id="correo"><a href="#" target="none" class="fa-regular fa-envelope"></a></div>
    </div>
    <div class="login">
        <nav class="nav">
            <img class="log" src="../IMG/logoooo.png" alt="">
            <div class="logo">BEAUTE</div>
                <ul class="menu">
                    <li><a href="admin_aromas.html">Regresar</a></li>
                    <li><a href="iniciarsesionAdmin.html">Configuracion</a></li>
                    <li><a href="iniciarsesionAdmin.html">Cerrar sesion</a></li>
                </ul>
        </nav>
        <div class="contenedor head"><br>
            <h1 class="titulo">Un buen perfume te hace sentir presente, aunque estes ausente.</h1>
        </div>
    </div>
    <main> <br><br><br>
        
<?php
         include("proveedores.php");
         $prov= new proveedores();
         $prov->conectarBD();
         
            switch($_REQUEST['opcion']){
                case 1:
                    $prov->Inicializar($_REQUEST['nombre'],$_REQUEST['categoria'],$_REQUEST['descripcion'],$_REQUEST['proveedor']);
                    $prov->AgregarAromas();
                    break;
                case 2:
                    $prov->BorrarAromas($_REQUEST['ide']);
                    break;
                case 3:
                    $prov->modificarProveedor($_REQUEST['id1']);
                    break;
                    case 4:
                        $prov->modificarProve2($_REQUEST['ID'],$_REQUEST['nombreA'],$_REQUEST['categoriaA'],$_REQUEST['descripcionA'],$_REQUEST['provedorA']);
                    break;
            }

          $prov->Cerrarconexion();
         ?>  
    </main><br><br><br><br>
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
    <script src="../JS/lightbox.js"></script>
    <script src="../JS/menu.js"></script>
</body>
</html>