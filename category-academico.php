<?php
echo '<h1 class="titulo">Posts</h1>';
echo '<br>';

// Obtém as 5 primeiras postagens
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5, // Mostrar apenas 5 postagens
);

$query = new WP_Query($args);

// Verifica se existem postagens
if ($query->have_posts()) {
    // Loop pelas postagens
    while ($query->have_posts()) {
        $query->the_post();
        if( == "academico"){?>
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
        <?php
        }
    }

    // Restaura os dados da postagem principal da página
    wp_reset_postdata();
} else {
    // Se não houver postagens, exibe uma mensagem
    echo 'Não há postagens disponíveis.';
}

?>
