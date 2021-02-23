<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: Usuario ::.</title>
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
    $conexion = mysqli_connect("localhost","root","","registro");
    $_correo = $_GET['correo'];
    $_nombre = $_GET ['nombre'];
    $_apellido = $_GET ['apellido'];
    $_telefono = $_GET ['telefono'];
    $_direccion = $_GET ['direccion'];
    
    mysqli_query($conexion, "INSERT INTO clientes(correo, nombrecl, apellcl, telefonocl, direccioncl) 
    Values('$_correo','$_nombre','$_apellido','$_telefono','$_direccion')");
    
    mysqli_close($conexion);
    echo "<div class='formulario'>Pre-registro completo, ingrese nuevamente correo Electronico para crear Contraseña</div>";
    ?>
    <div class="formulario">
    <form action="validacion2.php" method="get">

    <label for="text">Confirmar el Correo: </label>
    <input type="email" name="correo2" id="correo2"><br><br>

    <label for="">Ingrese Usuario: </label>
    <input type="text" name="usuario" id="usuario"><br><br>

    <label for="">Ingrese contraseña:</label>
    <input type="password" name="contraseña" id="contraseña"><br><br>

    <label for="">Confime la contraseña:</label>
    <input type="password" name="contraseña2" id="contraseña2"><br><br>
    <input type="submit" value="Ingresar" class="boton">
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/codigo.js"></script>
</body>
</html>
