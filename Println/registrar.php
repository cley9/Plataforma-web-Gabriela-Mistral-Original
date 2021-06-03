<?php

include("cn.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
      $apellido=trim($_POST['apellido']);
      $dni=trim($_POST['dni']);
      $telefono=trim($_POST['telefono']);
      $nivel=trim($_POST['nivel']);

      $fecha_namiento=trim($_POST['date']);
      $sexo=trim($_POST['hm']);

  $consulta = "INSERT INTO matricula(name, email, apellido, dni,telefono, nivel_academico, fecha_nacimiento,sexo) VALUES ('$name','$email','$apellido','$dni','$telefono','$nivel','$fecha_namiento','$sexo')";
  $resultado = mysqli_query($conexion,$consulta); // la base de dato donde irea
	    if ($resultado) {
	    	?>
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?>
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?>
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
