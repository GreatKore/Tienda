
<!DOCTYPE html>
<html lang="en">

<?php 
    include_once '../library/head.php';
?>

<?php 
    require_once '../bd/conexion.php';
	include_once 'auth.php';
?>

<body>

    <?php 
        include_once '../library/header.php';
    ?>


<br>
	<br>
	<h3 class="text-center text-success" id="message"><?php  ?></h3>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2> <b>Usuarios</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar Usuario</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Eliminar</span></a>						
					</div>
                </div>
			</div>

            <?php
                $sql = "SELECT * FROM usuario  ";
				$sql2 = "SELECT * FROM tipo_usuario  ";
				$sql3 = "SELECT * FROM estado_usuario  ";
				$sql4 = "SELECT * FROM persona  ";
                $result = $conex->query($sql);
				$result2 = $conex->query($sql2);
				$result3 = $conex->query($sql3);
				$result4 = $conex->query($sql4);
            ?>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Cod_Persona</th>
						<th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
				<?php
                while($row = mysqli_fetch_array($result)){

					$iduser = $row["id_user"] ;
					$user =$row["user"];
                    $pass = $row["pass"];
					$codigo = $row["cod_persona"];
					$datos = $row["id_user"]."||".$row["user"];
                ?>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td><?php echo $row['user']; ?></td>
						<td><?php echo $row["pass"]; ?></td>
						<td><?php echo $row["cod_persona"]; ?></td>
						<td>
							<a data-target="#editEmployeeModal" class="edit" data-toggle="modal" onclick="cargarid('<?php echo $user; ?>')"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>

							<a data-target="#deleteEmployeeModal" class="delete" data-toggle="modal" onclick="borrarregistro('<?php echo $iduser; ?>')"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
						</td>
					</tr>
                <?php 
                    } 
                ?>
                </tbody>
            </table>

        </div>
    </div>


	<!-- Agregar Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="insert_usuario.php">
					<div class="modal-header">						
						<h4 class="modal-title">Agrega un usuario</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nombre del usuario</label>
							<input type="text" class="form-control" name="txt_user" placeholder="" required>
						</div>
						<div class="form-group">
							<label>Contraseña</label>
							<input type="text" class="form-control" name="txt_pass" placeholder="" required>
						</div>
						<div class="form-group">
                            <label>Tipo de usuario</label>
                            <select id="tipo" name="tipo">
                                <?php
								while ($rows = mysqli_fetch_array($result2)) { ?>
        						    <option value="<?php echo $rows["id_tipouser"];?>"><?php echo $rows["descripcion_tipouser"]; ?></option>
        						    <?php
								}?>
                            </select>
                        </div>
						<div class="form-group">
                            <label>Estado</label>
                            <select id="estado" name="estado">
                                <?php
								while ($rows = mysqli_fetch_array($result3)) { ?>
        						    <option value="<?php echo $rows["id_estadouser"];?>"><?php echo $rows["descrip_estado"]; ?></option>
        						    <?php
								}?>
                            </select>
                        </div>
						<div class="form-group">
                            <label>Persona</label>
                            <select id="persona" name="persona">
                                <?php
								while ($rows = mysqli_fetch_array($result4)) { ?>
        						    <option value="<?php echo $rows["cod_persona"];?>"><?php echo $rows["cod_persona"]." - ".$rows["nombre_persona"]; ?></option>
        						    <?php
								}?>
                            </select>
                        </div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" name="add_usuario" value="Agregar">
					</div>
				</form>
			</div>
		</div>
	</div>


	<!-- Editar Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="edit_usuario.php">
					<div class="modal-header">						
						<h4 class="modal-title">Editar Usuario</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">	
						<input type="hidden" name="etxt_idusuario" id="e_idusuario">

						<div class="form-group">
							<label>Usuario</label>
							<input type="text" name="etxt_usuario" id="e_usuario"  class="form-control" required>
						</div>

					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Actualizar" name="edit_marca">
					</div>
				</form>
			</div>
		</div>
	</div>


	<!-- Eliminar Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="delete_usuario.php">

					<div class="modal-header">						
						<h4 class="modal-title">Eliminar Usuario</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Esta seguro que desea eliminar este usuario?</p>
						<p class="text-warning"><small>Esta accion no sera reversible.</small></p>
					</div>

					<input type="hidden" id="idmarca_delete" name="txtusuario_delete" value="">

					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-danger" value="Eliminar" name="delete_usuario">
					</div>
				</form>
			</div>
		</div>
	</div>



	<script>
        $(document).ready(function()
        {
            setTimeout(function()
            {
                $('#message').hide();
            },3000);
        });
    </script>






	<script src="../js/header.js"></script>
    <script src="../js/crud.js"></script>
    
</body>
</html>