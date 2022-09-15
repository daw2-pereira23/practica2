<?php
session_start();
$_SESSION['username'] = "SergioCotto";
$_SESSION['authuser'] = 1;
$_SESSION['password'] = "hola";
$_SESSION['edad'] = 15


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <title>Jugadores de futbol</title>
</head>
<body>
<form method="post" action="jugadores.php">
   <p>Enter your username: 
    <input type="text" name="user"/>
   </p>
   <p>Enter your password: 
    <input type="password" name="pass"/>
   </p>
   <p>Introduce tu edad
   <input type="text" name="edad">
   </p>
   <input type="submit" name="submit" value="Submit"/>
  </form> 
 <?php
if (isset($_GET["partidazo"])){
echo "El mejor partido de messi fue";
echo $_GET["partidazo"];
}
?>



</body>
</html>