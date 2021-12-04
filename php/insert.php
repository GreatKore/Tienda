

<?php

    require_once '../bd/conexion.php';
    $success  = "";
    if(isset($_POST['add_marca']))
    {	 
        $name  = $_POST['txt_name'];
        
        $sql = "INSERT INTO marca (descripcion_marca)
        VALUES ('$name')";
        if (mysqli_query($conex, $sql))
        {
            $success    =   "Nueva Marca añadida!";
        }
        else
        {
        echo "Error: " . $sql . " " . mysqli_error($conex);
        }
        mysqli_close($conex);

        header("Location: principal.php");
    }
?>