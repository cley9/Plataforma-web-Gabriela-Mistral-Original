
 <?php
 include('conex.php');
 // para insertar los datos
 if(isset($_POST["subir"])){// el name del submit
   $titulo = $_POST["nombre_actividad"];

       if(isset($_FILES['file'])){//existe
           $nombreImg=$_FILES['file']['name'];
           $ruta=$_FILES['file']['tmp_name'];
           $destino="Archivos/".$nombreImg;  // ubicación donde se guarda la imagen
           //$route= "archivo 2020".$fileName; // rutta de la img o archivo
            if(copy($ruta,$destino)){
                 $sql = "INSERT INTO registro_actividades (name_Actividad, Tipo_formato) VALUES (:miName, :miDescription)";
                 $resultado = $base->prepare($sql);//es metodo de la clase pdo
                 $resultado->execute(array(":miName"=>$titulo, ":miDescription"=>$destino));
                 echo 'archivo subido';
                 echo "<a href='mostrar.php' download='archivo'   >mostarar archivos </a>";
                 }
               }
      
     }

  ?>

     
     
