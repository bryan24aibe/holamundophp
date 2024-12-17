<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend CRUD App</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js" defer></script>
</head>
<body>
    <header>
        <h1>CRUD App - Frontend</h1>
    </header>

    <div class="container">
        <h2>Crear un Nuevo Elemento</h2>
        <input type="text" id="itemInput" placeholder="Ingresa un elemento">
        <button onclick="createItem()">Agregar</button>

        <h2>Elementos Guardados</h2>
        <div class="output" id="output"></div>
    </div>
</body>
</html>

