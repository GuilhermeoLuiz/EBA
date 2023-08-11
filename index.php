<!DOCTYPE html>
<html>
<head>
        <?php
                /**
                 * Template principal do tema.
                 * @package EBA
                 * @since 1.0
                 */
	?>
	<?php get_header(); ?>

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/gallerystyle.css">
</head>

<body>
        <main id="main-content" class="site-main">
		<?php display_posts(); ?>   
		<?php display_events(); ?>
		<?php gallery("principal");?>
                <a href="/index.php/galeria">Página de Galerias</a>
		<?php display_services(); ?>
		<?php display_informacoes(); ?>
        </main>
        <?php get_sidebar(); ?>
        <?php
                comments_template();
        ?>

        <footer>
            <?php get_footer(); ?>
        </footer>
        <script src="<?php echo get_template_directory_uri(); ?>/gallery.js"></script>
</body>
</html>

