

<?php
    require_once '../bd/conexion.php';
    $success  = "";
    if(isset($_POST['idmarca_delete']))
    {	 
        $id  = $_POST['idmarca_delete'];
        
        $sql = "DELETE FROM `marca` WHERE `marca`.`id_marca` = $id";
        if (mysqli_query($conex, $sql))
        {
            $success    =   "Marca Eliminada";
        }
        else
        {
        echo "Error: " . $sql . " " . mysqli_error($conex);
        }
        mysqli_close($conex);

        header("Location: principal.php");

    }
?>