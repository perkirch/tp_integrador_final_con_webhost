<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./estilo_conexion_final.css">
  <title>Datos BD</title>
</head>

<body>

  <?php
  function mostrarDb($conexion)
  {
    $consulta = mysqli_query($conexion, "SELECT * FROM invitados");

    echo '<table class="table">
            <thead>
              <tr>
                <th scope="col">id_invitados</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Mail</th>
                <th scope="col">Figura</th>
                <th scope="col">fecha_alta</th>
              </tr>
            </thead>
            <tbody>';

    while ($listado = mysqli_fetch_array($consulta)) {
      echo "<tr>";
      echo "<th scope='row'>" . $listado["id_invitados"] . "</th>";
      echo "<td>" . $listado['nombre'] . "</td>";
      echo "<td>" . $listado['apellido'] . "</td>";
      echo "<td>" . $listado['mail'] . "</td>";
      echo "<td>" . $listado['figura'] . "</td>";
      echo "<td>" . $listado['fecha_alta'] . "</td>";
      echo "<td><a href='editar.php?id=" . $listado["id_invitados"] . "' class='btn btn-success'>Editar</a></td>";
      echo "<td><a href='delete.php?id=" . $listado["id_invitados"] . "' class='btn btn-danger'>Eliminar</a></td>";
      echo "</tr>";
    }

    echo '</tbody>
          </table>';
  }

  require './conexion.php';
  mostrarDb($conexion);
  ?>

  <a href="./index.php" style="text-decoration:none">Regresar</a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
