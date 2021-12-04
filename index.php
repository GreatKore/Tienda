
<!DOCTYPE html>
<html>
<head>     
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/b7780524f2.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="./css/style.css">
    <title>Sistema de Ventas</title>
</head>
<body id="main">

    <form class="formulario" action="bd/validar.php" method="POST">
        
        <h1 class="index_h1">Inicia Sesion</h1>

        <div class="contenedor">  

            <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="text" placeholder="Usuario" id="index" name="txt_usuario" maxlength="10" required>
            </div>
            
            <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" placeholder="Contraseña" id="index" name="txt_password" maxlength="20" required>
            
            </div>
            <input type="submit" value="Ingresar" class="button">


            <p>Ingresa con el usuario y la contraseña proporcionados <a class="link" href="#">Contáctanos</a></p>
        </div>

    </form>

</body>

</html>