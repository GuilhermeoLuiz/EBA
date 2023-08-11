<link rel="stylesheet" type="text/css" href="styleupload.css">
<?php
$target_dir = __DIR__ . "/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$uploadOk = 1;

// Verificar se o arquivo é uma imagem
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check === false) {
        echo "O arquivo não é uma imagem.";
        $uploadOk = 0;
    }
}

// Verificar se o arquivo já existe
if (file_exists($target_file)) {
    echo "Desculpe, a imagem já existe.";
    $uploadOk = 0;
}

// Verificar o tamanho máximo do arquivo (opcional)
$maxFileSize = 5 * 1024 * 1024; // 5 MB
if ($_FILES["fileToUpload"]["size"] > $maxFileSize) {
    echo "Desculpe, a imagem é muito grande.";
    $uploadOk = 0;
}

// Permitir apenas alguns formatos de imagem (opcional)
$allowedFormats = array('jpg', 'jpeg', 'png', 'gif');
if (!in_array($imageFileType, $allowedFormats)) {
    echo "Desculpe, apenas JPG, JPEG, PNG e GIF são permitidos.";
    $uploadOk = 0;
}

// Se $uploadOk for igual a 0, significa que houve um erro
if ($uploadOk == 0) {
    echo "Desculpe, sua imagem não foi enviada.";
// Caso contrário, tenta fazer o upload
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "A imagem foi enviada com sucesso.";
        // Opcional: Redirecionar para a página da galeria após o upload.
        // header("Location: /galeria/");
    } else {
        echo "Desculpe, houve um erro ao enviar a imagem.";
    }
}
?>

