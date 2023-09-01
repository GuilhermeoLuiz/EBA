<?php
/*
 * Template Name: Servicos
 */
get_header();

echo '<main>';
echo '<h1 class="titulo">Serviços</h1><br>';
    $args = array(
        'post_type' => 'servico'
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<div class="service-section">';
        echo '<ul class="service-list">';
        while ($query->have_posts()) {
            $query->the_post();
            $servico_link = get_post_meta(get_the_ID(), 'servico_link', true);
            echo '<li class="service-item">';
            
            if (has_post_thumbnail()) {
                echo '<div class="item-servico">';
                    echo '<a href="' . esc_url($servico_link) . '">';
                        echo '<div class="item-img">';
                            the_post_thumbnail('thumbnail', array('class' => 'service-image'));
                        echo '</div>';
                        echo '<p class="item-link">';
                            the_title(); // Imprime o título como link quando não há imagem
                        echo '</p>';
                    echo '</a>';
                echo '</div>';
            } else {
                echo '<div class="item-servico">';
                    echo '<a href="' . esc_url($servico_link) . '">';
                        echo '<p class="item-link">';
                            the_title(); // Imprime o título como link quando não há imagem
                        echo '</p>';
                    echo '</a>';
                echo '</div>';
            }
            
            echo '</li>';
        }
            ?>
            <?php
        echo '</ul>';
        echo '</div>';
        wp_reset_postdata();
    } else {
        echo '<p>Nenhum serviço disponível.</p>';
    }
    echo   '</main>';

get_sidebar();

get_footer();