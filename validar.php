<?php
//include('Println/cn.php');
$usuario=$_POST['email']; //captura de name
$contraseña=$_POST['password'];

// metodo
session_start(); // medodo para hacer sesiones en php
$_SESSION['email']=$usuario;// usuario

$conexion = mysqli_connect("localhost", "root", "", "registro");
//Login_studiante
//////   ----------------------- consulta a la dba
$consulta="SELECT*FROM Login_studiante where email='$usuario' and password='$contraseña'";
$resultado=mysqli_query($conexion,$consulta); //es para la consulta

$filas=mysqli_num_rows($resultado); /// mysqli_num_rows sirve para que almacene el resultado y valide

if($filas){
header("location:mostrar_actividad.php");// ambos rutas son iguales

}else{

  include("alumno_.php"); //inclue todo como una libreria los caracteres de html


?>
<h1 class="bad">ERROR DE AUTENTIFICACION</h1>

<?php



}
mysqli_free_result($resultado);   /// vota el resultado
mysqli_close($conexion);       // sierra la sesion



?>
