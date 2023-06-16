<?php
// Iniciar la sesión
session_start();

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los datos del formulario
  $nombres = $_POST["nombres"];
  $apellidos = $_POST["apellidos"];
  $correo = $_POST["correo"];
  $celular = $_POST["celular"];
  $password = $_POST["pass"];
  $servername = "localhost";
  $username = "root";
  $dbpassword = ""; // Cambia esta línea si tienes una contraseña definida
  $dbname = "sakura_garden";

  // Crear la conexión
  $conn = new mysqli($servername, $username, $dbpassword, $dbname);

  // Verificar la conexión
  if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
  }

  // Consulta de inserción en una tabla "usuarios"
  $sql = "INSERT INTO usuarios (nombre_usuario, apellido_usuario, correo_usuario, telefono_usuario, contrasena_usuario) VALUES ('$nombres', '$apellidos', '$correo', '$celular', '$password')";

  if ($conn->query($sql) === TRUE) {
    // Registro exitoso, redirigir a otra página
    header("Location: menu.html");
    exit();
  } else {
    // Ocurrió un error, redirigir a una página de error
    header("Location: registro.php");
    exit();
  }

  // Cerrar la conexión
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulario Registro</title>
  <style>
    @font-face {
  font-family: 'sakura';
  src: url('CFGeneralTao-Regular.ttf');
}
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    background-image: url('fondo.jpg');
    color:'#FEFEE2';
    background-size: 100%;
  }
  
  .form-register {
    width: 400px;
    padding: 40px;
    margin: auto;
    margin-top: 150px;
    border-radius: 4px;
    font-family: 'sakura';
    color: white;
    box-shadow: 7px 20px 37px #000;
  }
  
  .form-register h4 {
    font-size: 22px;
    margin-bottom: 20px;
  }
  
  .controls {
    width: 100%;
    background: #24303c;
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 16px;
    border: 1px solid #1f53c5;
    font-family: 'sakura';
    font-size: 18px;
    color: white;
  }
  
  .form-register p {
    height: 40px;
    text-align: center;
    font-size: 19px;
    line-height: 20px;
  }
  
  .form-register a {
    color: #FEFEE2;
    text-decoration: none;
  }
  
  .form-register a:hover {
    color: white;
    text-decoration: underline;
  }
  
  .form-register .botons {
    width: 100%;
    background: #1f53c5;
    border: none;
    padding: 12px;
    color: white;
    margin: 16px 0;
    font-size: 16px;
  }


  .form-register2 {
    width: 350px;
    background: #24303c;
    padding: 15px;
    margin: auto;
    margin-top: 10px;
    margin-bottom: 10px;
    border-radius: 4px;
    font-family: 'sakura';
    color: white;
    box-shadow: 7px 13px 37px #000;
  }
  
  .form-register2 h4 {
    font-size: 22px;
    margin-bottom: 20px;
  }
  .form-register2 p {
    height: 40px;
    text-align: center;
    font-size: 18px;
    line-height: 40px;
  }
  
  .form-register2 a {
    color: white;
    text-decoration: none;
  }
  
  .form-register2 a:hover {
    color: white;
    text-decoration: underline;
  }
  
  .form-register2 .botons {
    width: 100%;
    background: #1f53c5;
    border: none;
    padding: 12px;
    color: white;
    margin: 16px 0;
    font-size: 16px;
  }
  
  </style>
</head>
<body>
  <section class="form-register">
    <h1>Formulario Registro</h1>
    <form method="POST" action="">
      <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre" required>
      <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido" required>
      <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo" required>
      <input class="controls" type="text" name="celular" id="celular" placeholder="Ingrese su Celular" required>
      <input class="controls" type="password" name="pass" id="pass" placeholder="Ingrese su password" required>
  
      <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
      <input class="botons" type="submit" value="Registrar">
      <p>¿Ya tengo Cuenta? Entonces <a href="login.html">Inicia sesión</a></p>
    </form>
  </section>

</body>
</html>