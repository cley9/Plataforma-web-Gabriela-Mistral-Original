<?php
//      --------------------------------Version Moderna de conexion de PDO :
$Localhost = 'Localhost';
$Usuario_BD = 'root';
$Password_BD = '';
$Nombre_BD = 'dba_colegio';
try{
  $DB_con = new PDO("mysql:host={$Localhost};dbname={$Nombre_BD};charset=UTF8",$Usuario_BD,$Password_BD);
  $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // para que muestre los datos de los PDO::FETCH_OBJ
  //$DB_con->query("set names utf8;");
  $DB_con->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
  $DB_con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}
catch(PDOException $e){
  echo $e->getMessage();
}
?>
