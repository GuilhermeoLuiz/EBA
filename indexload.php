<!DOCTYPE html>
<html>
<head>
    <title>Galeria de Imagens</title>
    <link rel="stylesheet" type="text/css" href="styleupload.css">
</head>
<body>
    <h1>Galeria de Imagens</h1>

    <!-- Formulário de Upload -->
    <div class="container">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="fileToUpload">Escolha uma imagem:</label>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="hidden" name="pasta" value="<?php echo $_POST["pasta"]?> ">
        </div>
        <div class="form-group">
            <input type="submit" value="Enviar Imagem" name="submit">
        </div>
    </form>
    </div>

</body>
</html>
