<html lang="en">
<title>Elecciones 2021</title>
<link href="../img/ve.png" rel="icon">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="../css/style.css" rel="stylesheet">
</head>

<body>
  <br><br><br>
  <center>
    <div class="card " style="width: 28rem;">
      <div class="card-header bg-dark text-white">
        <button class="mr-3 btn btn-danger btn-sm" onclick="location.href='select-data.php'">Elecciones 2021</button>

      </div>
      <form class="form-container" method="post" action="principal-usuario.php">
        <br>
        <?php
        include('sql/conexion.php');
        $query = 'SELECT * FROM gerencias;';
        $resulatdo = pg_query($query) or die("error ");
        $numReg = pg_num_rows($resulatdo);

        ?>


        <br>
        <select class="form-control form-control-sm" placeholder name="gerencia" required>
          <option selected>Seleccione la Gerencia



          </option>
          <?php
          while ($fila = pg_fetch_array($resulatdo)) {
            echo "<option values" . $fila['id'] . ">" . $fila['nombre'] . "</option>";
          }
          ?>
        </select>







        <br><input class="mr-3 btn btn-primary btn-sm" type="submit" name="" value="Consultar"><br><br><br>


      </form>


      <div class="card-footer bg-dark text-white">
        <button class="mr-3 btn btn-danger btn-sm" onclick="location.href='select-data.php'">
          VTV</button>
      </div>
    </div>




</body>

</html>