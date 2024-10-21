<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paquetes Turísticos - Gestión de Servicios Turísticos</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Estilo del banner */
        header {
            background-color: #1E90FF;
            padding: 20px;
            color: white;
            text-align: center;
        }

        /* Banner de la página */
        #banner img {
            width: 100%;
            height: auto;
        }

        /* Menú de navegación */
        nav {
            background-color: #87CEEB;
            text-align: center;
            padding: 10px 0;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-left: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 5px 10px;
            background-color: #b0c4de;
            border-radius: 5px;
        }

        nav ul li a:hover {
            background-color: #778899;
        }

        /* Estilos del contenido */
        .content {
            width: 80%;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        /* Estilo de los paquetes */
        .paquete {
            margin-bottom: 20px;
        }

        /* Estilos del formulario */
        form {
            margin-top: 30px;
        }

        form label, form input, form select {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #1E90FF;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Estilo del pie de página */
        footer {
            background-color: #D3D3D3;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>
<body>

    <!-- Banner -->
    <header>
        <h1>Paquetes Turísticos</h1>
    </header>

    <!-- Navegación -->
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="paquetes.php">Paquetes</a></li>
            <li><a href="reservar.php">Reservar</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </nav>

    <!-- Sección de paquetes turísticos -->
    <div class="content">
        <div class="paquete">
            <h3>Paquete Aventura en la Selva</h3>
            <img src="img/selva.png" alt="Aventura en la Selva" width="300">
            <p>Disfruta de una experiencia inolvidable en la selva de Chiapas. Incluye tours guiados y alojamiento en cabañas ecológicas.</p>
            <p><strong>Precio: $500 USD</strong></p>
        </div>
        
        <div class="paquete">
            <h3>Paquete Cultural en Pueblos Mágicos</h3>
            <img src="img/cultural.png" alt="Cultural en Pueblos Mágicos" width="300">
            <p>Visita los pueblos mágicos de Chiapas y sumérgete en sus tradiciones, cultura y gastronomía.</p>
            <p><strong>Precio: $400 USD</strong></p>
        </div>
        
        <div class="paquete">
            <h3>Paquete Cascadas y Montañas</h3>
            <img src="img/montañas.png" alt="Cascadas y Montañas" width="300">
            <p>Explora las impresionantes cascadas y montañas de Chiapas con este paquete turístico que incluye transporte y guías.</p>
            <p><strong>Precio: $450 USD</strong></p>
        </div>

        <!-- Formulario de reservas -->
        <h2>Reserva tu Paquete</h2>
        <form id="bookingForm">
            <label for="name">Nombre:</label>
            <input type="text" id="name" required>

            <label for="service">Paquete:</label>
            <select id="service" required>
                <option value="Aventura en la Selva">Aventura en la Selva</option>
                <option value="Cultural en Pueblos Mágicos">Cultural en Pueblos Mágicos</option>
                <option value="Cascadas y Montañas">Cascadas y Montañas</option>
            </select>

            <label for="date">Fecha de Reserva:</label>
            <input type="date" id="date" required>

            <input type="submit" value="Reservar">
        </form>

        <div id="confirmation"></div>
    </div>

    <!-- Pie de página -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Gestión Inteligente de Servicios Turísticos</p>
        <p>La mejor opción para divertirte en Chiapas</p>
    </footer>

    <script>
        const bookings = [];

        function createBooking(details) {
            const newBooking = { id: bookings.length + 1, ...details };
            bookings.push(newBooking);
            return newBooking;
        }

        document.getElementById('bookingForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const name = document.getElementById('name').value;
            const service = document.getElementById('service').value;
            const date = document.getElementById('date').value;

            const bookingDetails = { name, service, date };
            const newBooking = createBooking(bookingDetails);

            document.getElementById('confirmation').innerHTML = `
                <p>Gracias, ${newBooking.name}. Has reservado el paquete de ${newBooking.service} para el ${newBooking.date}.</p>
            `;
        });
    </script>

</body>
</html>
