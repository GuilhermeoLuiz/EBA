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
                <a href="/index.php/galeria">Ir para o Template</a>
		<?php display_services(); ?>
        </main>
        <?php get_sidebar(); ?>
        <?php
                comments_template();
        ?>

        <footer>
        <?php if (is_active_sidebar('footer')) : ?>
		<div class="widget-area">
                	<?php dynamic_sidebar('footer'); ?>
                </div>
        <?php endif; ?>
        
            <?php get_footer(); ?>
        </footer>
        <script src="<?php echo get_template_directory_uri(); ?>/gallery.js"></script>
</body>
</html>

