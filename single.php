<?php
// Carrega o cabeçalho do WordPress
get_header();
?>
<main>
<?php

// Aqui você pode exibir os detalhes do artigo
echo "<h1>";
the_title();
echo "</h1>";
the_content();
?>
</main>
<?php 

get_footer();
