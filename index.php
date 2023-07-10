<!DOCTYPE html>
<html>
<?php
/**
 * Template principal do tema.
 *
 * @package Nome do Tema
 * @since 1.0
 */

get_header();
?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">


<title> <?php echo wp_title('');  ?> </title>

<main id="main-content" class="site-main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>

      <div class="entry-content">
        <?php the_content(); ?>
      </div>

    </article>

  <?php endwhile;
	else: 
echo "Não há posts";
endif; ?>
	
	<?php if (is_active_sidebar('nome-da-area')) : ?>
  <div class="widget-area">
    <?php dynamic_sidebar('nome-da-area'); ?>
  </div>
<?php endif; ?>


</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

</html>
