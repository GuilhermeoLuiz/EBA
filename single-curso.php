<?php
// Carrega o cabeçalho do WordPress
get_header();
?>
<main>
<div class="cursos-image"> 
<?php
if (has_post_thumbnail()) {
    the_post_thumbnail('thumbnail', array('class' => 'curso-image'));
}
?>
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<h2><?php the_title(); ?></h2>
<div class="entry-meta">
    <p>Data de Publicação: <?php echo date_i18n('j \d\e F \d\e Y', strtotime(get_the_date())); ?></p>
</div>
<div class="entry-content">
    <?php the_content(); ?>
</div>
</article>
</main>
<?php 

get_footer();
