<?php

  //require("head_style.php");
  include("head_style.php");
 ?>


 <?php
 include('conex.php');
 // para insertar los datos
 if(isset($_POST["subir"])){// el name del submit
   $titulo = $_POST["nombre_actividad"];/* //mostrar_actividad.php  descripcion
   $contenido = $_POST["contenido"];
   $imagen; // variable sin usar
   $logo_diario = $_POST["logo_diario"];*/
   /*
   $fuente = $_POST["fuente"];
   $fecha = date("Y/m/d");*/
 //echo "dfdf";

       if(isset($_FILES['file'])){//existe
           $nombreImg=$_FILES['file']['name'];
           $ruta=$_FILES['file']['tmp_name'];
           $destino="Archivos/".$nombreImg;  // ubicación donde se guarda la imagen

           //$route= "archivo 2020".$fileName; // rutta de la img o archivo
            if(copy($ruta,$destino)){
                   $sql = "INSERT INTO registro_actividades (name_Actividad, Tipo_formato) VALUES (:miName, :miDescription)";
                 $resultado = $base->prepare($sql);//es metodo de la clase pdo
               $resultado->execute(array(":miName"=>$titulo, ":miDescription"=>$destino));

                  // echo 'archivo subido';
                //   echo "<a href='mostrar.php' download='archivo'   >mostarar archivos </a>";
                 }
               }
             }



  ?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <div class="alert alert-success text-center " role="alert">
        Bienvenido alumno, esta semana tiene una nueva actividad
        <a href="#" class="alert-link">link</a>.Gracias
      </div>

     <?php

     include('conex.php');
     //
     $consulta=$base->query("SELECT * FROM registro_actividades ")->fetchAll(PDO::FETCH_OBJ); // where id=9;
    /*   foreach ($consulta as $key) {
      //$key++;
     echo "".$key->id."<br>";
     echo "<a href=".$key->Tipo_formato."  target='_blank' >".$key->name_Actividad." </a>"."<br>";
//
echo "<table><tbody> <tr> <td>".$key->id."</td> </tr> <tbody>"."<br><table>";
  }*/

      echo "
      <h2 class='text-primary text-center'>Actividades Recientes </h2>
      <hr><br>
      <div class='row'>
          <div class='col-md-4'>

          </div>

      <div class='text-center'>

      <table class='table table-responsive table-hover  align-center  '>

      <thead class='text-success'>
      <tr>
          <th>id</th>
          <th>Nombre de la actividad</th>
          <th>actividad</th>
      </tr>
      </thead>
    ";
foreach ($consulta as $key) {
echo "
<tbody >
<tr>
  <td>".$key->id."</td>
  <td> <a href=".$key->Tipo_formato."  target='_blank' >".$key->name_Actividad." </a>"."<br></td>
  <td>".$key->id."</td>
</tr> <tbody>";

 }
 echo "</table></div></div>";
 include("footer_style.php");
 ?>


    </body>
  </html>
