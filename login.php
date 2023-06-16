<?php
session_start();

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los datos del formulario
  $correo = $_POST["correo"];
  $contrasenna = $_POST["password"];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sakura_garden";
  // Crear la conexión
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Verificar la conexión
  if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
  }
  // Consulta de selección en la tabla "usuarios" para verificar el correo y contraseña
  $sql = "SELECT correo_usuario, contrasena_usuario FROM usuarios WHERE correo_usuario = '$correo' AND contrasena_usuario = '$contrasenna'";
  $result = $conn->query($sql);
  if ($result->num_rows == 1) {
    // Autenticación exitosa, establecer la sesión y redirigir a otra página
    $_SESSION["correo"] = $correo;
    header("Location: menu.html");
    exit();
  } else {
    // Autenticación fallida, redirigir a una página de error
    header("Location: login.php");
    exit();
  }

  // Cerrar la conexión
  $conn->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="sakura-garden-logo.png" type="image">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
@font-face {
  font-family: 'sakura';
  src: url('CFGeneralTao-Regular.ttf');
}
html {
  background: #333;
  background-size: cover;
  font-size: 10px;
  height: 100%;
  overflow: hidden;
  position: absolute;
  text-align: center;
  width: 100%; }
  .stark-login form {
  background: #111;
  background: linear-gradient(#004746, #111111);
  border: 6px solid #00a4a2;
  box-shadow: 0 0 15px #00fffd;
  border-radius: 5px;
  display: inline-block;
  height: 220px;
  position: relative;
  z-index: 4;
  width: 500px;
  transition: 1s all; }

.stark-login input {
  background: #222;
  border-radius: 5px;
  box-shadow: 0 2px 0 #000;
  color: #888;
  display: block;
  font-family: 'sakura';
  font-size: 13px;
  font-size: 1.3rem;
  height: 40px;
  margin: 20px auto 10px;
  padding: 0 10px;
  text-shadow: 0 -1px 0 #000;
  width: 400px; }
.stark-login input:focus {
  animation: box-glow 1s ease-out infinite alternate;
  background: #0B4252;
  background: linear-gradient(#333933, #222922);
  border-color: #00fffc;
  box-shadow: 0 0 5px rgba(0, 255, 253, 0.2), inset 0 0 5px rgba(0, 255, 253, 0.1), 0 2px 0 black;
  color: #efe;
  outline: none; }
.stark-login input:invalid {
  border: 2px solid red;
  box-shadow: #333, inset 0 0 5px rgba(255, 0, 0, 0.1), 0 2px 0 black; }
.stark-login button {
  animation: input-entry 3s ease-in;
  background: #222;
  background: linear-gradient(#333333, #222222);
  box-sizing: content-box;
  border: 1px solid #444;
  border-left-color: #000;
  border-radius: 5px;
  box-shadow: 0 2px 0 #000;
  color: #fff;
  display: block;
  font-family: 'sakura';
  font-size: 13px;
  font-weight: 400;
  height: 40px;
  line-height: 40px;
  margin: 20px auto;
  padding: 0;
  position: relative;
  text-shadow: 0 -1px 0 #000;
  width: 400px;
  transition: 1s all; }
.stark-login button:hover,
.stark-login button:focus {
  background: #0C6125;
  background: linear-gradient(#393939, #292929);
  color: #00fffc;
  outline: none;
  transition: 1s all; }
.stark-login button:active {
  background: #292929;
  background: linear-gradient(#393939, #292929);
  box-shadow: 0 1px 0 #000, inset 1px 0 1px #222;
  top: 1px; }
  header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      margin: 0 auto; 
      text-align: center;
      display: block;
    }
  </style>
</head>
<body>
  <header>
  <img id="logo" src="sakura-garden-logo.png" alt="Logo del restaurante" height="200px">
</header>
<section class="stark-login">
  <form action="" method="POST"> <!-- Agregamos el atributo method con el valor POST -->
    <div id="fade-box">
      <input type="text" name="correo" id="correo" placeholder="CORREO" required>
        <input type="password" name="password" placeholder="CONTRASEÑA" required>
          <button type="submit">ENTRAR</button> <!-- Cambiamos el botón para que sea de tipo submit -->
        </div>
      </form>
</body>
</html>