
                    <?php
                    include('conexion.php');

                    $que = 'SELECT * FROM datas ';
                    $result = pg_query($que) or die('Query failed: ' . pg_last_error());
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
                            <center>
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
                                                                                                    <td><?php echo $mostrar['local'] ?></td>
                                                                                                    <center>
                                                                                                        <td><?php echo $mostrar['celular'] ?></td>
                                                                                                        <center>
                                                                                                            <td><?php echo $mostrar['celular_2'] ?></td>
                                                                                                            <center>
                                                                                                                <td>
                                                                                                                    <!--___________________________BOTON ELIMINAR_________________________________________________________________________-->


                                                                                                             