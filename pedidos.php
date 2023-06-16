<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Pedidos</title>
  <style>
    /* Estilos CSS */

  </style>
</head>

<body>
  <h1>Página de Pedidos</h1>

  <!DOCTYPE html>
<html lang="es">
  <style>
    @font-face {
      font-family: 'sakura';
      src: url('CFGeneralTao-Regular.ttf');
    }

    body {
      font-family: sakura;
      margin: 0;
      padding: 0;
      background-color: #FEFEE2;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    section {
      margin: 40px;
    }

    .hidden {
      display: none;
    }

    .menu-item {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .menu-item .menu-item-image {
      flex: 0 0 30%;
      text-align: center;
    }

    .menu-item .menu-item-image img {
      width: 50%;
      height: auto;
    }

    .menu-item .menu-item-content {
      flex: 0 0 70%;
      padding-left: 20px;
    }

    @media (max-width: 767px) {
      .menu-item {
        flex-direction: column;
        align-items: flex-start;
      }

      .menu-item .menu-item-image {
        margin-bottom: 10px;
      }
    }
    .menu-container {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 20px;
    }

    .menu-item {
      border: 1px solid black;
      padding: 10px;
    }
    nav {
      text-align: center;
      margin-bottom: 20px;
    }

    nav a {
      display: inline-block;
      margin-right: 10px;
      color: #333;
      text-decoration: none;
    }

    nav a.active {
      font-weight: bold;
    }
  </style>
</head>

<body>
  <header>
    <img id="logo" src="sakura-garden-logo.png" alt="Logo del restaurante" height="200px">
    <h1>Página de Pedidos</h1>
  </header>

  <nav>
    <a href="#" data-menu-type="todos" class="active">Todos</a>
    <a href="#china" data-menu-type="china">Cocina China</a>
    <a href="#japonesa" data-menu-type="japones">Cocina Japonesa</a>
    <a href="#" data-menu-type="coreano">Cocina Coreana del Sur</a>
  </nav>

  <section id="menu">
    <h2>Menú</h2>

    <h3>Cocina China</h3>
    <div class="menu-item china">
      <div class="menu-item-image">
        <img src="plato1.jpg" alt="Plato chino 1">
      </div>
      <div class="menu-item-content">
        <h3>Wanton Mee</h3>
        <p>Ingredientes:</p>
        <ul>
          <li>Fideos wonton</li>
          <li>Pak choy</li>
          <li>Aceite vegetal</li>
          <li>Cerdo char siu</li>
          <li>Pimienta blanca molida</li>
          <li>Pimientos verdes</li>
          <li>Vinagre de arroz</li>
          <li>Envolturas cuadradas de wonton</li>
          <li>Carne de cerdo molida</li>
          <li>Camarones</li>
          <li>Huevo</li>
          <li>Jengibre</li>
          <li>Salsa de soja</li>
          <li>Salsa de ostras</li>
          <li>Caldo de pollo en polvo</li>
          <li>Aceite de sésamo</li>
          <li>Sal</li>
          <li>Azúcar</li>
          <li>Pimienta blanca molida</li>
          <li>Cebolletas</li>
      
          <li>Dientes de ajo</li>
          <li>Setas chinas</li>
          <li>Agua</li>
          <li>Almidón de maíz</li>
          <li>Aceite de ajo</li>
        </ul>
      </div>
    </div>

    <div class="menu-item chino">
        <div class="menu-item-image">
          <img src="plato2.jpg" alt="Plato 2">
        </div>
        <div class="menu-item-content">
          <h3>El pato Pekinés</h3>
          <p>Ingredientes:</p>
          <ul>
            <li>Pato</li>
            <li>Panqueques</li>
            <li>Cebolletas</li>
            <li>Pepinos</li>
            <li>Salsa hoisin</li>
          </ul>
        </div>
      </div>
      <div class="menu-item chino">
        <div class="menu-item-image">
          <img src="plato3.jpg" alt="Plato 3">
        </div>
        <div class="menu-item-content">
          <h3>Zongzi</h3>
          <p>Ingredientes:</p>
          <ul>
            <li>Hoja de bambú</li>
            <li>Arroz glutinoso</li>
            <li>Carne de cerdo</li>
            <li>Hongos shiitake</li>
            <li>Frijoles azuki</li>
            <li>Sal</li>
            <li>Aceite de sésamo</li>
            <li>Salsa de soja</li>
            <li>Ajo</li>
            <li>Jengibre</li>
          </ul>
        </div>
      </div>
      <div class="menu-item platos chino">
        <div class="menu-item-image">
          <img src="plato14.jpg" alt="Plato 14">
        </div>
        <div class="menu-item-content">
          <h3>Chow Mein</h3>
          <p>Ingredientes:</p>
          <ul>
            <li>Fideos de huevo deshidratados</li>
          <li>Caldo de pollo</li>
          <li>brotes de soja</li>
          <li>pimiento rojo</li>
          <li>Cebollin</li>
          <li>Salsa de Soja</li>
          <li>Aceite de sésamo</li>
          <li>Aceite vegetal</li>
          </ul>
        </div>
      </div>
      <div class="menu-item platos chino">
        <div class="menu-item-image">
          <img src="plato15.jpg" alt="Plato 14">
        </div>
        <div class="menu-item-content">
          <h3>HUO GUO</h3>
          <p>Ingredientes:</p>
          <ul>
          <li>Costilla de cerdo </li>
          <li>Dientes de ajo</li>
          <li>Setas Shiitake</li>
          <li>Kamaboko (o bolitas de pescado o palitos de cangrejo)</li>
          <li>Col china</li>
          <li>Tofu</li>
          <li>Camarones</li>
          <li>Fish cake</li>
          </ul>
        </div>
      </div>
    <h3>Cocina Japonesa</h3>
    <div class="menu-item japones">
      <div class="menu-item-image">
        <img src="plato4.jpg" alt="Plato japonés 1">
      </div>
      <div class="menu-item-content">
        <h3>Sushi</h3>
        <p>Ingredientes:</p>
        <ul>
          <li>Pescado</li>
          <li>Arroz</li>
          <li>Nori (alga marina)</li>
          <li>Wasabi (rábano picante)</li>
        </ul>
      </div>
    </div>

    <div class="menu-item japones">
        <div class="menu-item-image">
          <img src="plato5.jpg" alt="Plato 5">
        </div>
        <div class="menu-item-content">
          <h3>Ramen</h3>
          <p>Ingredientes:</p>
          <ul>
            <li>Fideos</li>
            <li>Caldo de huesos de cerdo o pollo</li>
            <li>Carne</li>
            <li>Verduras</li>
          </ul>
        </div>
      </div>
      <div class="menu-item japones">
        <div class="menu-item-image">
          <img src="plato6.jpg" alt="Plato 6">
        </div>
        <div class="menu-item-content">
          <h3>Udon</h3>
          <p>Ingredientes:</p>
          <ul>
            <li>Fideos udon</li>
            <li>Caldo de pollo en polvo</li>
            <li>Salsa de soja</li>
            <li>Carne de cerdo</li>
            <li>Cebolletas</li>
            <li>Negi (cebolla verde japonesa)</li>
          </ul>
        </div>
      </div>
      <div class="menu-item japones">
        <div class="menu-item-image">
          <img src="plato7.jpg" alt="Plato 7">
        </div>
        <div class="menu-item-content">
          <h3>Takoyaki</h3>
          <p>Ingredientes:</p>
          <ul>
            <li>Masa de harina</li>
            <li>Trozos de pulpo</li>
            <li>Cebolletas</li>
            <li>Jengibre</li>
            <li>Salsa takoyaki</li>
            <li>Mayonesa</li>
            <li>Katsuobushi (copos de bonito seco)</li>
          </ul>
        </div>
      </div>
      <div class="menu-item japones">
        <div class="menu-item-image">
          <img src="plato8.jpg" alt="Plato 8">
        </div>
        <div class="menu-item-content">
          <h3>Onigiri</h3>
          <p>Ingredientes:</p>
          <ul>
            <li>Arroz</li>
            <li>Alga nori</li>
            <li>Rellenos (por ejemplo, salmón, atún, ciruela encurtida)</li>
          </ul>
        </div>
      </div>
    

    <h3>Cocina Coreana del Sur</h3>
    <div class="menu-item coreano">
      <div class="menu-item-image">
        <img src="pc1.jpg" alt="Plato coreano 1">
      </div>
      <div class="menu-item-content">
        <h3>Kimchi</h3>
        <p>Ingredientes:</p>
        <ul>
          <li>Repollo chino</li>
          <li>Sal</li>
          <li>Ajo</li>
          <li>Jengibre</li>
          <li>Cebolletas</li>
          <li>Pimiento rojo en polvo</li>
          <li>Harina de arroz glutinoso</li>
        </ul>
      </div>
    </div>

    <div class="menu-item coreano">
        <div class="menu-item-image">
          <img src="plato10.jpg" alt="Plato 10">
        </div>
        <div class="menu-item-content">
          <h3>Samgyeopsal</h3>
          <p>Ingredientes:</p>
          <ul>
            <li>Panceta de cerdo</li>
            <li>Salsa ssamjang</li>
            <li>Acompañamientos (por ejemplo, lechuga, pepino, kimchi)</li>
          </ul>
        </div>
      </div>
      <div class="menu-item coreano">
        <div class="menu-item-image">
          <img src="plato11.jpg" alt="Plato 11">
        </div>
        <div class="menu-item-content">
          <h3>Bulgogi</h3>
          <p>Ingredientes:</p>
          <ul>
            <li>Carne marinada (normalmente carne de res)</li>
            <li>Salsa de soja</li>
            <li>Azúcar</li>
            <li>Ajo</li>
            <li>Jengibre</li>
            <li>Cebolleta</li>
          </ul>
        </div>
      </div>
      <div class="menu-item coreano">
        <div class="menu-item-image">
          <img src="plato12.jpg" alt="Plato 12">
        </div>
        <div class="menu-item-content">
          <h3>Hobakjuk</h3>
          <p>Ingredientes:</p>
          <ul>
            <li>Calabaza</li>
            <li>Arroz glutinoso</li>
            <li>Azúcar</li>
            <li>Agua</li>
            <li>Sal</li>
            <li>Pipas de calabaza</li>
          </ul>
        </div>
      </div>
      <div class="menu-item coreano">
        <div class="menu-item-image">
          <img src="plato13.jpg" alt="Plato 13">
        </div>
        <div class="menu-item-content">
          <h3>Japchae</h3>
          <p>Ingredientes:</p>
          <ul>
            <li>Fideos de batata</li>
            <li>Carne de res</li>
            <li>Verduras (por ejemplo, champiñones, espinacas, zanahorias)</li>
            <li>Salsa de soja</li>
            <li>Azúcar</li>
            <li>Aceite de sésamo</li>
          </ul>
        </div>
      </div>

  </section>

  <script>
    const menuItems = document.querySelectorAll('.menu-item');
    const navLinks = document.querySelectorAll('nav a');

    navLinks.forEach(link => {
      link.addEventListener('click', function (e) {
        e.preventDefault();
        const menuType = this.dataset.menuType;

        menuItems.forEach(item => {
          if (menuType === 'todos' || item.classList.contains(menuType)) {
            item.classList.remove('hidden');
          } else {
            item.classList.add('hidden');
          }
        });

        navLinks.forEach(navLink => {
          navLink.classList.remove('active');
        });
        link.classList.add('active');
      });
    });
  </script>
<form method="POST" action="generar_factura.php">
  <h2>pedido</h2>
  <?php
  // Opciones del menú
  $opcionesMenu = [
    "Wanton Mee",
    "El pato Pekinés",
    "Zongzi",
    "Chow Mein",
    "Huo Guo",
    "Sushi",
    "Ramen",
    "Udon",
    "Takoyaki",
    "Onigiri",
    "Kimchi",
    "Samgyeopsal",
    "Bulgogi",
    "Hobakjuk",
    "Japchae"
  ];

  // Mostrar las opciones del menú
  foreach ($opcionesMenu as $opcion) {
    echo "<div class='menu-item'>";
    echo "<input type='checkbox' name='productos[]' value='" . $opcion . "'>" . $opcion;
    echo " - Cantidad: <input type='number' name='cantidad_" . str_replace(" ", "_", $opcion) . "' value='1' min='0'>";
    echo "</div>";
  }
  ?>

  <h2>Dirección de entrega</h2>
  <div>
    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="direccion">
  </div>

  <h2>Pedido Actual</h2>
  <div id="pedido-actual">
    <!-- Aquí se mostrarán los productos seleccionados -->
  </div>

  <h2>Precio Total</h2>
  <div id="precio-total">
    Total: $0
  </div><br>

  <input type="submit" value="Generar Factura">

  <script>
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    const cantidadInputs = document.querySelectorAll('input[type="number"]');
    const pedidoActual = document.getElementById('pedido-actual');
    const precioTotal = document.getElementById('precio-total');

    checkboxes.forEach((checkbox, index) => {
      checkbox.addEventListener('change', function() {
        const cantidadInput = cantidadInputs[index];
        const producto = checkbox.value;
        const cantidad = parseInt(cantidadInput.value);

        if (checkbox.checked) {
          pedidoActual.innerHTML += `${producto} - Cantidad: ${cantidad}<br>`;

          // Actualizar el precio total
          const precioProducto = calcularPrecioProducto(producto);
          if (precioProducto !== undefined) {
            const precioActual = parseInt(precioTotal.innerText.substring(8));
            const precioNuevo = precioActual + (precioProducto * cantidad);
            precioTotal.innerText = `Total: $${precioNuevo}`;
          }
        } else {
          pedidoActual.innerHTML = pedidoActual.innerHTML.replace(`${producto} - Cantidad: ${cantidad}<br>`, '');

          // Actualizar el precio total
          const precioProducto = calcularPrecioProducto(producto);
          if (precioProducto !== undefined) {
            const precioActual = parseInt(precioTotal.innerText.substring(8));
            const precioNuevo = precioActual - (precioProducto * cantidad);
            precioTotal.innerText = `Total: $${precioNuevo}`;
          }
        }
      });
    });

    cantidadInputs.forEach((input, index) => {
      input.addEventListener('change', function() {
        const checkbox = checkboxes[index];
        const producto = checkbox.value;
        const cantidad = parseInt(input.value);

        if (checkbox.checked) {
          // Actualizar el precio total
          const precioProducto = calcularPrecioProducto(producto);
          if (precioProducto !== undefined) {
            const precioActual = parseInt(precioTotal.innerText.substring(8));
            const precioNuevo = precioActual + ((precioProducto * cantidad) - (precioProducto * parseInt(input.defaultValue)));
            precioTotal.innerText = `Total: $${precioNuevo}`;
          }
        }

        input.defaultValue = cantidad;
      });
    });

    function calcularPrecioProducto(producto) {
      const precios = {
        "Wanton Mee": 8,
        "El pato Pekinés": 35,
        "Zongzi": 4,
        "Chow Mein": 12,
        "Huo Guo": 30,
        "Sushi": 3,
        "Ramen": 18,
        "Udon": 10,
        "Takoyaki": 7,
        "Onigiri": 4,
        "Kimchi": 8,
        "Samgyeopsal": 13,
        "Bulgogi": 20,
        "Hobakjuk": 9,
        "Japchae": 12
      };

      return precios[producto];
    }
  </script>
</form>
</body>

</html>

</body>

</html>
