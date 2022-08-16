<?php
include ('conexion.php');
$apellidos =$_POST['apellidos'];
$cargo =$_POST['cargo'];
$cedula =$_POST['cedula'];
$celular =$_POST['celular'];
$celular2 =$_POST['celular2'];
$codigo =$_POST['codigo'];
$division =$_POST['division'];
$gerencia =$_POST['gerencia'];
$loca =$_POST['loca'];
$naci =$_POST['naci'];
$nombres =$_POST['nombres'];
$voto =$_POST['voto'];


$query = "INSERT INTO datas(apellidos,cargo,cedula,celular,celular_2,codigo,division,gerencia,loca,nacionalidad,nombres,voto) VALUES 
('$apellidos','$cargo','$cedula','$celular','$celular2','$codigo','$division','$gerencia','$loca','$naci','$nombres','$voto')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
header("Location:../principal-usuario.php?usu=1");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result); 






 






