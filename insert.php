<?php


require './conexion.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);


// echo "prueba insertar";

$nombreForm =  $_POST['nombre'];
$apellidoForm = $_POST['apellido'];
$correoForm =  $_POST['correo'];
$figuraForm =  $_POST['figura'];


$insertar = mysqli_query($conexion, "INSERT INTO invitados (id_invitados, nombre, apellido, mail, figura, fecha_alta) VALUES (NULL, '$nombreForm', '$apellidoForm', '$correoForm', ' $figuraForm', '2023-12-15')");

// if(!$insertar){
//     echo "No pude insertarlo en la base de datos";
// }else{
//     echo "Ha podido registrar/insertar sus datos";
// }

// header("Location: mostrar_datos_bd.php");

include 'mostrar_db.php';
?>