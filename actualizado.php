<?php
require './conexion.php';


if(isset($_POST['indexado'])){
    $idAEditar=$_POST['indexado'];
}

if(isset($idAEditar)){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $mail = $_POST['mail'];
    $figura = $_POST['figura'];
    $fecha = $_POST['fecha'];
}else{
    echo "No existe";
}

$actualizar = mysqli_query($conexion, "UPDATE invitados SET nombre='$nombre', apellido='$apellido', mail='$mail', figura='$figura', fecha_alta='$fecha' WHERE invitados . id_invitados='$idAEditar'" );

require './mostrar_db.php';





?>