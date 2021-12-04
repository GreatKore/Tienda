
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
                while($row = mysqli_fetch_array($result))
                {
                ?>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td><?php echo $row["id_marca"]; ?></td>
						<td><?php echo $row["descripcion_marca"]; ?></td>
						<td>
							<a href="#editEmployeeModal?<?php echo $row['id_marca']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal" id= "delete_modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
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
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Edit Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save" name="delete">
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

					<input type="hidden" name="idmarca_delete" value="
					<?php $_GET[""] ?>
					">

					<div class="modal-header">						
						<h4 class="modal-title">Eliminar Marca</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Esta seguro que desea eliminar esta Marca?</p>
						<p class="text-warning"><small>Esta accion no sera reversible.</small></p>
					</div>
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