<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paquetes - Gestión de Servicios Turísticos</title>
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

        /* Sección de contenido */
        section {
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

        .paquete img {
            width: 300px;
            height: auto;
            margin-top: 10px;
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

    <!-- Encabezado y navegación -->
    <header>
        <h1>Plataforma de Gestión Inteligente de Servicios Turísticos</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="reservar.php">Reservar</a></li>
                <li><a href="paquetes.php">Paquetes</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección de Paquetes -->
    <section>
        <h2>Paquetes Disponibles</h2>
        <p>Explore nuestros paquetes turísticos para disfrutar al máximo de Chiapas.</p>
        
        <div class="paquete">
            <h3>Paquete Aventura en la Selva</h3>
            <p>Rafting, senderismo y escalada. Disfruta de una experiencia inolvidable en la selva de Chiapas. Incluye tours guiados y alojamiento en cabañas ecológicas.</p>
            <p><strong>Precio: $500 USD</strong></p>
        </div>

        <div class="paquete">
            <h3>Paquete Cultural en Pueblos Mágicos</h3>
            <p>Visita a sitios arqueológicos y museos. Sumérgete en las tradiciones, cultura y gastronomía de los pueblos mágicos de Chiapas.</p>
            <p><strong>Precio: $400 USD</strong></p>
        </div>

        <div class="paquete">
            <h3>Paquete Cascadas y Montañas</h3>
            <p>Tours guiados por reservas ecológicas. Explora las impresionantes cascadas y montañas de Chiapas con guías especializados.</p>
            <p><strong>Precio: $450 USD</strong></p>
        </div>
    </section>

    <!-- Pie de página -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Gestión de Servicios Turísticos</p>
    </footer>

</body>
</html>
