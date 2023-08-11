<!DOCTYPE html>
<html>
<head>
    <title>Galeria de Imagens</title>
    <link rel="stylesheet" type="text/css" href="styleupload.css">
</head>
<body>
    <h1>Criar Galeria</h1>

    <!-- Formulário de Upload -->
    <div class="container">
    <form action="creategallery.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nome">Nome da Galeria:</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div class="form-group">
            <input type="submit" value="Criar Galeria" name="submit">
        </div>
    </form>
    </div>

</body>
</html>
