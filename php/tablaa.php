<?php

include("admin.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARCHIVOS CON PHP Y MYSQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style/tablaadmin.css">


</head>

<body>
    <div class="container">
        <div class="row p-2">
            <div class="col-9">
              <h1 style="font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;">Registro Estudiantes</h1>
                <form action="admin.php" method="post" enctype="multipart/form-data">
                    <label for="Nombre">Nombre</label>
                    <input type="text" name="nombre"  class="form-control" required>
                    <label for="Nombre">apellidos</label>
                    <input type="text" name="clave"  class="form-control" required>
                    <label for="Nombre">Curso</label>
                    <input type="text" name="curso"  class="form-control" required>
                    <label for="Nombre">Numero De Ficha</label>
                    <input type="text" name="Nficha" id="nombre" class="form-control" required>
                    <label for="archivo">Sube un archivo</label>
                    <input type="file" name="file" class="form-control" required>
                    <button name="registro" class="btn btn-primary mt-2">Guardar</button>
                </form>
            </div>
        </div>
    </div>



    <main class="table">
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
               <a class="btn btn-info" href="../php/eliminar.php?id= <?php echo $mostra['id'];?>"><img src="../img/delete.png"> </a>
               <a class="btn btn-info" href="../php/eliminar.php?id= <?php echo $mostra['id'];?>">Actualizar</a>


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