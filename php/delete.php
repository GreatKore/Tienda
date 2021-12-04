

<?php
    require_once '../bd/conexion.php';
    $success  = "";
    if(isset($_POST['delete_marca']))
    {	 
        $id  = $_POST['txtmarca_delete'];
        
        $sql =  "delete from marca where id_marca = $id";
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