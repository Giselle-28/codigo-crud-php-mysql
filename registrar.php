<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
</head>
<body>
    <form action="validarRegistro.php" method="post">
    <h1 class="animate__animated animate__bounce">Registrate</h1>
    <div class="container">
    <p><b>Usuario</b> <input type="text" placeholder="Ingrese un usuario" autocomplete="off" name="usuario"></p>

    <p><b>Contraseña </b><input type="password" placeholder="Ingrese una contraseña" autocomplete="off" name="contraseña"></p>

    <p><b>Contraseña </b><input type="password" placeholder="Repita la contraseña" autocomplete="off" name="reContraseña"></p>

    <input type="submit" value="Registrar">
  </div>
  <a id="Link" class="nav-link" href="login.php">Ir a inicio</a>
  
    </form>
</body>
</html>