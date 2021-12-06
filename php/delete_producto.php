

<?php
    require_once '../bd/conexion.php';
    $success  = "";
    if(isset($_POST['delete_producto']))
    {	 
        $id  = $_POST['txtproducto_delete'];

        $sql =  "delete from producto where cod_producto = '$id' ";
        if (mysqli_query($conex, $sql))
        {
            $success    =   "producto Eliminado";
        }
        else
        {
        echo "Error: " . $sql . " " . mysqli_error($conex);
        }
        mysqli_close($conex);

        header("Location: productos.php");
    }
?>