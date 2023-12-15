<!-- <?php

class Persona{
 public $nombre;
 public $apellido;
 private $correo;
 public $comentario;

 
 public function setCorreo($correoObtenido){

    $this->correo = $correoObtenido;

}

public function getCorreo(){

    return $this -> correo;

}


}

$nombreObtenido =  $_POST['nombre']."<br>";
$apellidoObtenido = $_POST['apellido']."<br>";
$comentarioObtenido =  $_POST['comentario']."<br>";
$correoObtenido =  $_POST['correo']."<br>";

// echo "<pre>";
// var_dump($_GET);
// echo "<pre>";

$persona1 = new Persona();

echo "Persona 1: <br>";

$persona1 -> nombre = $nombreObtenido;
echo $persona1-> nombre;

$persona1 -> apellido = $apellidoObtenido;
echo $persona1-> apellido;

$persona1 -> comentario = $comentarioObtenido;
echo $persona1-> comentario;

$persona1 -> setCorreo($correoObtenido);
echo $persona1 -> getCorreo();






 
?> -->