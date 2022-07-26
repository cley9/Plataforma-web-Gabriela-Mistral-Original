<?php
include('include/header.php'); 
?>
      <div class="" >
      <h3 class="text-center" >Acceda a su correo institucional estimado docente</h3>
    </div>

    <div class=" modal-body modal-dialog text-center">

            <div class=" container col-lg-11 ">
                <div class="modal-content col-lg-9 shadow-lg  ">

                    <form class="text-center" action="validar_docente.php" method="post"><br>
          <img src="img/login_docente.jfif" width="150px" height="150px">


                        <div class="form-group">
                          <label for="exampleInputEmail1">Correo</label>
                          <input type="email" class="form-control"name="email" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Email">
                          <small id="emailHelp" class="form-text text-muted">correo electronico valido</small>
                        </div>


                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" name="password"  id="exampleInputPassword1" placeholder="Password">
                        </div>
                  <!--       <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                       <button type="submit" class="btn btn-danger">Ingresar</button>




                          <a  href="Tareas2.php" type="submit" class="btn btn-success btn-block" >Ingresar</a>
                          <button type="submit" name="button">Ingresar</button>


                     -->

                    <!--    <button type="submit" class="btn btn-primary btn-block"  > Ingresar </button>   no tocar -->
                  <!--  <a href="Registrar_nueva_tarea.php"  class="btn btn-success btn-block">Ingresar</a>
-->
                      <input type="submit" class="btn btn-primary btn-block" name="" value="Ingresar">


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
<?php
include('include/footer.php');              
?>

