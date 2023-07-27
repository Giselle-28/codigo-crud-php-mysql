<?php
    include("conexion.php");
    $con=conectar();

    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    $reContraseña=$_POST['reContraseña'];

    // Validaciones del lado del servidor
    $error = 0;

    if((!preg_match("/^[_.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+.)+[a-zA-Z]{2,6}$/i", $usuario))){
        $error = 1;
    ?> 
        <h5 class="bad">EMAIL NO VALIDO</h5>
    <?php
    }else{
        $sql="SELECT correo FROM administrador where correo='$usuario'";
        $query= mysqli_query($con,$sql);
    
        $elCorreo=mysqli_num_rows($query);

        if($elCorreo){ // Si funciona y hay un correo valido NO LO DEJAMOS INSERTAR
            $error = 1;
            ?> 
                <h5 class="bad">EMAIL EXISTENTE</h5>
            <?php            
        }
    }    
    // Un correo electronico usable $usuario

    if(strlen($contraseña) < 8 ){
        $error = 1;
    ?> 
        <h5 class="bad">CONTRASEÑA MINIMA 8 CARACTERES</h5>
    <?php
    }
 
    if($contraseña != $reContraseña){
        $error = 1;
    ?> 
        <h5 class="bad">LAS CONTRASEÑAS NO COINCIDEN</h5>
    <?php
    }
       
    if($error == 1){

    include("registrar.php");

    }else{
        // Insertar el nuevo usuario
        $sql="INSERT into administrador VALUES('$usuario','$contraseña')";
        $query= mysqli_query($con,$sql);
        header("location:login.php");

    }

mysqli_close($con);

?>

