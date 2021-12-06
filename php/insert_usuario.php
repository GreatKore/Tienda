
<?php
    require_once '../bd/conexion.php';
    $success  = "";
    if(isset($_POST['add_usuario']))
    {	 
        $user  = $_POST['txt_user'];
        $pass  = $_POST['txt_pass'];
        $tipo  = $_POST['tipo'];
        $estado  = $_POST['estado'];
        $persona  = $_POST['persona'];
        
        $sql = "INSERT INTO usuario (user, pass, id_tipouser, id_estado, cod_persona)
        VALUES ('$user', '$pass', $tipo, $estado, '$persona')";
    
        if (mysqli_query($conex, $sql))
        {
            $success    =   "Nuevo usuario añadido!";
        }
        else
        {
        echo "Error: " . $sql . " " . mysqli_error($conex);
        }
        mysqli_close($conex);

        header("Location: usuarios.php");
    }
?>