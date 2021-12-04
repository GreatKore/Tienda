

<?php

require_once '../bd/conexion.php';
$success  = "";
if(isset($_POST['delete_marca']))
{	 
    $eidmarca = $_POST["etxt_idmarca"];
    $emarca = $_POST["etxt_marca"];

  $updatemarca = "update marca set descripcion_marca='$emarca' where id_marca=$eidmarca";
  mysqli_query($conex, $updatemarca);


    header("Location: principal.php");
}
?>