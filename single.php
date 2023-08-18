<?php
// Carrega o cabeçalho do WordPress
get_header();
?>
<main>
<?php
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h1 class="entry-title"><?php the_title(); ?></h1>
<div class="entry-meta">
    <p>Categoria: <?php the_category(', '); ?></p>
    <p>Autor: <?php the_author(); ?></p>
    <p>Data de Publicação: <?php echo date_i18n('j \d\e F \d\e Y', strtotime(get_the_date())); ?></p>
</div>
<div class="entry-content">
    <?php the_content(); ?>
</div>
</article>
</main>
<?php 

get_footer();
