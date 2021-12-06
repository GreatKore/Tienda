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
                        <h2> <b>Productos</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                class="material-icons">&#xE147;</i> <span>Agregar Producto</span></a>
                        <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i
                                class="material-icons">&#xE15C;</i> <span>Eliminar</span></a>
                    </div>
                </div>
            </div>

            <?php
                $sql = "SELECT * FROM producto  ";
				$sql2 = "SELECT * FROM categoria  ";
				$sql3 = "SELECT * FROM marca  ";
                $sql4 = "SELECT * FROM categoria  ";
                $sql5 = "SELECT * FROM marca  ";
                $result = $conex->query($sql);
				$result2 = $conex->query($sql2);
				$result3 = $conex->query($sql3);
                $result4 = $conex->query($sql4);
                $result5 = $conex->query($sql5);
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
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                while($row = mysqli_fetch_array($result)){

					$codproducto =$row["cod_producto"];
					$nombre = $row["nombre_producto"];
                    $descripcion = $row["descripcion_producto"];
					$precio= $row["precio"];
					$stock= $row["stock"];
                    $categoria= $row["id_categoria"];
                    $marca= $row["id_marca"];
                    $datos = $codproducto."||".$nombre."||".$descripcion."||".$precio."||".$stock."||".$categoria."||".$marca;
                ?>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                        <td><?php echo $codproducto; ?></td>
                        <td><?php echo $nombre; ?></td>
                        <td><?php echo $descripcion; ?></td>
                        <td><?php echo $precio; ?></td>
                        <td><?php echo $stock; ?></td>
                        <td>
                            <a data-target="#editEmployeeModal" class="edit" data-toggle="modal"
                                onclick="cargaridp('<?php echo $datos; ?>')"><i class="material-icons"
                                    data-toggle="tooltip" title="Editar">&#xE254;</i></a>

                            <a data-target="#deleteEmployeeModal" class="delete" data-toggle="modal"
                                onclick="borrarregistro('<?php echo $codproducto; ?>')"><i class="material-icons"
                                    data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
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
                <form method="post" action="insert_producto.php">
                    <div class="modal-header">
                        <h4 class="modal-title">Agrega un Producto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Codigo del producto</label>
                            <input type="text" class="form-control" name="txt_codigo" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>Nombre del producto</label>
                            <input type="text" class="form-control" name="txt_name" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>Descripcion del producto</label>
                            <input type="text" class="form-control" name="txt_descripcion" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>Precio</label>
                            <input type="text" class="form-control" name="txt_precio" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>Stock</label>
                            <input type="text" class="form-control" name="txt_stock" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>Categoria</label>
                            <select id="categoria" name="categoria">
                                <?php
								while ($rows = mysqli_fetch_array($result2)) { ?>
        						    <option value="<?php echo $rows["id_categoria"];?>"><?php echo $rows["descripcion_categoria"]; ?></option>
        						    <?php
								}?>
                            </select>
                        </div>
						<div class="form-group">
                            <label>Marca</label>
                            <select id="marca" name="marca">
                                <?php
								while ($rows = mysqli_fetch_array($result3)) { ?>
        						    <option value="<?php echo $rows["id_marca"];?>"><?php echo $rows["descripcion_marca"]; ?></option>
        						    <?php
								}?>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                        <input type="submit" class="btn btn-success" name="add_producto" value="Agregar">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Editar Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="edit_producto.php">
                    <div class="modal-header">
                        <h4 class="modal-title">Editar Producto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>	Codigo Producto</label>
                            <input type="text" name="cod" id="e_cod" class="form-control" required>
                        </div>
						<div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="nombre" id="e_nombre" class="form-control" required>
                        </div>
						<div class="form-group">
                            <label>Descripcion</label>
                            <input type="text" name="descripcion" id="e_descripcion" class="form-control" required>
                        </div>
						<div class="form-group">
                            <label>Precio</label>
                            <input type="text" name="precio" id="e_precio" class="form-control" required>
                        </div>
						<div class="form-group">
                            <label>Stock</label>
                            <input type="text" name="stock" id="e_stock" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Categoria</label>
                            <select id="idcategoria" name="categoria">
                                <?php
								while ($rows2 = mysqli_fetch_array($result4)) { ?>
        						    <option value="<?php echo $rows2["id_categoria"];?>"><?php echo $rows2["descripcion_categoria"]; ?></option>
        						    <?php
								}?>
                            </select>
                        </div>
						<div class="form-group">
                            <label>Marca</label>
                            <select id="idmarca" name="marca">
                                <?php
								while ($rows2 = mysqli_fetch_array($result5)) { ?>
        						    <option value="<?php echo $rows2["id_marca"];?>"><?php echo $rows2["descripcion_marca"]; ?></option>
        						    <?php
								}?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                        <input type="submit" class="btn btn-info" value="Actualizar" name="insert_producto">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Eliminar Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="delete_producto.php">
                    <div class="modal-header">
                        <h4 class="modal-title">Eliminar Producto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Esta seguro que desea eliminar este Producto?</p>
                        <p class="text-warning"><small>Esta accion no sera reversible.</small></p>
                    </div>
                    <input type="hidden" id="idmarca_delete" name="txtproducto_delete" value="">
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                        <input type="submit" class="btn btn-danger" value="Eliminar" name="delete_producto">
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script>
    $(document).ready(function() {
        setTimeout(function() {
            $('#message').hide();
        }, 3000);
    });
    </script>



    <script src="../js/header.js"></script>
    <script src="../js/crud.js"></script>

</body>

</html>