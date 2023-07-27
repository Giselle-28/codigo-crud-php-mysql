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
    <form action="validarLogin.php" method="post">
    <h1 class="animate__animated animate__bounce">Bienvenidos</h1>
    <div class="container">
    <p><b>Usuario</b> <input type="text" placeholder="Ingrese su usuario" name="usuario" ></p>

    <p><b>Contraseña </b><input type="password" placeholder="Ingrese su contraseña" name="contraseña" ></p>

    <input type="submit" value="Ingresar">
  </div>
  
            <a id="Link" class="nav-link" href="registrar.php">¿No tienes una cuenta? Registrate</a>
    </form>
</body>
</html>