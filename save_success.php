<!DOCTYPE html>
<html>
<head>
    <title>Se guardo con exito</title>
</head>
<body>
    <p>El documento se almaceno con exito</p>
    <p>Documento guardado:</p>
    <p><?= $nombre ?></p>
    <img src="data:image/<?= $extension ?>;base64,<?= base64_encode($archivo) ?>">

    <h2>Resto de la base almacenada</h2>
    <p>Aca se recuperan todos los registros guardados</p>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Archivo</th>
        </thead>
        <tbody>
            <?php foreach ($registros as $row) : ?>
                <tr>
                    <td><?= $row['nombre'] ?>.<?= $row['extension'] ?></td>
                    <td><img src="data:image/<?= $extension ?>;base64,<?= base64_encode($row['archivo']) ?>"></td>
                </tr>
            <?php endforeach ; ?>
        </tbody>
    </table>
</body>
</html>
