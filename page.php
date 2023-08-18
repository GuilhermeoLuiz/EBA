<?php get_header();
$cor_sub = get_theme_mod('cor_subtitulo', '#11d700');
?>

<div>
        <div class="row">
                <main class="col-sm-8">
                        <?php  if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
                                <div>
                                        <?php the_content();?>
                                </div>
                        <?php endwhile; endif; ?>
		</main>
		<?php get_sidebar(); ?>
        </div>
</div>

<?php
    comments_template();
?>

<?php get_footer();

