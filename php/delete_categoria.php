

<?php
    require_once '../bd/conexion.php';
    $success  = "";
    if(isset($_POST['delete_categoria']))
    {	 
        $id  = $_POST['txtcategoria_delete'];
        $sql =  "delete from categoria where id_categoria = $id ";
        if (mysqli_query($conex, $sql))
        {
            $success    =   "Categoria Eliminada";
        }
        else
        {
        echo "Error: " . $sql . " " . mysqli_error($conex);
        }
        mysqli_close($conex);

        header("Location: categoria.php");
    }
?>