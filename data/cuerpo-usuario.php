<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <title>Elecciones 2021</title>


<body class="">


  <link href="../css/style.css" rel="stylesheet">

  </head>


  <center>
    <div class="card border-secondary mb-3" style="max-width: 100rem;">
      <div class="card-header card text-white bg-dark mb-3">



        <center><button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" onclick="location.href='principal-usuario.php'" style="max-width: 10rem;">
            <span aria-hidden="true" class="text-light">Data</span>
          </button>








      </div>
      <div class="card-body text-dark">
        <button type="button" title="Crear" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">&#x2795;</button>
        <table id="p" class="table active border- responsive" style="max-width: 82rem" ;>
          <thead>
            <tr class="bg-dark text-white">
              <h4>
                <td>Id</td>
                <center>
                  <td>Cedula</td>
                  <td>Codigo</td>
                  <td>Apellidos</td>
                  <td>Nombres</td>
                  <td>Nacionalidad</td>
                  <td>Gerencia</td>
                  <td>Division</td>
                  <td>Cargo</td>
                  <td>Local</td>
                  <td>Celular</td>
                  <td>Celular 2</td>
                  <td>Voto</td>
                  <td>Accion</td>
              </h4>
            </tr>
          </thead>
          <?php
          $gerencia = $_POST['gerencia'];






          $query = "SELECT cedula, codigo, apellidos, nombres, nacionalidad, gerencia, division, cargo, loca, celular, 
          celular_2, voto, id FROM datas  where gerencia='$gerencia'";








          $result = pg_query($query) or die('Query failed: ' . pg_last_error());
          while ($mostrar = pg_fetch_array($result)) {
            $id = $mostrar['id'];
            $usu = $mostrar['usuario'];
            $pass = $mostrar['pass'];
            $per = $mostrar['perfil'];
            $cor = $mostrar['correo'];
            $nom = $mostrar['nombre'];
            $ape = $mostrar['apellido'];
            $tel = $mostrar['telefono'];
            $ced = $mostrar['cedula'];
          ?>

            <tr>
              <td><?php echo $mostrar['id'] ?></td>
              <center>
                <center>
                  <td><?php echo $mostrar['cedula'] ?></td>
                  <center>
                    <center>
                      <td><?php echo $mostrar['codigo'] ?></td>
                      <center>
                        <center>
                          <td><?php echo $mostrar['apellidos'] ?></td>
                          <center>
                            <center>
                              <td><?php echo $mostrar['nombres'] ?></td>
                              <center>
                                <center>
                                  <td><?php echo $mostrar['nacionalidad'] ?></td>
                                  <center>
                                    <center>
                                      <td><?php echo $mostrar['gerencia'] ?></td>
                                      <center>
                                        <center>
                                          <td><?php echo $mostrar['division'] ?></td>
                                          <center>
                                            <center>
                                              <td><?php echo $mostrar['cargo'] ?></td>
                                              <center>
                                                <center>
                                                  <td><?php echo $mostrar['loca'] ?></td>
                                                  <center>
                                                    <center>
                                                      <td><?php echo $mostrar['celular'] ?></td>
                                                      <center>
                                                        <center>
                                                          <td><?php echo $mostrar['celular_2'] ?></td>
                                                          <center>
                                                            <center>
                                                              <td><?php echo $mostrar['voto'] ?></td>
                                                              <td>
                                                                <!--___________________________BOTON ELIMINAR_________________________________________________________________________-->





                                                                <!--__________________________________________________________________________________________________________________-->
                                                                <a href="#" data-target="#myModal" class="edit" data-toggle="modal" "
                     data-usu=" <?php echo $usu; ?>" data-pass="<?php echo $pass; ?>" data-per="<?php echo $per; ?>" data-cor="<?php echo $cor; ?>" data-nom="<?php echo $nom; ?>" data-ape="<?php echo $ape; ?>" data-tel="<?php echo $tel; ?>" data-ced="<?php echo $ced; ?>">

                                                                  <!--_____________________________________BOTON EDITAR_________________________________________________________________-->






                                                                  <a href="principal-editar.php?id=<?php echo $id; ?>">

                                                                    <button type='button' class='btn btn-info btn-sm' title="Editar"> &#x1f4dd; </button>



                                                                    <!--__________________________________________________________________________________________________________________-->
                                                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header btn btn-secondary">
                                                                            <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-info " data-dismiss="modal">
                                                                                <span aria-hidden="true">Editar Usuario</span>
                                                                              </button>
                                                                            </h5>
                                                                          </div>
                                                                          <div class="modal-body">
                                                                            <div class="card border mb-3" style="max-width: 50rem;">
                                                                              <div class="card-body text-secondary">
                                                                                <center>
                                                                                  <form method="post" action="sql/modificar-usuario.php">
                                                                                    Id<input class="input form-control" type="text" name="edit_id" readonly id="edit_id" placeholder="id" value="<?php echo $row['id'] ?>" required>
                                                                                    Usuario<input class="input form-control" type="text" name="edit_usu" id="edit_usu" placeholder="usuario" value="" required>
                                                                                    Contraseña<input class="input form-control" type="text" name="edit_pass" id="edit_pass" placeholder="pass" value="" required>
                                                                                    Perfil<input class="input form-control" type="text" name="edit_per" id="edit_per" placeholder="perfil" value="" required>
                                                                                    Correo<input class="input form-control" type="text" name="edit_cor" id="edit_cor" placeholder="correo" value="" required>
                                                                                    Nombre<br><input class="input form-control" type="text" name="edit_nom" id="edit_nom" placeholder="nombre" value="" required>
                                                                                    Apellido<input class="input form-control" type="text" name="edit_ape" id="edit_ape" placeholder="apellido" value="" required>
                                                                                    Telefono<input class="input form-control" type="text" name="edit_tel" id="edit_tel" placeholder="telefono" value="" required>
                                                                                    Cedula<input class="input form-control" type="text" name="edit_ced" id="edit_ced" placeholder="cedula" value="" required>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                          <div class="modal-footer btn btn-secondary">
                                                                            <input class="btn-submit btn btn-primary" type="submit" size="35" value="Modificar">
                                                                            <input class="btn-reset btn btn-success" type="reset" size="35" value="Limpiar">
                                                                            <button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">Cerrar</span>
                                                                            </button>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                    </div>
      </div>
    </div>

    </form>

    </td>
    <center>
      </tr>

    <?php
          }
    ?>

    <div class="modal fade " id="ex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  mb-3" role="document">
        <div class="modal-content">
          <!--___________________________________________________CABEZERA DEL MODAL______________________________________________________________
          __________________________-->


          <div class="modal-header btn btn-dark mb-3">
            <button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal">
              <span aria-hidden="true">Crear Empleado</span></button>
          </div>
          <div class="modal-body">
            <div class="card border mb-3" style="max-width: 50rem;">
              <div class="card-body text-dark">
                <center>
                  <form method="post" action="sql/crear-usuario.php">




                    Cedula<input class="form-control form-control-sm" type="text" name="cedula" id="usu" placeholder="" value="" required>
                    Codigo<input class="form-control form-control-sm" type="text" name="codigo" id="pass" placeholder="" value="" required>
                    Apellidos<input class="form-control form-control-sm" type="text" name="apellidos" id="pass" placeholder="" value="" required>
                    Nombres<input class="form-control form-control-sm" type="text" name="nombres" id="pass" placeholder="" value="" required>
                    Nacionalidad<select class="form-control form-control-sm" placeholder name="naci" required>

                      <option selected>V</option>
                      <option selected>E</option>
                      <option selected>Seleccione</option>

                    </select>










                    <?php
                    include('sql/conexion.php');
                    $query = 'SELECT * FROM gerencias;';
                    $resulatdo = pg_query($query) or die("error ");
                    $numReg = pg_num_rows($resulatdo);

                    ?>



                    Gerencia<select class="form-control form-control-sm" placeholder name="gerencia" required>
                      <option selected>Seleccione</option>
                      <?php
                      while ($fila = pg_fetch_array($resulatdo)) {
                        echo "<option values" . $fila['id'] . ">" . $fila['nombre'] . "</option>";
                      }
                      ?>
                    </select>
                    <?php
                    include('sql/conexion.php');
                    $query = 'SELECT * FROM divisiones;';
                    $resulatdo = pg_query($query) or die("error ");
                    $numReg = pg_num_rows($resulatdo);

                    ?>



                    Division<select class="form-control form-control-sm" placeholder name="division" required>
                      <option selected>Seleccione</option>
                      <?php
                      while ($fila = pg_fetch_array($resulatdo)) {
                        echo "<option values" . $fila['id'] . ">" . $fila['nombre'] . "</option>";
                      }
                      ?>
                    </select>

                    <?php
                    include('sql/conexion.php');
                    $query = 'SELECT * FROM cargos;';
                    $resulatdo = pg_query($query) or die("error ");
                    $numReg = pg_num_rows($resulatdo);

                    ?>



                    Cargos<select class="form-control form-control-sm" placeholder name="cargo" required>
                      <option selected>Seleccione</option>
                      <?php
                      while ($fila = pg_fetch_array($resulatdo)) {
                        echo "<option values" . $fila['id'] . ">" . $fila['nombre'] . "</option>";
                      }
                      ?>
                    </select>









                    Local<input class="form-control form-control-sm" type="tel" name="loca" id="pass" placeholder="" value="" required>
                    Celular<input class="form-control form-control-sm" type="tel" name="celular" id="pass" placeholder="" value="" required>
                    Celular2<input class="form-control form-control-sm" type="tel" name="celular2" id="pass" placeholder="" value="" required>

                    Voto<select class="form-control form-control-sm" placeholder name="voto" required>

                      <option selected>SI</option>
                      <option selected>NO</option>
                      <option selected>Seleccione</option>

                    </select>















              </div>
            </div>
          </div>
          <div class="modal-footer btn btn-dark">
            <input class="btn-submit btn btn-primary btn-sm" type="submit" size="35" value="Crear">
            <input class="btn-reset btn btn-success btn-sm" type="reset" size="35" value="Limpiar">
            <button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">Cerrar</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    </form>

    </table>
    <?php
    $total = "";


    ?>

    <?php
    $sql = "SELECT * from datas where 'SI'=voto";
    $result = pg_query($sql);
    $numero = pg_num_rows($result);

    ?>
    <?php
    $sql = "SELECT * from datas where 'NO'=voto";
    $result = pg_query($sql);
    $numero1 = pg_num_rows($result);

    ?>










    <a href="reporte/total-si.php" title="Stock de Comidas" target="_blank">
      <button type="button" class="btn-close btn btn-primary btn-sm" data-dismiss="modal" style="max-width: 10rem;">
        <span aria-hidden="true" class="text-light">SI VOTARON = <?php
                                                                  echo "$numero";
                                                                  ?></span>
      </button> </a>
    <a href="reporte/total-no.php" title="Stock de Comidas" target="_blank">
      <button type="button" class="btn-close btn btn-primary btn-sm" data-dismiss="modal" style="max-width: 10rem;">
        <span aria-hidden="true" class="text-light">NO VOTARON = <?php
                                                                  echo "$numero1";
                                                                  ?></span>
      </button> </a>


    </div>
    </div>
    <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>

</body>
<center>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#p').DataTable();


    });
  </script>




  </button> </a>