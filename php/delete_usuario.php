

<?php
    require_once '../bd/conexion.php';
    $success  = "";
    if(isset($_POST['delete_usuario']))
    {	 
        $id  = $_POST['txtusuario_delete'];

        $sql =  "delete from usuario where id_user = $id";
        if (mysqli_query($conex, $sql))
        {
            $success    =   "Usuario Eliminado";
        }
        else
        {
        echo "Error: " . $sql . " " . mysqli_error($conex);
        }
        mysqli_close($conex);

        header("Location: usuarios.php");
    }
?>