<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Gestión de Servicios Turísticos</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
        }

        /* Estilo del encabezado */
        header {
            background-color: #1E90FF;
            padding: 20px;
            color: white;
            position: relative;
        }

        /* Banner en la parte superior */
        #banner img {
            width: 100%;
            height: auto;
        }

        /* Información de contacto */
        header .contact-info {
            margin-top: 10px;
            color: white;
            font-size: 14px;
        }

        /* Navegación en la parte inferior derecha del header */
        nav {
            position: absolute;
            bottom: 10px;
            right: 20px;
        }

        /* Estilos para el menú de navegación */
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

        /* Sección principal */
        section {
            padding: 20px;
            background-color: white;
        }

        /* Estilo del pie de página */
        footer {
            background-color: #D3D3D3;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        /* Estilos para los textos */
        h2, h3 {
            color: #333;
        }

        p {
            color: #666;
        }

        /* Estilos para el formulario de contacto */
        form {
            display: flex;
            flex-direction: column;
            max-width: 400px;
        }

        label {
            margin-top: 10px;
        }

        input, textarea {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            margin-top: 10px;
            padding: 10px;
            background-color: #1E90FF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0f7dcf;
        }
    </style>
</head>
<body>
    <header>
        <!-- Banner ubicado en la parte superior -->
        <div id="banner">
            <img src="img/banner.png" alt="Imagen de Chiapas" style="width:100%; height:auto;">
        </div>

        <!-- Información de contacto -->
        <div class="contact-info">
            <p>Informes y reservaciones 967 678 93 32</p>
            <p>Contáctanos por Whatsapp 967 136 45 81 - 967 683 38 47</p>
        </div>
        
        <h1>Plataforma de Gestión Inteligente de Servicios Turísticos</h1>
        
        <!-- Menú de navegación -->
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="reservar.php">Reservar</a></li>
                <li><a href="paquetes.php">Paquetes</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección de Contacto -->
    <section>
        <h2>Contacto</h2>
        <p>¿Tienes alguna pregunta o consulta? Contáctanos para obtener más información.</p>
        <form id="contactForm">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Enviar</button>
        </form>
        <div id="response"></div>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Gestión Inteligente de Servicios Turísticos</p>
    </footer>

    <!-- JavaScript para manejar el envío de formulario de contacto -->
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            document.getElementById('response').innerHTML = `
                <p>Gracias, ${name}. Hemos recibido tu mensaje y te responderemos pronto a ${email}.</p>
            `;
        });
    </script>
</body>
</html>
