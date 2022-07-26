<?php

include('../model/conexion.php');

// }
// mysqli_free_result($resultado);   /// vota el resultado
// mysqli_close($conexion);       // sierra la sesion
$email=$_POST['email'];
$password=$_POST['password'];
if (!empty($email)&&!empty($password)) {
  $stmt=$DB_con->prepare('SELECT * FROM user WHERE nombre =:u_nombre AND password = :u_password');

  // $stmt=$DB_con->prepare('SELECT * FROM user WHERE nombre ='.$email.'AND password ='.$password.'');
  // $v=
  $stmt->bindParam(':u_nombre',$email);//el bindParam no permine 2 tipos de valores de id
  $stmt->bindParam(':u_password',$password);
  $stmt->execute();
  $user= $stmt->fetchAll(PDO::FETCH_ASSOC);
  // var_dump($user);
  if ($user) {
  echo 12;
  // $user= $stmt->fetchAll(PDO::FETCH_ASSOC);
  # code...
} else {
  # code...
  echo 11111;
  }
  // echo $v;
  // foreach($producto_id_ as $item){
      

    // $stmt = $DB_con->prepare('INSERT INTO tbl_producto(db_nombre,db_precio,db_imagen,db_cantidad,db_newPrecio,db_descripccion,db_peso,db_img1) VALUES(:uname, :ujob, :upic , :p_cant, :p_newP , :p_descrip, :p_peso , :p_img1  )');
		// 	$stmt->bindParam(':uname',$username);
		// 	$stmt->bindParam(':ujob',$userjob);


  echo "hoa";
}else{
  echo 'no encontrado';
}
// $stmt=$DB_con->prepare('SELECT * FROM user');
// $stmt->execute();
// $producto_id_ = $stmt->fetchAll(PDO::FETCH_ASSOC);
// foreach($producto_id_ as $item){
    
//  echo $item['nombre'];
// }
// var_dump($stmr);

?>
<?php
// //include('Println/cn.php');
// $usuario=$_POST['email']; //captura de name
// $contraseña=$_POST['password'];

// // metodo
// session_start(); // medodo para hacer sesiones en php
// $_SESSION['email']=$usuario;// usuario

// $conexion = mysqli_connect("localhost", "root", "", "registro");
// //Login_studiante
// //////   ----------------------- consulta a la dba
// $consulta="SELECT*FROM Login_studiante where email='$usuario' and password='$contraseña'";
// $resultado=mysqli_query($conexion,$consulta); //es para la consulta

// $filas=mysqli_num_rows($resultado); /// mysqli_num_rows sirve para que almacene el resultado y valide

// if($filas){
// header("location:mostrar_actividad.php");// ambos rutas son iguales

// }else{

//   include("alumno_.php"); //inclue todo como una libreria los caracteres de html


?>
<!-- //  -->
<!-- <h1 class="bad">ERROR DE AUTENTIFICACION</h1> -->



