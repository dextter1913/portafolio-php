<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: Nuevo Intento ::.</title>
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
    <input type="submit" value="Ingresar">
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/codigo.js"></script>
</body>
</html>