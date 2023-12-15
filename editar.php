<?php

require './conexion.php';
require './mostrar_db.php';

// if (isset($_GET['id'])) {
//    "<p> " . $_GET['id'] . "</p>";
// }
 $idAEditar = $_GET['id'];

//"<p> " . $idAEditar . "</p>";

// $consulta_sql= "SELECT nombre, apellido, mail, figura, fecha_alta FROM oradores WHERE id_invitados=$_GET[id]";

$editar = mysqli_query($conexion, "SELECT id_invitados, nombre, apellido, mail, figura, fecha_alta FROM invitados WHERE id_invitados='$idAEditar'");

if ($editar==true) {
    // Obtener el resultado como un array asociativo
    $visualizar = mysqli_fetch_assoc($editar);
    
    $nombre = $visualizar['nombre'];
    $apellido = $visualizar['apellido'];
    $mail = $visualizar['mail'];
    $figura = $visualizar['figura'];
    $fecha = $visualizar['fecha_alta'];
};

?>

<form action="./actualizado.php" method="post" class="col-4 mt-4">
        <h3 class="text-center text-secondary p-2">Registro de personas</h3>

        <input type="text" name="indexado" value="<?php echo $idAEditar ?> "hidden>

        <div class="mb-3">
            <input type="text" class="form-control" name="nombre" value="<?php echo $nombre ?>"placeholder="Nombre" autofocus>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="apellido" value="<?php echo $apellido ?>"placeholder="Apellido" autofocus>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="mail" value="<?php echo $mail ?>" placeholder="Mail" autofocus>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="figura" value="<?php echo $figura ?>" placeholder="Figura" autofocus>
        </div>
        <div class="mb-3">
            <input type="date" class="form-control" name="fecha" value="<?php echo $fecha ?>" placeholder="Fecha" autofocus>
        </div>

        <div class="mb-3">
        <input type="submit" value="Enviar cambios" class="btn btn-success btn-block" name="btnRegistrar" ></input>
        <input type="button" value="Cancelar" class="btn btn-danger btn-block" style="margin-left: 10px;" onclick="window.location.href='./mostrar_datos_bd.php'">
        </div>
    </form>


<!-- if(isset($_GET['id'])){
echo "<p>Existe". $_GET['id'] . "</p>";
}

$idAEliminar = $_GET['id'];
echo "<p>" . $idAEliminar . "</p>";



if($eliminar===true){
echo "<br>";
echo "Me eliminó correctamente";
}

header("Location: mostrar_datos_bd.php");











?> -->