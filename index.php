<?php
// Definir la ruta base para las imágenes y el archivo CSS
$base_url = ''; // Puedes especificar la ruta base si es necesario, por ejemplo: '/ruta/a/tu/carpeta/'

// Función para incluir la cabecera y el inicio del contenido HTML
function include_header()
{
    global $base_url;
    echo <<<HTML
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promoción de Carbón</title>
    <link rel="stylesheet" href="{$base_url}InicioAserrin.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="{$base_url}AserrinA.jpg" alt="Carbón" class="header-image" />
            <h1>ASERRIN ARDENTE</h1>
        </header>

        <section class="main-content">
            <p>¡Descubre nuestro carbón de alta calidad, perfecto para tus asados y parrilladas!</p>
            <p>Beneficios:</p>
            <ul>
                <li>Calidad premium</li>
                <li>Larga duración</li>
                <li>Bajo en humo</li>
                <li>Perfecto para cualquier tipo de comidas</li>
            </ul>
        </section>
HTML;
}

// Función para incluir el pie de página y cerrar el contenido HTML
function include_footer()
{
    echo <<<HTML
        <footer>
            <p>&copy; <?php echo date("Y"); ?> Aserrin Ardiente</p>
        </footer>
    </div>
</body>
</html>
HTML;
}

// Incluir la cabecera y el inicio del contenido HTML
include_header();
?>

<!-- Sección de Características del Aserrin Ardiente -->
<section class="gallery">
    <h2>Características del nuevo Aserrin Ardiente</h2>
    <div class="image">
        <img src="<?php echo $base_url; ?>feature1.jpg" alt="Carbón encendido" />
        <p>Se enciende fácilmente y proporciona un calor constante.</p>
    </div>
    <div class="image">
        <img src="<?php echo $base_url; ?>feature2.jpg" alt="Barbacoa con carbón" />
        <p>Perfecto para lograr ese sabor ahumado auténtico en tus alimentos.</p>
    </div>
</section>

<!-- Sección de Galería de Imágenes -->
<section class="gallery" class="contenedor">
    <h2>Galería de Imágenes</h2>
    <div class="image">
        <img src="<?php echo $base_url; ?>gallery1.jpg" alt="Carbón en bolsa" />
    </div>
    <div class="image">
        <img src="<?php echo $base_url; ?>gallery2.jpg" alt="Preparando barbacoa" />
    </div>
    <div class="image">
        <img src="<?php echo $base_url; ?>gallery3.jpg" alt="Carbón de calidad" />
    </div>

    <h2>Proceso del carbón</h2>
    <div class="image">
        <img src="<?php echo $base_url; ?>gallery1.jpg" alt="Carbón en bolsa" />
    </div>
    <div class="image">
        <img src="<?php echo $base_url; ?>gallery2.jpg" alt="Preparando barbacoa" />
    </div>
    <div class="image">
        <img src="<?php echo $base_url; ?>gallery3.jpg" alt="Carbón de calidad" />
    </div>
</section>

<?php
// Incluir el pie de página y cerrar el contenido HTML
include_footer();
?>