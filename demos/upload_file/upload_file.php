<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Subir de archivos</title>
    </head>
    <body>

        <h2 class="message">Gestionado las subida de archivos al servidor</h2>

        <main class="container">
            <fieldset>
                <legend>Subir archivo</legend>
                <form action="upload.php" method="POST" enctype="multipart/form-data" id="form">
                    <label for="files">Archivo</label>
                    <input type="file" id="files" name="files[]" multiple="multiple" required>
                    <input type="submit" value="Enviar" class="button">
                </form>
            </fieldset>
        </main>

    </body>
</html>
