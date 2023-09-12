<?php
$target_dir = __DIR__ . "/" . trim($_POST["pasta"]) . "/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$allowedFormats = array('jpg', 'jpeg', 'png', 'gif', 'mp4', 'mov', 'avi', 'mkv');

// Verificar se é uma imagem ou vídeo
$checkImage = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
$checkVideo = (in_array($fileType, array('mp4', 'mov', 'avi', 'mkv')));

// Restante do código ...

// Verificar se o arquivo já existe
if (file_exists($target_file)) {
    echo "Desculpe, o arquivo já existe.";
    $uploadOk = 0;
}

// Verificar o tamanho máximo do arquivo
$maxFileSize = 1024 * 1024 * 1024; // 50 MB
if ($_FILES["fileToUpload"]["size"] > $maxFileSize) {
    echo "Desculpe, o arquivo é muito grande.";
    $uploadOk = 0;
}


// Se $uploadOk for igual a 0, significa que houve um erro
if ($uploadOk == 0) {
    echo "Desculpe, o arquivo não foi enviado.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "O arquivo foi enviado com sucesso.";
        // Opcional: Redirecionar para a página da galeria após o upload.
        // header("Location: /galeria/");
    } else {
        echo "Desculpe, houve um erro ao enviar o arquivo.";
    }
}
header("Location: /");
?>
<link rel="stylesheet" type="text/css" href="styleupload.css">
