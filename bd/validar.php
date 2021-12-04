<?php

include_once './conexion.php';

$usu = $_POST['txt_usuario'];
$pass = $_POST['txt_password'];

$sql = "SELECT * FROM usuario WHERE ".
        "user = '$usu' AND ".
        "pass = '$pass' AND ".
        "id_estado = '1'";

$result = $conex->query($sql);

if($result->num_rows == 1)
    header('Location: ../php/principal.php');
else
    header('Location: ../index.php');

?>