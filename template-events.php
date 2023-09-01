<?php
/*
 * Template Name: Eventos
 */
get_header();
echo '<main>';

echo '<h1 class="titulo">Eventos Futuros</h1>';
echo '<br>';

$args = array(
    'post_type' => 'event',
    'meta_key' => 'event_date', // Campo personalizado para a data de acontecimento
    'orderby' => 'meta_value', // Ordenar pela meta_value (data de acontecimento)
    'order' => 'ASC', // Ordem ascendente
    'meta_query' => array(
        array(
            'key' => 'event_date',
            'value' => date('Y-m-d'), // Apenas datas futuras
            'compare' => '>=',
            'type' => 'DATE',
        ),
    ),
);
$query = new WP_Query($args);
$event_counter = 0; // Inicializar o contador de eventos

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $event_permalink = get_permalink(); // Obter o link para o evento
        echo '<h2><a class="link" href="' . esc_url($event_permalink) . '">' . get_the_title() . '</a></h2>';

        // Exibir nome do autor
        echo '<p>Autor: ' . get_the_author() . '</p>';

        // Exibir a data do evento
        $event_date = get_post_meta(get_the_ID(), 'event_date', true);
        $formatted_event_date = !empty($event_date) ? date('d/m/Y', strtotime($event_date)) : '';
        echo '<p>Data do evento: ' . $formatted_event_date . '</p>';

        // Exibir a imagem destacada (thumbnail) do evento
        if (has_post_thumbnail()) {
            echo '<div class="event-thumbnail">';
            the_post_thumbnail('medium'); // Pode ajustar o tamanho conforme necessário
            echo '</div>';
        }

        // Exibir o resumo do evento
        echo '<div class="event-summary">';
        the_excerpt();
        echo '</div>';
    }
} else {
    echo '<div>Não há eventos futuros disponíveis.</div><br>';
}
echo '</main>';


get_sidebar();

get_footer();
