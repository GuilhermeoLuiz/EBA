<?php
$nomePasta = $_POST["nome"]; // Substitua pelo nome que você deseja para a pasta

if (!file_exists($nomePasta)) {
    mkdir($nomePasta, 0777, true); // Cria a pasta com permissões 0777 recursivamente
    echo 'Galeria criada com sucesso!';
} else {
    echo 'A Galeria já existe.';
}
window.history.back();
?>
