<?php
include ('conexion.php');





$edit_id = $_POST['edit_id'];
$edit_cedula = $_POST['edit_cedula'];
$edit_codigo = $_POST['edit_codigo'];
$edit_apellidos = $_POST['edit_apellidos'];
$edit_nombres = $_POST['edit_nombres'];
$edit_nacionalidad = $_POST['edit_nacionalidad'];
$edit_gerencia = $_POST['edit_gerencia'];
$edit_division = $_POST['edit_division'];
$edit_cargo = $_POST['edit_cargo'];
$edit_local = $_POST['edit_local'];
$edit_celular = $_POST['edit_celular'];
$edit_celular2 = $_POST['edit_celular2'];
$edit_voto = $_POST['edit_voto'];


$query = "UPDATE datas SET id='$edit_id', cedula='$edit_cedula', codigo='$edit_codigo',apellidos='$edit_apellidos',nombres='$edit_nombres', nacionalidad='$edit_nacionalidad',
gerencia='$edit_gerencia' ,division='$edit_division' ,cargo='$edit_cargo',loca='$edit_local', celular='$edit_celular', celular_2='$edit_celular2',voto='$edit_voto'







                                      WHERE '$edit_id'=id



                                        ";





     
     
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());

header("Location: http:../principal.php?usu=2");
      
  echo "SE BORRO EL REGISTRO";
?>


 

     

                        






