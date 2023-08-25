<?php
get_header();

echo "<main>";
// Verifica se há posts na categoria atual
if (have_posts()) {
    // Obtém a informação da categoria atual
    $current_category = single_cat_title('', false);
    $current_category_id = get_cat_ID($current_category);

    // Exibe o título da categoria
    echo '<h1 margin="10px;" class="titulo">' . $current_category . '</h1><br>';

    // Loop para exibir os posts da categoria atual
    while (have_posts()) {
        the_post();
        if (in_category($current_category_id)) {
            // Aqui você pode personalizar o layout dos posts
		// Exemplo: exibir o título e o conteúdo do post
	 $post_deadline = get_post_meta(get_the_ID(), 'post_deadline', true);

            // Verificar a data limite do post
            if (empty($post_deadline) || strtotime($post_deadline) >= current_time('timestamp')) {
               
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		    <h2><a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a></h2>
                    <div class="entry-meta"
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
    }
} else {
    // Caso não haja posts na categoria
    echo '<p>Nenhum post encontrado.</p>';
}
echo "</main>";


get_footer();
?>
