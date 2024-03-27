<?php
    include "perfumeria.php";
    $usuario = new Perfumes;
    $usuario -> inicializar($_REQUEST['nombre'],$_REQUEST['apellidos'],$_REQUEST['rfc'],$_REQUEST['sexo']
                            ,$_REQUEST['numeroTelefono'],$_REQUEST['calle'],$_REQUEST['lote'],$_REQUEST['colonia']
                            ,$_REQUEST['municipio'],$_REQUEST['codigopostal'],$_REQUEST['correo'],$_REQUEST['contrasena']
                            ,$_REQUEST['contrasenaConf']);
    $usuario -> conectarBD();
    $usuario -> registrarse();
    $usuario -> cerrarBD();
?>