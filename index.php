<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud para registrar personas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
   <link rel="icon" type="image/png" href="https://tse2.mm.bing.net/th/id/OIP.pCtuPRb9pMd04k4OnamQaAHaHa?w=512&h=512&rs=1&pid=ImgDetMain&o=7&rm=3">

</head>

<body>

  <style>
    body {
      background-color: #343939ff;
    }
  </style>
  <h1 class="text-center p-3 bg-dark text-white">CRUD DE REGISTROS</h1>

  <div class="container-fluid row"></div>
  <form class="col-4 p-3" method="POST" action="">
    <h3 class="text-center text-white">Registros para alquilar cine</h3>

    <?php
    include "modelo/conexion-pdo.php";
    include "controlador/registro_personal.php";

    ?>
    <div class="contenedor">
      <label for="cantidad_de_alarmas" class="form-label text-white">Cantidad de Alarmas</label>
      <input type="number" class="form-control" name="cantidad_de_alarmas" id="cantidad_de_alarmas">
    </div>

    <div class="contenedor">
      <label for="cantidad_de_lamparas" class="form-label text-white">Cantidad de lamparas</label>
      <input type="number" class="form-control" name="cantidad_de_lamparas" id="cantidad_de_lamparas">
    </div>

    <div class="contenedor">
      <label for="cantidad_de_sillones" class="form-label text-white">Cantidad de sillones</label>
      <input type="number" class="form-control" name="cantidad_de_sillones" id="cantidad_de_sillones">
    </div>

    <div class="contenedor">
      <label for="ingresar_tipo_de_sostenedores" class="form-label text-white">Ingrese los sostenedores</label>
      <input type="text" class="form-control" name="sostenedores" id="ingresar_tipo_de_sostenedores">
    </div>

    <div class="contenedor">
      <label for="tipo_de_tv" class="form-label text-white">Tipo de television</label>
      <input type="text" class="form-control" name="TV" id="tipo_de_tv">
    </div>

    <button type="submit" class="btn btn-dark text-white" style="font-size: 20px;" name="btn-registrar">Ingresar
      datos</button>
  </form>



  <div class="col-8 p-4">
    <table class="encabezado-info text-center table table-striped table-bordered"
      style="margin-left: 630px; margin-top: -450px;">
      <thead class="bg-info text-dark">
        <tr>
          <th scope="col" class="bg-danger">Id</th>
          <th scope="col" class="bg-success">Cant. Alarmas</th>
          <th scope="col" class="bg-warning">Cant. Lamparas</th>
          <th scope="col" class="bg-light">Cant. Sillones </th>
          <th scope="col" class="bg-primary">TP sostenedor</th>
          <th scope="col" class="bg-info">Mark TV</th>
          <th scope="col">Modificar</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include("modelo/conexion-pdo.php");
        $pdo = $conexion->query("SELECT * FROM cine");
        while ($datos = $pdo->fetch(PDO::FETCH_OBJ)) { ?>
          <tr>
            <th scope="row" class="bg-danger"><?= $datos->idcine ?></th>
            <td class="bg-success"><?= $datos->Alarmas ?></td>
            <td class="bg-warning"><?= $datos->lamparas ?></td>
            <td class="bg-light"><?= $datos->sillones ?></td>
            <td class="bg-primary"><?= $datos->sostenedores ?></td>
            <td class="bg-info"><?= $datos->TV ?></td>
            <td>
              <a href="http://localhost/hola/modificar_producto.php?id=<?= $datos->idcine ?>"
                class="btn btn-small btn-warning">Editar</a>

              <a href="controlador/eliminar_registro.php?id=<?= $datos->idcine ?>"
                class="btn btn-small btn-danger">Eliminar</a>
            </td>
          </tr>
        <?php } ?>


      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</body>

</html>