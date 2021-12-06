
<?php

require_once '../bd/conexion.php';
$success  = "";
if(isset($_POST['insert_producto']))
{	 
    $cod = $_POST["cod"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];
    $categoria = $_POST["categoria"];
    $marca= $_POST["marca"];

  $update = "update producto set nombre_producto='$nombre',descripcion_producto = '$descripcion', precio = $precio, stock = $stock, id_categoria = $categoria, id_marca = $marca  where cod_producto='$cod'";
  mysqli_query($conex, $update);

    header("Location: productos.php");
}
?>