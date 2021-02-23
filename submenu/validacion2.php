<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: Validacion ::.</title>
    <link rel="stylesheet" href="registro.css">
    <link rel="stylesheet" href="../estilos/loader.css">
</head>
<body class="hidden" style="background: #2d3436;">
<div class="centrado" id="onload">
    <div class="lds-ripple">
    <div>
    </div>
    <div>
    </div>
</div>
</div>
<?php 
$_correo = $_GET['correo2'];
$_usuario = $_GET['usuario'];
$_contraseña = $_GET['contraseña'];
$_contraseña2 = $_GET['contraseña2'];

if ($_contraseña === $_contraseña2) {
    $conexion = new mysqli("localhost","root","","registro");
    
mysqli_query($conexion, "INSERT INTO usuarios(usercl, contraseña, correo) 
Values('$_usuario','$_contraseña','$_correo')");

mysqli_close($conexion);
echo "<div class='formulario'>Registro ¡¡Satisfactorio!! <a href='../index.php' class='volver'>Inicio</a></div>";
} else {    
    echo "Contraseña o correo invalido, intenta de nuevo <a href='registrar2.php' class='volver'>Volver</a>";
}
?> 
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/codigo.js"></script>
</body>
</html>
