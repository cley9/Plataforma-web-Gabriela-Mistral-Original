
<?php
//include('Println/cn.php');
$usuario=$_POST['email']; //captura de name
$contraseña=$_POST['password'];

// metodo
session_start(); // medodo para hacer sesiones en php
$_SESSION['email']=$usuario;// usuario

// conectiion dba  -------------------------------------------------------------------------------

//$conexion=mysqli_connect("localhost","root","12345","loggin");
//$conexion=mysqli_connect("localhost","cley","sac#javascrip12","registro");
$conexion = mysqli_connect("localhost", "root", "", "registro");

//////   ----------------------- consulta a la dba
$consulta_docente="SELECT*FROM login_docente where email='$usuario' and password='$contraseña'";
$resultado_docente=mysqli_query($conexion,$consulta_docente); //es para la consulta

$filas_docente=mysqli_num_rows($resultado_docente); /// mysqli_num_rows sirve para que almacene el resultado y valide

///login de Subir_Tarea_alumno class="btn btn-success btn-block" ------------------------------------



//---------------------------------------------------------------------
/// login de profesor
if($filas_docente){
 //echo "holads";
//  header("home.php");
//header("location:home.php");// ambos rutas son iguales
header("location:Registrar_nueva_tarea.php");

}else{

  include("docente.php"); //inclue todo como una libreria los caracteres de html


?>
<h1 class="bad">ERROR DE AUTENTIFICACION</h1>

<?php



}
mysqli_free_result($resultado_docente);   /// vota el resultado
mysqli_close($conexion);       // sierra la sesion



?>
