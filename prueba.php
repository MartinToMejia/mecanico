<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php // Conectarse.php
function Conectarse()
{
if (!($link=mysql_connect("localhost","miuser", "mipass")))
{
echo "Error conectando a la base de datos.";
exit();
}
if (!mysql_select_db("francos",$link))
{
echo "Error seleccionando la base de datos.";
exit();
}
return $link;
}
$link=Conectarse();
echo "Conexión con la Base de Datos Conseguida.";
mysql_close($link); //Cierra la conexión
?>
</body>
</html>