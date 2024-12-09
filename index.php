<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo PHP</title>
</head>
<body>

    <h1><?php echo "Hola Mundo version 2"; ?></h1>
    <h2><?php echo "Mi nombre es Bryan Prueba"; ?></h2>
    <form method="post">
        <button type="submit" name="deploy">Iniciar Deploy</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deploy'])) {
        echo "<p>Felicidades, iniciaste un deploy en PHP</p>";
    }
    ?>

</body>
</html>
