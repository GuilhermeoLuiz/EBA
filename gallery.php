<?php
$images = glob('uploads/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
foreach ($images as $image) {
    echo '<img src="' . $image . '" alt="Imagem">';
}
?>
