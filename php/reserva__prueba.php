<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Colegio Gabriela Mistral</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='Estilo.css'>
    <script src='main.js'></script>
</head>
<body>
    <img src="Logo.png">
    <br>
    <ul class="menu">
        <li><a href="informacion.html">Informacion Institucional </a></li>
        <li><a href="reserva.html">Reserva de matricula</a></li>
        <li><a href="opcion.php">Virtualizacion de tareas</a></li>
    </ul>
    <br>
    <p>Complete el siguiente formulario para su posterior inscripcion de su hijo(a)</p>
    <h1>FORMULARIO</h1>
    <form>
        <p>Nombres del alumno: <input type="text" name="nombre" size="40"></p>
        <p>Apellidos del alumno: <input type="text" name="apellidos" size="40"></p>
        <p>DNI del alumno: <input type="number" name="DNI" size="8"></p>
        <p>Email del alumno: <input type="email" id="email" name="email" size="40"></p>
        <p>Numero telefonico a contactar: <input type="text" name="telefono" size="8"></p>
        <p>Grado y nivel: <select name="OS">
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
         </select></p>
        <p>Fecha de nacimiento: <input type="date" name="fecha_nac"></p>
        <p>Sexo:
          <input type="radio" name="hm" value="h"> Masculino
          <input type="radio" name="hm" value="m"> Femenino
        </p>
        <p>
          <input type="submit" value="Enviar">
          <input type="reset" value="Borrar">
        </p>
      </form>

              <?php
              include("registrar.php");
              ?>
              <a href="Generador_impreta.php"> descargar </a>
</body>
</html>
