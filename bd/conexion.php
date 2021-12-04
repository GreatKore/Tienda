<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$bd = 'bd_tienda';

$conex = new mysqli($server, $user, $pass, $bd);
$conex ->set_charset("utf8");

// $sql = 'SELECT * FROM usuario';

// $result = $conex->query($sql);

// foreach ($result as $fila) {
//     echo '<pre>';
//     print_r($fila);
//     echo '</pre>';
// }

// $conex->close();

// if(mysqli_connect_errno())
//     die('Error de conexión. '. mysqli_connect_error());
// else
//     die('Conexión establecida Moreano Rodriguez Edgar');