<?php
/*
 * Template Name: Galeria
 */
get_header(); ?>


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/gallerystyle.css">
    <main>
        <h1> Galeria </h1>
        <?php gallery();?>

    </main>
    <script src="<?php echo get_template_directory_uri(); ?>/gallery.js"></script>

<?php get_sidebar(); ?>

<?php get_footer();
