
<?php
    require_once '../bd/conexion.php';
    $success  = "";
    if(isset($_POST['add_categoria']))
    {	 
        $name  = $_POST['txt_name'];
        
        $sql = "INSERT INTO categoria (descripcion_categoria)
        VALUES ('$name')";
    
        if (mysqli_query($conex, $sql))
        {
            $success    =   "Nueva Categoria añadida!";
        }
        else
        {
        echo "Error: " . $sql . " " . mysqli_error($conex);
        }
        mysqli_close($conex);

        header("Location: categoria.php");
    }
?>