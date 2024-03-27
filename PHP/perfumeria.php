<?php

    class Perfumes{

        private $nombre;
        private $apellidos;
        private $rfc;
        private $sexo;
        private $numeroTelefono;
        private $calle;
        private $lote;
        private $colonia;
        private $municipio;
        private $codigopostal;
        private $correo;
        private $contrasena;
        private $contrasenaConf;

        public function inicializar($nombre,$apellidos,$rfc,$sexo,$numeroTelefono,$calle,$lote,$colonia,$municipio,$codigopostal,$correo,$contrasena,$contrasenaConf){
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->rfc = $rfc;
            $this->sexo = $sexo;
            $this->numeroTelefono = $numeroTelefono;
            $this->calle = $calle;
            $this->lote = $lote;
            $this->colonia = $colonia;
            $this->municipio = $municipio;
            $this->codigopostal = $codigopostal;
            $this->correo = $correo;
            $this->contrasena = $contrasena;
            $this->contrasenaConf = $contrasenaConf;
        }
        public function conectarBD(){
            $con=mysqli_connect("localhost","root","","perfumeria") or die
            ("Problemas con la conexion a la base de datos");
            return $con;
        }
        public function registrarse(){
            mysqli_query($this->conectarBD(),"INSERT INTO registro(nombre,apellidos,rfc,sexo,numeroTelefono
                                            ,calle,lote,colonia,municipio,codigopostal,correo,contrasena
                                            ,contrasenaConf)
                                            VALUES('".$this->nombre."','".$this->apellidos."','".$this->rfc."','.$this->sexo.',".$this->numeroTelefono.",'".$this->calle."'
                                            ,".$this->lote.",'".$this->colonia."','".$this->municipio."',".$this->codigopostal.",'".$this->correo."','".$this->contrasena."'
                                            ,'".$this->contrasenaConf."')")
                or die ("Problemas en el insert".mysqli_error($this->conectarBD()));
            
                /*Direccionar el donde se requiera*/
                header('location:/PHP/Perfumeria-Beaute/index.html');

        }
        /*public function comentariosUsuario(){
            $comentar=mysqli_query($this->conectarBD(),"INSERT INTO comentarios (nombre,mail,comentario)
            values ('".$this -> nombre."', '".$this -> mail."', '".$this -> comentario."')") 
            or die("Problemas en el insert".mysqli_error($this->conectarBD()));
            echo"Se envio sus comentarios";                /*
                <?php 
                header('Location: /tutoriales/category/20-desarrollo/'); 
                ?>
                 * /
        }*/
        public function cerrarBD(){
            mysqli_close($this->conectarBD());
        }
    }
?>