
<?php

require_once '../bd/conexion.php';
$success  = "";
if(isset($_POST['insert_categoria']))
{	 
    $eidcategoria = $_POST["etxt_idcategoria"];
    $ecategoria = $_POST["etxt_categoria"];

  $updatecategoria = "update categoria set descripcion_categoria='$ecategoria' where id_categoria=$eidcategoria";
  mysqli_query($conex, $updatecategoria);

    header("Location: categoria.php");
}
?>