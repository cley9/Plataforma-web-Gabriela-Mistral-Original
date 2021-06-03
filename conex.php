<?php


try{
//$base = new PDO('mysql:host=localhost; dbname=foto','cley','sac#javascrip12'); // host, BBDD, user, password (poner todo entre comillas)
$base = new PDO('mysql:host=localhost; dbname=registro','root',''); // host, BBDD, user, password (poner todo entre comillas)

$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$base->exec("SET CHARACTER SET UTF8");
/*if ($base) {
  // code...
  echo "conectado ";
}*/
//  $conexion = mysqli_connect("localhost", "root", "", "registro");



}catch(Exception $e){
	die("Error: " . $e->getMessagge());
	echo "Linea de error: " . $e->getLine();
}

 ?>
