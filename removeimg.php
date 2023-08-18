<?php
$dir = $_POST["pasta"]; // Substitua pelo caminho da pasta desejada

if (isset($_POST['excluir_arquivo'])) {
    $arquivoParaExcluir = $_POST['arquivo'];
    
    if (file_exists($arquivoParaExcluir)) {
        if (unlink($arquivoParaExcluir)) {
            echo "Arquivo '$arquivoParaExcluir' excluído com sucesso!";
        } else {
            echo "Erro ao excluir o arquivo '$arquivoParaExcluir'.";
        }
    } else {
        echo "O arquivo '$arquivoParaExcluir' não existe.";
    }
    header("Location: /");
}

$conteudoPasta = scandir($dir);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Excluir Arquivos</title>
    <style>
        li{
            display: inline-block;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h2>Lista de Arquivos na Pasta</h2>
    <form method="post" action="">
        <input type="hidden" name="pasta" value="<?php echo $_POST["pasta"]; ?>">
        <ul>
            <?php foreach ($conteudoPasta as $item) {
                if ($item != '.' && $item != '..') {
                    echo '<li>';
                    echo '<input type="radio" name="arquivo" value="' . $dir . DIRECTORY_SEPARATOR . $item . '">';
                    //echo $item;
                    echo '<br><img src="' . $_POST['pasta'] . '/' . $item . '" alt="imagem" style="width: 100px; height: 100px;">';
                    echo '</li>';
                }
            } ?>
        </ul>
        <input type="submit" name="excluir_arquivo" value="Excluir Arquivo">
    </form>
    <a href="javascript:history.back()" class="back-button">Voltar para Página Anterior</a>
</body>
</html>