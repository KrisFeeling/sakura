<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener el CI del usuario
  $ci = isset($_POST["ci"]) ? $_POST["ci"] : "";

  // Obtener los datos de la factura generados previamente en generar_factura.php
  $productos = isset($_POST["productos"]) ? $_POST["productos"] : [];
  $cantidades = [];
  $comentarios = isset($_POST["comentarios"]) ? $_POST["comentarios"] : "";
  $precioTotal = 0;

  foreach ($productos as $producto) {
    $cantidadInputName = "cantidad_" . str_replace(" ", "_", $producto);
    $cantidades[$producto] = isset($_POST[$cantidadInputName]) ? $_POST[$cantidadInputName] : 0;
  }

  foreach ($productos as $producto) {
    $precioProducto = calcularPrecioProducto($producto);
    $cantidad = $cantidades[$producto];
    $precioTotal += $precioProducto * $cantidad;
  }

  // Aquí puedes realizar las acciones adicionales con los datos de la factura y el CI del usuario
  // Por ejemplo, almacenar la factura en una base de datos o enviarla por correo electrónico

  // Ejemplo de almacenamiento en una base de datos
  // Aquí debes reemplazar los valores de conexión a la base de datos con los tuyos propios
  $servername = "localhost";
  $username = "tu_usuario";
  $password = "tu_contraseña";
  $dbname = "tu_base_de_datos";

  // Crear la conexión a la base de datos
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verificar si la conexión fue exitosa
  if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
  }

  // Insertar los datos de la factura en la base de datos
  $sql = "INSERT INTO facturas (ci, productos, cantidades, comentarios, precio_total)
          VALUES ('$ci', '" . implode(",", $productos) . "', '" . implode(",", $cantidades) . "', '$comentarios', $precioTotal)";

  if ($conn->query($sql) === TRUE) {
    echo "La factura se ha almacenado correctamente en la base de datos.";
  } else {
    echo "Error al almacenar la factura en la base de datos: " . $conn->error;
  }

  // Cerrar la conexión a la base de datos
  $conn->close();
}

function calcularPrecioProducto($producto) {
  // Lógica para calcular el precio del producto
  // ...
  return $precio;
}
?>
