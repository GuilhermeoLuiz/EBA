<!DOCTYPE html>
<html>
<head>
    <title>Galeria de Imagens</title>
    <link rel="stylesheet" type="text/css" href="styleupload.css">
</head>
<body>
    <h1>Galeria de Imagens</h1>

    <!-- Formulário de Upload -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Enviar Imagem" name="submit">
    </form>

</body>
</html>
