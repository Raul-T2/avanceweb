<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Servicios Turísticos</title>
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
        section#inicio {
            padding: 20px;
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center; /* Centra verticalmente los elementos dentro de la sección */
        }

        /* Imagen a la derecha del texto */
        .right-image {
            margin-left: 20px;
            max-width: 300px;
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
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="reservar.php">Reservar</a></li>
                <li><a href="paquetes.php">Paquetes</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección principal de la página -->
    <section id="inicio">
        <div class="content">
            <h2>¿Quiénes somos?</h2>
            <p>Somos una Gestión Inteligente de Servicios Turísticos, apasionada por compartir la belleza y riqueza cultural de Chiapas con el mundo. Conectamos a viajeros de todas partes con las maravillas naturales, las tradiciones ancestrales y la cálida hospitalidad de nuestro estado. Nuestra experiencia en el sector turístico y nuestro profundo conocimiento de Chiapas nos permiten diseñar itinerarios únicos y personalizados, que van desde aventuras en la selva hasta recorridos culturales por pueblos mágicos.</p>

            <h3>Misión</h3>
            <p>"Nuestra misión es brindar experiencias de viaje personalizadas y de alta calidad, superando las expectativas de nuestros clientes y creando recuerdos inolvidables. Es promover un turismo responsable y sostenible en Chiapas, contribuyendo a la conservación de los recursos naturales y al desarrollo de las comunidades locales. Para compartir la rica cultura y tradiciones de Chiapas con el mundo, promoviendo el intercambio cultural y fomentando el respeto por la diversidad."</p>

            <h3>Visión</h3>
            <p>"Ser la empresa líder en experiencias de viaje auténticas y transformadoras en Chiapas, conectando a viajeros de todo el mundo con la belleza natural y cultural de nuestro estado. Ser reconocidos como la operadora turística más sostenible y responsable de Chiapas, promoviendo el desarrollo de las comunidades locales y la conservación del medio ambiente."</p>
        </div>

        <!-- Imagen a la derecha -->
        <div class="right-image">
            <img src="img/imagen.png" alt="Imagen en la derecha" style="width:100%; height:auto;">
        </div>
    </section>

    <!-- Pie de página -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Gestión Inteligente de Servicios Turísticos</p>
        <p>La mejor opción para divertirte en Chiapas</p>
    </footer>
</body>
</html>
