<?php
    $nombre = "Cristian Andres Flores Espín";
    $profesion = "Estudiante de Desarrollo de Software";
    $fechaNacimiento = "8 de febrero de 1995";
    $ubicacion = "Pucará, Apuela, Cotacachi, Imbabura, Ecuador";
    $institucion = "Instituto Superior Tecnológico Ibarra";
    $hobby = "Tocar la Guitarra y Jugar Futbol";

    $presentacion = "Saludos Bienvenido a mi sitio web personal. Actualmente me encuentro cursando la carrera de Desarrollo de Software en línea, combinando mi pasión por la tecnología y la programación con mis actividades en la agricultura y la ganadería sostenible.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil Profesional</title>
    <link rel="stylesheet" href="css/miestilo.css">
</head>
<body>

    <div class="perfil-container">
        
        <header class="perfil-header">
            <img src="imagen/perfil.webp" alt="Fotografía de Perfil" class="perfil-foto">
            <h1><?php echo $nombre; ?></h1>
            <p class="tagline"><?php echo $profesion; ?></p>
        </header>

        <main class="perfil-contenido">
            
            <section class="biografia">
                <h2>Presentación</h2>
                <p><?php echo $presentacion; ?></p>
            </section>

            <section class="datos-personales">
                <h2>Datos del Autor</h2>
                <ul>
                    <li><strong>Nacimiento:</strong> <?php echo $fechaNacimiento; ?></li>
                    <li><strong>Residencia:</strong> <?php echo $ubicacion; ?></li>
                    <li><strong>Institución:</strong> <?php echo $institucion; ?></li>
                    <li><strong>Hobby:</strong> <?php echo $hobby; ?></li>
                </ul>
            </section>

            <section class="formulario-seccion">
                <h2>Interactuar con Andres Flores </h2>
                <form action="index.php" method="post">
                    <label for="nombre_input">Ingrese su nombre:</label>
                    <input type="text" id="nombre_input" name="nombre" placeholder="Escriba su nombre ">
                    <label for="nombre_input">Ingrese su correo electronico:</label>
                    <input type="text" id="nombre_input" name="nombre" placeholder="Escriba su correo electronico">
                    <input type="submit" value="Enviar Datos">
                </form>
            </section>

        </main>

        <footer class="perfil-footer">
            <p>&copy; <?php echo date("Y"); ?> - Desarrollado en PHP</p>
        </footer>

    </div>

</body>
</html>