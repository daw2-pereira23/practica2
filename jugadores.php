<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi jugador favorito</title>;
</head>
<body>
<?php
 echo $_POST['user'];

 echo $_POST['pass'];

 echo $_POST['edad'];
 
 ?>
 <?php

echo "<a href='prueba.php?jugadorfav=messi&goles=97'>";
echo "Haz click para saber cual es mi jugador favorito";
echo "</a>";


session_start();
setcookie("user","SergioCotto",time()+5);
echo "Hola ";
echo $_COOKIE ['user'];

$_SESSION['authuser'] = 1;
$mejorpartido = urldecode("Barça - Atletic");
echo "<a href='prueba.php?partidazo=$mejorpartido'>";
echo "Haz click para saber cual fue el mejor partido de messi";
echo "</a>";
$nombre = isset($_GET['user']) ? $_GET['user'] : 'NULL';
echo "Ha habido un error tu usuario ahora pasa a ser: ";
echo $nombre;

date_default_timezone_set('America/New_York');
$month = date('c');
echo "Hoy es día: ";
echo $month;
?>



</body>
</html>