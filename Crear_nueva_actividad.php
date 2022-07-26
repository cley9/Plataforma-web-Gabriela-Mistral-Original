<?php
include('include/header.php'); 
?>

		    <div style="height: 30px;"></div>
		      <div class="container">
		          <div class="row">
		              <div class="col-lg-12">
		              <div class="card shadow-lg p-3 mb-5 bg-white ">
		          <div class="card-header text-center"> <h1>Crear nueva actividad</h1></div>
		          <div class="card-body">

		            <p>Complete el siguiente formulario para su posterior inscripcion de su hijo(a) :</p><br>


  <form class="" action="mostrar_actividad.php" method="POST" enctype="multipart/form-data">

<div class="form-group">
													<label for="inputAddress">NOMBRE DE LA ACTIVIDAD:</label>
													<input type="text" name="nombre_actividad" class="form-control" id="inputAddress" placeholder="Escriba el nombre de la actividad">
												</div>

							          <div class="form-row">

							            <div class="form-group col-md-4">
							              <label for="inputState">FORMATO DE ENTREGA:</label>



							              <select id="inputState" class="form-control">
							                <!--
							                <option selected>Choose...</option>
							                <option>...</option>-->
							                <option selected value="0"> Elige una opción </option>

															<option value="3">PDF</option>
															<option value="4">RAR</option>
															<option value="5">JPG</option>

														</select>
													</div>




							            <div class="form-group col-md-2">
							              <label for="inputZip">FECHA DE ENTREGA:</label>
							              <input type="date" class="form-control" id="inputZip">
							            </div>

													<div class="form-group col-md-2">
													 <label for="inputZip">HORA DE ENTREGA:</label>
													 <input type="time" class="form-control" id="inputZip">
												 </div>

							          </div>
 <div class="mb-3 was-validated">   	<!-- COMBAK: --- comprobacion   was-validated -->
									<label for="validationTextarea">COMENTARIOS </label>
									<textarea class="form-control is-invalid" id="validationTextarea" placeholder="Redactar comentario" required></textarea>
									<div class="invalid-feedback">
										Porfavor escriba su comentario
									</div>
								</div>
							<p>SUBIR FICHA ADICIONAL</p>
						 				<p>Selecciona tu archivo adicional a subir</p>
						 				<form method="post" action="" enctype="multipart/form-data">
						 					<div class="form-group">
						 						<input type="file" class="form-control-file" id="archvio" aria-describedby="fileHelp" name="file">
						 						<small id="fileHelp" class="form-text text-muted">Archivos permitidos (.pdf .rar .jpg)</small>
						 					</div>
						 					<!--<button type="submit" class="btn btn-info" name="subir">GUARDAR CAMBIOS</button>-->
											<input type="submit" name="subir" value="GUARDAR CAMBIOS">
										<!--	<input type="submit"class="btn btn-info" name="subir" value="">GUARDAR CAMBIOS-->
<button type="reset" class="btn btn-warning">Borrar</button>
<a href="Registrar_nueva_tarea.php" class="btn btn-success" >Salir</a>
<!--<a href="mostrar_actividad.php">mostarar archivos </a>-->


						 				</form>
		        </form>

		                        </div>
		                      </div>
		                    </div>


		              </div>
		          </div>
			    
<?php
include('include/footer.php'); 
?>
