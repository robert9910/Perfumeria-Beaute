<?php
class proveedores{
    private $nombre;
    private $categoria;
    private $descripcion;
    private $proveedor;
    public function Inicializar($nombre,$categoria,$descripcion,$proveedor){
        $this->nombre=$nombre;
        $this->categoria=$categoria;
        $this->descripcion=$descripcion;
        $this->proveedor=$proveedor;
    }
    public function conectarBD()
    {
        $con = mysqli_connect("localhost", "root", "", "perfumeria") or die("PROBLEMAS A LA BASE DE DATOS");
        return $con;
    }

    public function AgregarAromas(){
        $registro = mysqli_query($this->conectarBD(), "SELECT *
        FROM provedoraromas where descripcion='$this->descripcion'")or die(mysqli_error($this->conectarBD()));
      
      if ($reg = mysqli_fetch_array($registro)) {
            echo '<script>alert("YA EXISTE ESTA DESCRIPCIÓN");</script>';
        } else {

            mysqli_query($this->conectarBD(), "INSERT INTO provedoraromas (nombre, categoria, descripcion, proveedor)
             Values ('$this->nombre', '$this->categoria', '$this->descripcion','$this->proveedor')") or die
                ("Problemas con el insert" . mysqli_error($this->conectarBD()));
            echo '<script>alert("EL NUEVO PROVEEDOR SE AGREGADO EXITOSAMENTE");</script>';
           
        }

    }
    public function BorrarAromas($ide){

        $registro = mysqli_query($this->conectarBD(),"SELECT  *  FROM provedoraromas WHERE 
                                        ID='$ide'") or die (mysqli_error($this->conectarBD()));

        if($reg=mysqli_fetch_array($registro)){
           mysqli_query($this->conectarBD(), "DELETE from provedoraromas where ID = '$ide'") or
            die (mysqli_error($this->conectarBD()));
        
            echo '<script>alert("SE ELIMINO EL PROVEEDOR ");</script>';
        }
        else{
            echo '<script>alert("NO EXISTE NINGUN PROVEEDOR CON ESE CODIGO ");</script>';
            
        }
        
    } 
    public function lista(){
        $registros=mysqli_query($this->conectarBD(),"SELECT * FROM provedoraromas") or
        die(mysqli_error($this->conectarBD()));

        
        while ($reg=mysqli_fetch_array($registros)){
          echo '<tbody><td>'.$reg['ID'].'</td>';
          echo '<td>'.$reg['nombre'].'</td>';
          switch ($reg['categoria']) {
            case 1:echo '<td>'."BEBE".'</td>';  break;
            case 2:echo '<td>'."CABALLERO".'</td>';  break;
            case 3:echo '<td>'."DAMA".'</td>';    break;
            case 4:echo '<td>'."NIÑO".'</td>';    break;
            case 5:echo '<td>'."MASCOTA".'</td>';    break;
            case 6:echo '<td>'."UNISEX".'</td>';    break;
           }
          echo '<td>'.$reg['descripcion'].'</td>';	 
          echo '<td>'.$reg['proveedor'].'</td>';
          echo '<td> <a href="modificarAromas1.html" class="btn btn-success btn-sm"><span class="fa fa-edit"></span> Editar</a>
          <a href="eliminar_aromas1.html" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Eliminar</a> </td>';
      
        }

     echo' </tbody>';
    }
   
    public function modificarProveedor($id1){
        $validar = mysqli_query($this->conectarBD(), "SELECT * FROM provedoraromas where ID = $id1") or 
        die("Problemas con el buscar".mysqli_error($this->conectarBD()));

    if($reg = mysqli_fetch_array($validar)){
        
        echo "<form action='proveedoresCtrl.php' class='form-registro' method = 'post'>
        <div class='wrapper'>
            <div class='title'>
              Editar Aroma
            </div>
            <div class='form'>
               <div class='inputfield'>
                  <label>ID</label>
                  <input type='number' class='input' name='ID'  value =".$reg[0]." readonly>
               </div>
               <div class='inputfield'>
                <label>Nombre</label>
                <input type='text' class='input' name='nombreA' value =".$reg[1].">
             </div>  
                <div class='inputfield'>
                  <label>Categoria</label>
                  <select name='categoriaA' class='input' >
                    <option value='1'>BEBE</option>
                    <option value='2'>CABALLERO</option>
                    <option value='3'>DAMA</option>
                    <option value='4'>NIÑO</option>
                    <option value='5'>MASCOTA</option>
                    <option value='6'>UNISEX</option>
                  </select>
               </div>
               <div class='inputfield'>
                <label>Descripción</label>
                <input type='text' class='input' name='descripcionA' value =".$reg[3].">
             </div>  
              <div class='inputfield'>
                  <label>Proveedor</label>
                  <input type='text' class='input' name='provedorA' value =".$reg[4].">
                  
               </div> 
            <div class='modal-footer'>
                <button type='button' class='btn btn-default'><span class='fa-solid fa-xmark'></span>
            Cancelar</button>
            <button type='submit' class='btn btn-primary'><span class='fa-solid fa-floppy-disk'></span>
            Guardar</button>
            </div>
        </div>	
        <input type = 'hidden' name = 'opcion' value = '4' >
        </form>";
       
    }else{
        echo '<script>alert("EL PROVEEDOR NO EXISTE");</script>';
    }
           
    }

    public function modificarProve2( $ID,$nombreA, $categoriaA,$descripcionA,$provedorA){
        $validar = mysqli_query($this->conectarBD(), "SELECT * FROM provedoraromas where descripcion= '$descripcionA'")or 
                  die("Problemas en la sentencia o buscar".mysqli_error($this->conectarBD()));
            
                  if($reg = mysqli_fetch_array($validar)){
                    echo "YA EXISTE ESTe ID";
                  }else{
                    $registro = mysqli_query($this->conectarBD(), "UPDATE provedoraromas SET  nombre ='$nombreA', categoria ='$categoriaA',
                    descripcion = '$descripcionA', proveedor='$provedorA' where ID = $ID")or die("Error en la sentencia".mysqli_error($this->conectarBD()));
                    echo '<script>alert("EL PROVEEDOR SE HA MODIFICADO");</script>';
                  }
    }
    public function Cerrarconexion()
    {
        mysqli_close($this->conectarBD());
    }
  
    }
    
    
?>