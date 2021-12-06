

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema de Ventas</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body style="background-image: url('img/back_login.jpg')">
    <div class="login-box">
      <img src="img/market.png" class="avatar" alt="Avatar Image">
      <h1>Iniciar Sesion</h1>
      <form method="POST" action="php/filtro.php">

            <!-- USERNAME INPUT -->
            <label for="username">Usuario</label>
            <input type="text" placeholder="Ingresar usuario" name="txt_usuario" required>
            <!-- PASSWORD INPUT -->

            <label for="password">Contraseña</label>
            <input type="password" placeholder="***********" name="txt_password" required>

            <input type="submit" value="Iniciar Sesion">

            <a href="#">Olvide mi contraseña</a><br>
            <a href="#">Crear Cuenta</a>
      </form>
    </div>
  </body>
</html>
