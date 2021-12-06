
<?php
    require_once '../bd/conexion.php';
    $success  = "";
;
    if(isset($_POST['add_producto']))
    {	 
        $codigo = $_POST['txt_codigo'];
        $name  = $_POST['txt_name'];
        $descripcion  = $_POST['txt_descripcion'];
        $precio  = $_POST['txt_precio'];
        $stock  = $_POST['txt_stock'];
        $categoria  = $_POST['categoria'];
        $marca  = $_POST['marca'];

        $sql = "INSERT INTO producto (cod_producto, nombre_producto, descripcion_producto, precio, stock, img, id_categoria, id_marca)
        VALUES ('$codigo', '$name', '$descripcion', $precio, $stock, 'NULL', $categoria, $marca)";
    
        if (mysqli_query($conex, $sql))
        {
            $success    =   "Nuevo Producto añadido!";
        }
        else
        {
        echo "Error: " . $sql . " " . mysqli_error($conex);
        }
        mysqli_close($conex);

        header("Location: productos.php");
    }
?>