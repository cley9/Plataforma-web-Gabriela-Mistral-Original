
              <?php

                //require("head_style.php");
                include("head_style.php");
               ?>




        <div class="" >

          <h3 class="text-center" >Acceda a su correo institucional estimado alumno</h3>
        </div>



        <div class=" modal-body modal-dialog text-center">

                <div class=" container col-lg-11">
                    <div class="modal-content col-lg-9 shadow-lg">

                        <form class="text-center" action="validar.php" method="post"><br>


                            <img src="img/login_estudiante.png" width="150px" height="150px">


                            <div class="form-group">
                              <label for="exampleInputEmail1">Correo</label>
                              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Email">
                              <small id="emailHelp" class="form-text text-muted">correo electronico valido</small>
                            </div>


                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                            </div>
                    <!--        <button type="submit" class="btn btn-success btn-block"  href="Tareas2.php">Ingresar </button>  no tocar


                    <a href="Subir_Tarea_alumno.php"  class="btn btn-success btn-block">Ingresar</a>
                  -->


                          <input type="submit" class="btn btn-success btn-block" name="" value="Ingresar">

                          </form><br>

                          <!-- Collapse a form when user click Lost your password? link-->
                          <p><a href="#showForm" data-toggle="collapse" aria-expanded="false" aria-controls="collapse">¿Olvidaste tu contraseña?</a></p>
                          <div class="collapse" id="showForm">
                            <div class='well'>
                              <form action="password-recovery.php" method="post">
                                <div class="form-group">
                                  <input type="email" class="form-control" name="email" placeholder="Enter the email associated with the password." required>
                                </div>
                                <a href="https://accounts.google.com/b/0/AddMailService" button class="btn btn-dark">Recuperar contraseña</button></a>
                              </form>
                            </div>
                          </div>


                    </div>
                </div>
            </div>








    <!-- COMBAK: ---------------------------------------------------------------- -->



    <?php
        include("footer_style.php");
     ?>
