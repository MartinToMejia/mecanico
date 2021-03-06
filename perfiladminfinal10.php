<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FRANCO'S</title>

    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>

<body class="p-3 mb-2 bg-secondary text-white">



    <div>
        <img src="<?php session_start(); echo "img/" . $_SESSION['imagen']; ?>" height="150" width="150" border="5" class="border border-dark">

        <h3 class="text-success">Cambios que puedes realizar: </h3>

        

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                CLIENTE
            </button>
          
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="nuevousuario.php" target="_top"> Dar de alta un cliente </a>
                <a class="dropdown-item" href="modificarusuario.php" target="_top"> Modificar datos de un cliente </a>
                <a class="dropdown-item" href="eliminarusuario.php" target="_top"> Eliminar a un cliente </a>
                <a class="dropdown-item" href="resultadosusuarios.php" target="_top"> Ver registros </a>
            </div>
        </div>
        <br><br>

        

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                EMPLEADO
            </button>
          
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="nuevoempleado.php" target="_top"> Dar de alta un empleado </a>
                <a class="dropdown-item" href="modificarempleado.php" target="_top"> Modificar datos de un empleado </a>
                <a class="dropdown-item" href="eliminarempleado.php" target="_top"> Eliminar a un empleado </a>
                <a class="dropdown-item" href="resultadosempleados.php" target="_top"> Ver registros </a>
            </div>
        </div>
        <br><br>

       

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                PROVEEDOR
            </button>
          
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="nuevoproveedor3.php" target="_top"> Dar de alta un proveedor </a>
                <a class="dropdown-item" href="modificarproveedor.php" target="_top"> Modificar datos de un proveedor </a>
                <a class="dropdown-item" href="eliminarproveedor.php" target="_top"> Eliminar a un proveedor </a>
                <a class="dropdown-item" href="resultadosproveedor.php" target="_top"> Ver registros </a>
            </div>
        </div>
        <br><br>

        

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                INVENTARIO
            </button>
          
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="nuevoinventario.php" target="_top"> Dar de alta en elinventario </a>
                <a class="dropdown-item" href="modificarinventario.php" target="_top"> Modificar datos del inventario </a>
                <a class="dropdown-item" href="eliminarinventario.php" target="_top"> Eliminar producto del inventario </a>
                <a class="dropdown-item" href="resultadosinventario.php" target="_top"> Ver registros </a>
            </div>
        </div>
        <br><br>

       

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               REFACCION
            </button>
                
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="nuevarefaccion.php" target="_top"> Dar de alta una refaccion </a>
                <a class="dropdown-item" href="modificarrefaccion.php" target="_top"> Modificar datos de una refaccion </a>
                <a class="dropdown-item" href="eliminarrefaccion.php" target="_top"> Eliminar una refaccion </a>
                <a class="dropdown-item" href="resultadosrefaccion.php" target="_top"> Ver registros </a>
            </div>
        </div>
        <br><br>

        

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 INTERFAZ
            </button>
                
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="modificarinterfaz.php" target="_top"> Modificar interfaz </a>
            </div>
        </div>
        <br><br>

        <!--

        
        <ul>

            <li>

                <a href="nuevousuario.html" target="_top"> <input type="button" value="Dar de alta a un cliente" class="btn btn-light"> </a>
            </li>
            <li>
                <a href="modificarusuario.php" target="_top"> <input type="button" value="Modificar a un cliente" class="btn btn-light"> </a>
            </li>
            <li>
                <a href="eliminarusuario.php" target="_top"> <input type="button" value="Eliminar a un cliente" class="btn btn-light"> </a>

            </li>
            <li>
                <a href="resultadosusuarios.php" target="_top"> <input type="button" value="Ver Registros" class="btn btn-light"> </a>

            </li>





        </ul>



        <h4 class="text-info">Empleado</h4>

        <ul>
            <li>
                <a href="nuevoempleado.html " target="_top"> <input type="button " value="Dar de alta a un empleado " class="btn btn-light "> </a>
            </li>
            <li>
                <a href="modificarempleado.php " target="_top"> <input type="button " value="Modificar a un empleado " class="btn btn-light "> </a>
            </li>
            <li>
                <a href="eliminarempleado.php " target="_top"> <input type="button " value="Eliminar a un empleado " class="btn btn-light "> </a>
            </li>
            <li>
                <a href="resultadosempleados.php" target="_top"> <input type="button" value="Ver Registros" class="btn btn-light"> </a>

            </li>
        </ul>

        <h4 class="text-info">Proveedor</h4>

        <ul>
            <li>
                <a href="nuevoproveedor3.html " target="_top"> <input type="button " value="Agregar nuevo proveedor " class="btn btn-light "> </a>
            </li>
            <li>
                <a href="modificarproveedor.php " target="_top"> <input type="button " value="Modificar un proveedor " class="btn btn-light "> </a>
            </li>
            <li>
                <a href="eliminarproveedor.php " target="_top"> <input type="button " value="Eliminar un proveedor " class="btn btn-light "> </a>
            </li>
            <li>
                <a href="resultadosproveedor.php" target="_top"> <input type="button" value="Ver Registros" class="btn btn-light"> </a>

            </li>
        </ul>

        <h4 class="text-info">Inventario</h4>

        <ul>
            <li>
                <a href="nuevoinventario.html " target="_top"> <input type="button " value="Agregar al inventario " class="btn btn-light "> </a>
            </li>
            <li>
                <a href="modificarinventario.php " target="_top"> <input type="button " value="Modificar el inventario " class="btn btn-light "> </a>
            </li>
            <li>
                <a href="eliminarinventario.php " target="_top"> <input type="button " value="Eliminar del inventario " class="btn btn-light "> </a>
            </li>

            <li>
                <a href="resultadosinventario.php" target="_top"> <input type="button" value="Ver Registros" class="btn btn-light"> </a>

            </li>
        </ul>

        <h4 class="text-info">Refaccion</h4>

        <ul>
            <li>
                <a href="nuevarefaccion.php" target="_top"> <input type="button" value="Dar de alta una refaccion" class="btn btn-light"> </a>
            </li>
            <li>
                <a href="modificarrefaccion.php" target="_top"> <input type="button" value="Modificar una refaccion" class="btn btn-light"> </a>
            </li>
            <li>
                <a href="eliminarrefaccion.php" target="_top"> <input type="button" value="Eliminar una refaccion" class="btn btn-light"> </a>
            </li>
            <li>
                <a href="resultadosrefaccion.php" target="_top"> <input type="button" value="Ver Registros" class="btn btn-light"> </a>
    
            </li>
        </ul>
        -->

    </div>
</body>

</html>