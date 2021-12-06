
<?php 

session_start();

require("../bd/conexion.php");


$usuario = $_POST["txt_usuario"];
$password = $_POST["txt_password"];


$sql = "select * from usuario where user = '$usuario' and pass = '$password'";
$result = $conex->query($sql);

$arrayuser = mysqli_fetch_array($result);

$valor=$arrayuser["cod_persona"];

	
if ($valor==null) {
	header('location: ../login.php');
} 
else{

	if ($arrayuser["id_tipouser"] == 1 && $arrayuser["id_estado"] == 1) {

		$_SESSION["codigo"]=$valor;
		$_SESSION["auth"]=1;
		header('Location: principal.php');

	}
	else if ($arrayuser["id_tipouser"] == 2 && $arrayuser["id_estado"] == 1) {

		$_SESSION["codigo"]=$valor;
		$_SESSION["auth"]=1;
		header('Location: cliente_index.php');
		
	}

}



?>