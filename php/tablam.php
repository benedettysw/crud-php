<?php

include("conexion.php");

?>
<!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tabla Castigo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="tabla.css">
</head>

<body style="background: black;">

  <main class="table">
    <section class="table__header">
      <h1>Aprendices Williams</h1>
      <div class="input-group">
        <input type="search" placeholder="buscar datos">
        <img src="images/search.png" alt="">
      </div>
    </section>
    <section class="table__body">
      <table>
        <thead>
          <tr>
            <th> id <span class="icon-arrow"></span></th>
            <th> Nombre <span class="icon-arrow"></span></th>
            <th> Apellido <span class="icon-arrow"></span></th>
            <th> curso <span class="icon-arrow"></span></th>
            <th> Nficha <span class="icon-arrow"></span></th>
            <th> Opciones <span class="icon-arrow"></span></th>





          </tr>
        </thead>
        <tbody>

          <?php
          $sql = " Select * from getfiles";
          $resul = mysqli_query($enlace, $sql);

          while ($mostra = mysqli_fetch_array($resul)) {
            ?>

            <tr>
              <td>
                <?php echo $mostra['id'] ?>
              </td>
              <td>
                <img src="data:image/jpg;base64,<?= base64_encode($mostra['foto']) ?>" alt="">
                <?php echo $mostra['usuario'] ?>
              </td>
              <td>
                <?php echo $mostra['clave'] ?>
              </td>
              <td>
                <?php echo $mostra['curso'] ?>
              </td>
              <td>
                <?php echo $mostra['Nficha'] ?>
              </td>
              <td>
                <button class="btn btn-danger">eliminar</button>
                <button class="btn btn-info">Actualizar</button>

              </td>
            </tr>
            <?php
          }
          ?>

        </tbody>
      </table>
    </section>
  </main>
</body>

</html>