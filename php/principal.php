
<!DOCTYPE html>
<html lang="en">

<?php 
    include_once '../library/head.php';
?>

<?php 
    require_once '../bd/conexion.php';
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
						<h2> <b>Marca</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar Marca</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Eliminar</span></a>						
					</div>
                </div>
			</div>

            <?php
                $sql = "SELECT * FROM marca  ";
                $result = $conex->query($sql);
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
                        <th>Id</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
				<?php
                while($row = mysqli_fetch_array($result)){

					$idmarca =$row["id_marca"];
                    $datos = $row["id_marca"]."||".$row["descripcion_marca"];
                ?>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td><?php echo $row['id_marca']; ?></td>
						<td><?php echo $row["descripcion_marca"]; ?></td>
						<td>
							<a data-target="#editEmployeeModal" class="edit" data-toggle="modal" onclick="cargarid('<?php echo $datos; ?>')"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>

							<a data-target="#deleteEmployeeModal" class="delete" data-toggle="modal" onclick="borrarregistro('<?php echo $idmarca; ?>')"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
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
				<form method="post" action="insert.php">
					<div class="modal-header">						
						<h4 class="modal-title">Agrega una Marca</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nombre de la Marca</label>
							<input type="text" class="form-control" name="txt_name" placeholder="" required>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" name="add_marca" value="Agregar">
					</div>
				</form>
			</div>
		</div>
	</div>


	<!-- Editar Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="edit.php">
					<div class="modal-header">						
						<h4 class="modal-title">Editar Marca</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">	

						<input type="hidden" name="etxt_idmarca" id="e_idmarca">

						<div class="form-group">
							<label>Decripcion</label>
							<input type="text" name="etxt_marca" id="e_marca"  class="form-control" required>
						</div>

					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Actualizar" name="delete_marca">
					</div>
				</form>
			</div>
		</div>
	</div>


	<!-- Eliminar Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="delete.php">

					<div class="modal-header">						
						<h4 class="modal-title">Eliminar Marca</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Esta seguro que desea eliminar esta Marca?</p>
						<p class="text-warning"><small>Esta accion no sera reversible.</small></p>
					</div>

					<input type="hidden" id="idmarca_delete" name="txtmarca_delete" value="">

					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-danger" value="Eliminar" name="delete_marca">
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