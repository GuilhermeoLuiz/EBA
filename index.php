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
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/gallerystyle2.css">
</head>

<body>
        <main id="main-content" class="site-main">
		<?php display_posts(); ?>   
		<?php display_events(); ?>
		<?php display_cursos(); ?>
		<?php display_services(); ?>
		<h1 class="titulo">Galerias</h1>
                <?php gallery("principal");?>
                <a href="<?php echo esc_url( home_url( '/index.php/galeria/' ) ); ?>">Página de Galerias</a>
        </main>
        <?php get_sidebar(); ?>
        <?php
                comments_template();
        ?>

        <footer>
            <?php get_footer(); ?>
        </footer>
        <script src="<?php echo get_template_directory_uri(); ?>/gallery2.js"></script>
</body>
</html>

