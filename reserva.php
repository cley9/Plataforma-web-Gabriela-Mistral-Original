<?php
include('include/header.php'); 
?>
 <div style="height: 30px;"></div>
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
              <div class="card shadow-lg p-3 mb-5 bg-white ">
          <div class="card-header text-center"> <h1>Matricula </h1></div>
          <div class="card-body">

            <p>Complete el siguiente formulario:</p><br>





    <form   method="post">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nombres del alumno:</label>
              <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="ingrese el nombre">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Apellidos del alumno:</label>
              <input type="text" class="form-control" id="inputPassword4" name="apellido" placeholder="ingrese el apellido">
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">DNI del alumno:</label>
              <input type="text" class="form-control" id="inputEmail4" name="dni" max="7" maxlength="8" placeholder="Por ejemplo 42488903">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Email del alumno:</label>
              <input type="email" class="form-control" id="inputPassword4" placeholder="Email" name="email">
            </div>
          </div>


          <div class="form-group">
            <label for="inputAddress">Numero telefonico a contactar:</label>
            <input type="number" class="form-control" id="inputAddress" placeholder="Por ejemplo (+51) 911356983" name="telefono">
          </div>

          <div class="form-row">

            <div class="form-group col-md-4">
              <label for="inputState">Grado y nivel:</label>

              <select id="inputState" class="form-control" name="nivel">
                <!--
                <option selected>Choose...</option>
                <option>...</option>-->
                <option selected value="0"> Elige una opción </option>
                                    <optgroup label="Inicial">
                                    <option value="3">3 años</option>
                                    <option value="4">4 años</option>
                                    <option value="5">5 años</option>
                                </optgroup>
                                <optgroup label="Primaria">
                                    <option value="10">1º grado de primaria</option>
                                    <option value="11">2º grado de primaria</option>
                                    <option value="12">3º grado de primaria</option>
                                    <option value="13">4º grado de primaria</option>
                                    <option value="14">5º grado de primaria</option>
                                    <option value="15">6º grado de primaria</option>
                                </optgroup>
                                <optgroup label="Secundaria">
                                    <option value="10">1º grado de secundaria</option>
                                    <option value="11">2º grado de secundaria</option>
                                    <option value="12">3º grado de secundaria</option>
                                    <option value="13">4º grado de secundaria</option>
                                    <option value="14">5º grado de secundaria</option>
                                </optgroup>

              </select>







            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Fecha de nacimiento:</label>
              <input type="date" class="form-control" id="inputZip" name="date">
            </div>
          </div>





<!-- -------------------------------------------------------------------------------
          Sexo:
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Masculino </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2"> Femenino</label>
          </div>
          --------------------------------------------------------
  --->

<div class="form-group col-md-2">
Sexo:
<div class="">
  <input type="radio" name="hm" value="M" > Masculino
</div>
<div class="">
    <input type="radio" name="hm" value="F"> Femenino
</div>
</div>




          <div class="form-group  text-center">

          <button type="submit" class="btn btn-primary" name="register">Enviar</button>
    <button type="reset" class="btn btn-warning">Borrar</button>
  <a href="Println/Generador_impreta.php" target="_blank"   type="button" class="btn btn-success"> descargar </a>
          </div>



        </form>


                        </div>
                      </div>
                    </div>


              </div>
          </div>



        <?php
        // include("Println/registrar.php");
        ?>
         <!--
         <a href="Println/Generador_impreta.php" target="_blank"> descargar </a>
    <form class="" action="" method="post">
      nombre : <input type="text" name="name" value=""><br><br>
      preio  : <input type="text" name="precio_cliente" value=""><br><br>
      stock  : <input type="text" name="stock_product" value=""><br><br>
      <input type="submit" name="" value="envio de datos">
    </form>-->


    <?php
include('include/footer.php');              
?>