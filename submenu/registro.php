<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: Registrese ::.</title>
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
<a href="../index.php" class="volver">Volver</a>
    <div class="formulario">
        <p>Registro</p>
        <form action="validacion.php" method="get">
            <label for="text">Correo: </label>
            <input type="email" name="correo" id="correo"><br><br>

            <label for="">Nombre:</label>
            <input type="text" name="nombre"><br><br>

            <label for="">Apellido: </label>
            <input type="text" name="apellido"><br><br>

            <label for="text">Telefono: </label>
            <input type="text" name="telefono"><br><br>

            <label for="">Direccion: </label>
            <input type="text" name="direccion"><br><br>
            <input type="submit" value="Registrar" class="boton">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/codigo.js"></script>
</body>
</html>