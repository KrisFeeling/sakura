<?php
// Configuración de la conexión a la base de datos
$servername = "localhost"; // Nombre del servidor (por defecto: localhost)
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$dbname = "sakura_garden"; // Nombre de la base de datos

// Crear una conexión a la base de datos
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores en la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los datos del formulario
  $productos = isset($_POST["productos"]) ? $_POST["productos"] : [];
  $cantidades = [];
  $precioTotal = 0;

  // Obtener las cantidades de los productos
  foreach ($productos as $producto) {
    $cantidadInputName = "cantidad_" . str_replace(" ", "_", $producto);
    $cantidades[$producto] = isset($_POST[$cantidadInputName]) ? $_POST[$cantidadInputName] : 0;
  }

  // Calcular el precio total
  foreach ($productos as $producto) {
    $precioProducto = calcularPrecioProducto($producto);
    $cantidad = $cantidades[$producto];
    $precioTotal += $precioProducto * $cantidad;
  }

  // Insertar datos en la base de datos

  // 1. Insertar en la tabla deliveries_online
  $idUsuario = 1; // ID del usuario que realiza el pedido (debes obtenerlo desde la sesión o el formulario)
  $fechaDeliveryOnline = date("Y-m-d"); // Obtener la fecha actual
  $horaDeliveryOnline = date("H:i:s"); // Obtener la hora actual
  $direccionDeliveryOnline = isset($_POST["direccion"]) ? $_POST["direccion"] : "";
  $sqlDeliveriesOnline = "INSERT INTO deliveries_online (id_usuario, fecha_delivery_online, hora_delivery_online, direccion_delivery_online) VALUES ($idUsuario, '$fechaDeliveryOnline', '$horaDeliveryOnline', '$direccionDeliveryOnline')";
  // Ejecutar la consulta para insertar en la tabla deliveries_online
  if ($conexion->query($sqlDeliveriesOnline) === TRUE) {
    $idDeliveryOnline = $conexion->insert_id;

    // 3. Insertar en la tabla detalles_deliveries_online
    foreach ($productos as $producto) {
      $cantidad = $cantidades[$producto];
      $precioProducto = calcularPrecioProducto($producto);
      $precioTotalDetalle = $precioProducto * $cantidad;
      $sqlDetallesDeliveriesOnline = "INSERT INTO detalles_deliveries_online (ID_delivery_online, ID_plato, Cantidad_detalle_delivery_online, Precio_total_detalle_delivery_online) VALUES ($idDeliveryOnline, '$producto', $cantidad, $precioTotalDetalle)";
      // Ejecutar la consulta para insertar en la tabla detalles_deliveries_online
      $conexion->query($sqlDetallesDeliveriesOnline);
    }

    // 4. Insertar en la tabla factura
    $sqlFactura = "INSERT INTO factura (ID_detalle_delivery_online) VALUES ($idDeliveryOnline)";
    // Ejecutar la consulta para insertar en la tabla factura
    $conexion->query($sqlFactura);

    // Mostrar la vista previa de la factura
    echo "<h2>Vista previa de la factura:</h2>";
    echo "<img src='sakura-garden-logo.png' alt='Logo del restaurante' width='200'>";
    echo "<h3>Detalles del Pedido:</h3>";
    echo "<ul>";
    foreach ($productos as $producto) {
      echo "<li>" . $producto . " - Cantidad: " . $cantidades[$producto] . "</li>";
    }
    echo "</ul>";
    echo "<h3>Precio Total: $" . $precioTotal . "</h3>";

    // Botón para imprimir la factura
    echo "<button class='imprimir-button' onclick='imprimirFactura()'>Imprimir Factura</button>";
  } else {
    echo "Error: " . $sqlDeliveriesOnline . "<br>" . $conexion->error;
  }
}

function calcularPrecioProducto($producto) {
  $precios = [
    "Wanton Mee" => 8,
    "El pato Pekinés" => 35,
    "Zongzi" => 4,
    "Chow Mein"=> 12,
    "Huo Guo" => 30,
    "Sushi" => 3,
    "Ramen" => 18,
    "Udon" => 10,
    "Takoyaki" => 7,
    "Onigiri" => 4,
    "Kimchi" => 8,
    "Samgyeopsal" => 13,
    "Bulgogi" => 20,
    "Hobakjuk" => 9,
    "Japchae" => 12
  ];

  return $precios[$producto];
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Factura</title>
  <style>
    @media print {
      .imprimir-button {
        display: none;
      }
    }
  </style>
</head>

<body>
  <h1>Factura</h1>



  <script>
    function imprimirFactura() {
      window.print();
    }
  </script>
</body>

</html>
