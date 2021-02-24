<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: OrcaNet ::.</title>
    <link rel="stylesheet" href="../estilos/estilosindex.css">
    <link rel="stylesheet" href="../estilos/loader.css">
    <link rel="stylesheet" href="../estilos/estilosportafolio.css">
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
    <div class="encabezado">
        <nav class="navegacion1">
            <ul>
                <li><a href="./submenu/registro.php">Registro</a></li>
                <li><a href="./submenu/login.php">Ingresar</a></li>
            </ul>
        </nav>
    </div>
    <div class="encabezado2">
    <p class="logo"><a href="index.php">TecnoFreaky S.A</a></p>
        <nav class="navegacion2">
            <ul>
                <li><a href="../inicio.php">INICIO</a></li>
                <li><a href="../portafolio.php">PORTAFOLIO</a></li>
                <li><a href="../contactenos.php">CONTACTO</a></li>
            </ul>
        </nav>
        
    <div class="cuerpo">
        <h1>Conoce Orca 1.0</h1><br><br>
        <p>Orca inicia con 2 botones, el de empleado y el de Administrador, el sgundo lo presentaremos mas adeante, por ahora soo veremos e primero, continuemos...</p><br>
        <img src="../imagen/Orca/Captura.PNG" alt="" class="imagenes"><br><br><br>
        <p>Aquí ingresaran las credenciales del empleado, tanto usuario y contraseña suministrado por el area administrativa o por su jefe inmediato...</p><br>
        <img src="../imagen/Orca/Captura1.PNG" alt="" class="imagenes"><br><br><br>
        <p>te saludará la pantalla principal, la cual reconoceras porque en la parte superior tiene siertas opciones, que son: <b>Buscar Ciente, Registrar y Acerca de</b>, ya hablaremos mas a fondo de cada una de estas opciones...</p><br>
        <img src="../imagen/Orca/Captura2.PNG" alt="" class="imagenes"><br><br><br>
        <p>Opcion <b>Buscar Cliente</b> aca podras buscar a tu cliente ya registrado, con su dicho criterio, ya sea con cedula o ID previamente generado en la base de datos, si no recuerda ninguno de estos datos, en la parte inferior, podra tambien ingresar <b>Nombre</b>, <b>Apellido</b>, y/o <b>Telefono</b> para posteriormente encontrar el ID o cedula y así ingresar su pedido...</p><br>
        <img src="../imagen/Orca/Captura3.PNG" alt="" class="imagenes"><br><br><br>
        <p>una pequeña demostracion de como filtrar por apellido para buscar al cliente...</p><br>
        <p>Despues de encontrar al Cliente, Orca ya te permitira ingresar el pedido del ciente dando click en 
        <b>Ingresar Pedido</b>...</p><br>
        <img src="../imagen/Orca/Captura4.PNG" alt="" class="imagenes"><br><br><br>
        <img src="../imagen/Orca/Captura5.PNG" alt="" class="imagenes"><br><br><br>
        <p>podras ingresar el codigo del producto, posteriormente le debes dar en <b>Buscar</b>, el sistema buscara os productos ingresados 
            a la base de datos, con su respectivo precio y el ID de su correspondiente categoria, en este caso, <b>Verduras</b>,
            tambien puedes ingresar la cantidad de productos que llevara el ciente, despues le das click en <b>Facturar</b>, posterior, puedes
            buscar otro producto y repites el mismo proceso cuantos pedidos tengas en el momento
        </p><br>
        <img src="../imagen/Orca/Captura6.PNG" alt="" class="imagenes"><br><br><br>
        <img src="../imagen/Orca/Captura7.PNG" alt="" class="imagenes"><br><br><br>
        <p>Antes de ingresar la compra, debes si o si, ingresar un <b>numero de caja</b>, (Aplica para los supermercados) si el negocio
            es otro tipo, por defecto puedes ingresar el numero 1 en dicha caja de texto, ya que no debe quedar en blanco
        </p><br>
        <img src="../imagen/Orca/Captura8.PNG" alt="" class="imagenes"><br><br><br>
        <P>Despues de haberle dado click en <b>Ingresar Compra</b> podemos observar como se ingresa 
        la compra a la base de datos, y así e sistema le dara un <b>codigo de compra</b>, ante cuaquier devolucion, el sistema te permitirá
        Exportar en un Documento de Excel, antes debes crear un archivo xls llamado pagos en la ruta donde se instalo el <b>Orca</b>
        sirve para revisar todas las ventas realizadas hasta el momento, con su respectiva fecha y hora de ingreso, de dicho Pedido 
        </P><br>
        <img src="../imagen/Orca/Captura9.PNG" alt="" class="imagenes"><br><br><br>
        <p>Ejemplo de como se veria el anterior exporte</p><br>
        <img src="../imagen/Orca/Captura10.PNG" alt="" height="600px" class="imagenes"><br><br><br>
        <p>
            Ahora pasamos a la siguiente opcion del menu llamada, <b>Registrar Producto</b>, a encontaras en la parte 
            superior, pasamos el puntero en registrar, producto y ahí encontraremos a opcion <b>Registrar Producto</b>
            evidenciaras, 3 campos especificos, <b>Nombre del Producto</b>, <b>Precio del Producto</b>, <b>ID Categoria</b>,
            evidentemente, puedes ingresar el Nombre del producto a ingresar, precio del producto y el ID de la categoria Asígnada a producto,
            si no sabes cua es el numero de ID de la categoria de tu negocio, Facíl, le das click en Mostrar categoria y así las veras todas
        </p><br>
        <img src="../imagen/Orca/Captura11.PNG" alt="" class="imagenes"><br><br><br>
        <p></p><br><br>
        <img src="../imagen/Orca/Captura12.PNG" alt="" class="imagenes"><br><br><br>

        
    </div>
    <footer style="background-color: #2c3e50; color:#dfe4ea; font-size: 20px; font-family:'Times New Roman', Times, serif; text-align: right;">Copyright © Cristian Aguirre</footer>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../js/codigo.js"></script>
</body>
</html>