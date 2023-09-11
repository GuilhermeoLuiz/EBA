<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
            <h1 class="page-title">Resultados da Pesquisa: <?php echo get_search_query(); ?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile;
        else : ?>
            <p>Nenhum resultado encontrado. Tente outra pesquisa.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
