<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de Campo Blob</title>
</head>
<body>
    <h1>Ejemplo de guardado de imagen BLOB</h1>
    <p>Este ejemplo muestra como utilizar un campo blob en bases de datos MySQL</p>
    <p>Antes de ejecutar este form, por favor configurar los datos de conexión</p>
    <p>Como base, se provee un archivo <tt>config.php.example</tt> de ejemplo.</p>

    <form action="save.php" method="POST" enctype="multipart/form-data">
        <p>
            <label>Nombre</label>
            <input type="text" name="nombre">
        </p>

        <p>
            <label>Archivo</label>
            <input type="file" name="archivo">
        </p>

        <p>
            <input type="submit" name="Enviar" value="Enviar">
        </p>
    </form>
</body>
</html>
