<?php
$nombre_cliente = $_POST['nombre_cliente'];
$producto = $_POST['producto'];
$precio_unitario = $_POST['precio_unitario'];
$cantidad = $_POST['cantidad'];
$horario = $_POST['horario'];

$subtotal = $precio_unitario * $cantidad;
$impuesto = $subtotal * 0.16;
$total = $subtotal + $impuesto;

// Crear el contenido de la factura
$contenido_factura = "FACTURA\n\n";
$contenido_factura .= "Nombre del cliente: $nombre_cliente\n";
$contenido_factura .= "Producto: $producto\n";
$contenido_factura .= "Precio unitario: $".$precio_unitario."\n";
$contenido_factura .= "Cantidad: $cantidad\n";
$contenido_factura .= "Horario escogido: $horario\n\n";
$contenido_factura .= "Subtotal: $".$subtotal."\n";
$contenido_factura .= "Impuesto: $".$impuesto."\n";
$contenido_factura .= "Total: $".$total."\n";

// Guardar el contenido de la factura en un archivo de texto
$archivo_factura = fopen("factura.txt", "w") or die("No se pudo crear el archivo de factura.");
fwrite($archivo_factura, $contenido_factura);
fclose($archivo_factura);

echo "Factura generada correctamente. Se ha guardado en un archivo de texto.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <link rel="icon" href="icon.png" type="image/gif" />
   <title>Entrada</title>
   <link rel="stylesheet" href="" />
  </head>
  <body>
	<h1>Factura</h1>
	<p>gracias por su compra</p>
    <a href="factura.pdf" download>Descargar factura en formato PDF</a>
</body>
</html>