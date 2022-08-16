<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="css/bootstrap.min.css">


  <?php
  include('sql/conexion.php');
  $id = $_GET['id'];



  $query = "SELECT * FROM datas WHERE id ='$id'";
  $result = pg_query($query) or die('Query failed: ' . pg_last_error());
  $row = pg_fetch_array($result);



  $row['id'];
  $row['usuario'];
  $row['pass'];
  $row['perfil'];
  $row['correo'];
  $row['nombres'];
  $row['apellidos'];
  $row['telefono'];
  $row['cedula'];


  ?>



  <div class="modal fade" id="danny" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header btn btn-dark">
          <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal">
              <span aria-hidden="true">Editar Empleado</span>
            </button>
          </h5>
        </div>
        <div class="modal-body">
          <div class="card border mb-3" style="max-width: 50rem;">
            <div class="card-body text-secondary">
              <center>
                <form method="post" action="sql/modificar-usuario.php">


                  Id<input class="form-control form-control-sm" type="text" name="edit_id" readonly id="edit_id" placeholder="id" value="<?php echo $row['id'] ?>" required>
                  Cedula<input class="form-control form-control-sm" type="text" name="edit_cedula" readonly id="edit_cedula" placeholder="usuario" value="<?php echo $row['cedula'] ?>" required>
                  Codigo<input class="form-control form-control-sm" type="text" name="edit_codigo" readonly id="edit_codigo" placeholder="pass" value="<?php echo $row['codigo'] ?>" required>
                  Apellidos<input class="form-control form-control-sm" type="text" name="edit_apellidos" readonly id="edit_apellidos" placeholder="perfil" value="<?php echo $row['apellidos'] ?>" required>
                  Nombres<input class="form-control form-control-sm" type="text" name="edit_nombres" readonly id="edit_nombres" placeholder="correo" value="<?php echo $row['nombres'] ?>" required>
                  Nacionalidad<br><input class="form-control form-control-sm" type="text" readonly name="edit_nacionalidad" id="edit_nacionalidad" placeholder="nombre" value="<?php echo $row['nacionalidad'] ?>" required>
                  Gerencia<input class="form-control form-control-sm" type="text" readonly name="edit_gerencia" id="edit_gerencia" placeholder="apellido" value="<?php echo $row['gerencia'] ?>" required>
                  Division<input class="form-control form-control-sm" type="text" readonly name="edit_division" id="edit_division" placeholder="telefono" value="<?php echo $row['division'] ?>" required>
                  Cargo<input class="form-control form-control-sm" type="text" readonly name="edit_cargo" id="edit_cargo" placeholder="cedula" value="<?php echo $row['cargo'] ?>" required>
                  Local<input class="form-control form-control-sm" type="text" readonly name="edit_local" id="edit_local" placeholder="cedula" value="<?php echo $row['loca'] ?>" required>
                  Celular<input class="form-control form-control-sm" type="text" readonly name="edit_celular" id="edit_celular" placeholder="cedula" value="<?php echo $row['celular'] ?>" required>
                  Celular 2<input class="form-control form-control-sm" type="text" name="edit_celular2" id="edit_celular2" placeholder="cedula" value="<?php echo $row['celular_2'] ?>" required>
                  Voto<select class="form-control form-control-sm" placeholder name="edit_voto" value="" required>

                    <option selected>SI</option>
                    <option selected>NO</option>
                    <option selected>Seleccione</option>

                  </select>








            </div>
          </div>
        </div>
        <div class="modal-footer btn btn-dark">
          <input class="btn-submit btn btn-primary btn-sm" type="submit" size="35" value="Modificar">
          <input class="btn-reset btn btn-success btn-sm" type="reset" size="35" value="Limpiar">
          <button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">Cerrar</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>


  <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/editar-usuario.js"></script>
  </body>

</html>