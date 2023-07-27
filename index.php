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
</head>

<body>
        <main id="main-content" class="site-main">
		<?php display_posts(); ?>   
		<?php display_events(); ?>
        </main>

        <footer>
            <?php get_footer(); ?>
        </footer>
</body>
</html>

