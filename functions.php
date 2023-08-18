<?php
function register_my_menus() {
  register_nav_menus( array(
    'menu-principal' => 'menu-principal'
  ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );

function adicionar_titulo_site($title, $sep) {
    if (is_front_page() && is_home()) {
        $title = get_bloginfo('name');
    } elseif (is_singular()) {
        $title = single_post_title('', false);
    }
    return $title . ' ' . $sep . ' ' . get_bloginfo('description');
}
//add_filter('wp_title', 'adicionar_titulo_site', 10, 2);


function theme_register_sidebar() {
  register_sidebar(array(
    'name'          => __('Barra Lateral', 'theme-domain'),
    'id'            => 'barra-lateral',
    'description'   => __('Esta é a barra lateral principal.', 'theme-domain'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'theme_register_sidebar');


function theme_setup() {
    // Suporte para página 404 personalizada
    add_action('template_redirect', 'theme_custom_404');
}

// Função para exibir a página 404 personalizada
function theme_custom_404() {
    if (is_404()) {
        include(get_template_directory() . '/404.php');
        exit();
    }
}

//add_action('after_setup_theme', 'theme_setup');

function sidebar_widget() {
  register_sidebar(array(
    'name' => 'Footer',
    'id' => 'footer',
    'description' => 'Descrição da Área de Widget',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="sidebar">',
    'after_title' => '</h3>',
  ));
}
add_action('widgets_init', 'sidebar_widget');

function custom_redirect_404() {
    global $wp_query;

    if ( ! $wp_query->post ) {
        include( get_template_directory() . '/404.php' );
        exit();
    }
}
add_action( 'template_redirect', 'custom_redirect_404' );

function EBA_customize_register( $wp_customize ) {

    $wp_customize->add_setting( 'EBA_background_color', array(
        'default'           => '#ffffff', // Define a cor padrão do cabeçalho
        'sanitize_callback' => 'sanitize_hex_color', // Valida a cor hexadecimal
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'EBA_background_color', array(
        'label'    => __('Cor de Fundo', 'EBA' ),
        'section'  => 'colors',
        'settings' => 'EBA_background_color',
    ) ) );

    $wp_customize->add_setting( 'header_background_color', array(
     'default'           => '#dd0000', // Define a cor padrão do cabeçalho
     'sanitize_callback' => 'sanitize_hex_color', // Valida a cor hexadecimal
 ) );
 
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
     'label'    => __( 'Cor do Cabeçalho', 'EBA' ),
     'section'  => 'colors',
     'settings' => 'header_background_color',
 ) ) );

 $wp_customize->add_setting( 'cor_titulo', array(
    'default' => '#ffffff',
    'transport' => 'refresh',
) );

// Controle para a cor do texto do cabeçalho
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_titulo', array(
    'label' => __( 'Cor do Titulo', 'EBA' ),
    'section' => 'colors',
) ) );
 
 $wp_customize->add_setting( 'cor_texto_cabecalho', array(
         'default' => '#ffffff',
         'transport' => 'refresh',
     ) );
 
     // Controle para a cor do texto do cabeçalho
     $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_texto_cabecalho', array(
         'label' => __( 'Cor do Texto do Cabeçalho', 'EBA' ),
         'section' => 'colors',
     ) ) );
 
     $wp_customize->add_setting( 'cor_subtitulo', array(
         'default' => '#11d700',
         'transport' => 'refresh',
     ) );
 
     // Controle para a cor do texto do cabeçalho
     $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_subtitulo', array(
         'label' => __( 'Cor do Subtitulo', 'EBA' ),
         'section' => 'colors',
     ) ) );
     
     $wp_customize->add_setting( 'cor_menu', array(
         'default' => '#add8e6',
         'transport' => 'refresh',
     ) );
 
     // Controle para a cor do texto do cabeçalho
     $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_menu', array(
         'label' => __( 'Cor do Menu', 'EBA' ),
         'section' => 'colors',
     ) ) );

     $wp_customize->add_setting( 'cor_texto', array(
        'default' => '#222222',
        'transport' => 'refresh',
    ) );

    // Controle para a cor do texto do cabeçalho
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_texto', array(
        'label' => __( 'Cor do Texto', 'EBA' ),
        'section' => 'colors',
    ) ) );


     $wp_customize->add_setting( 'cor_footer', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
    ) );

    // Controle para a cor do texto do cabeçalho
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_footer', array(
        'label' => __( 'Cor do Footer', 'EBA' ),
        'section' => 'colors',
    ) ) );

    $wp_customize->add_setting( 'cor_texto_footer', array(
        'default' => '#222222',
        'transport' => 'refresh',
    ) );

    // Controle para a cor do texto do cabeçalho
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_texto_footer', array(
        'label' => __( 'Cor do Texto do Footer', 'EBA' ),
        'section' => 'colors',
    ) ) );
 
 }
 
 add_action( 'customize_register', 'EBA_customize_register' );


 function EBA_customize_register_dark( $wp_customize ) {

    $wp_customize->add_section('Dark-Mode', array(
        'title' => __('Dark Mode', 'EBA'),
        'priority' => 30,
    ));

    $wp_customize->add_setting( 'EBA_background_color_dark', array(
        'default'           => '#111111', // Define a cor padrão do cabeçalho
        'sanitize_callback' => 'sanitize_hex_color', // Valida a cor hexadecimal
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'EBA_background_color_dark', array(
        'label'    => __('Cor de Fundo', 'EBA' ),
        'section'  => 'Dark-Mode',
        'settings' => 'EBA_background_color_dark',
    ) ) );

    $wp_customize->add_setting( 'header_background_color_dark', array(
     'default'           => '#dd0000', // Define a cor padrão do cabeçalho
     'sanitize_callback' => 'sanitize_hex_color', // Valida a cor hexadecimal
 ) );
 
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color_dark', array(
     'label'    => __( 'Cor do Cabeçalho', 'EBA' ),
     'section'  => 'Dark-Mode',
     'settings' => 'header_background_color_dark',
 ) ) );
 
 $wp_customize->add_setting( 'cor_texto_cabecalho_dark', array(
         'default' => '#ffffff',
         'transport' => 'refresh',
     ) );
 
     // Controle para a cor do texto do cabeçalho
     $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_texto_cabecalho_dark', array(
         'label' => __( 'Cor do Texto do Cabeçalho', 'EBA' ),
         'section' => 'Dark-Mode',
     ) ) );
 
     $wp_customize->add_setting( 'cor_subtitulo_dark', array(
         'default' => '#ffd700',
         'transport' => 'refresh',
     ) );
 
     // Controle para a cor do texto do cabeçalho
     $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_subtitulo_dark', array(
         'label' => __( 'Cor do Subtitulo', 'EBA' ),
         'section' => 'Dark-Mode',
     ) ) );
     
     $wp_customize->add_setting( 'cor_menu_dark', array(
         'default' => '#add8e6',
         'transport' => 'refresh',
     ) );
 
     // Controle para a cor do texto do cabeçalho
     $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_menu_dark', array(
         'label' => __( 'Cor do Menu', 'EBA' ),
         'section' => 'Dark-Mode',
     ) ) );

     $wp_customize->add_setting( 'cor_texto_dark', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
    ) );

    // Controle para a cor do texto do cabeçalho
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_texto_dark', array(
        'label' => __( 'Cor do Texto', 'EBA' ),
        'section' => 'Dark-Mode',
    ) ) );


     $wp_customize->add_setting( 'cor_footer_dark', array(
        'default' => '#222222',
        'transport' => 'refresh',
    ) );

    // Controle para a cor do texto do cabeçalho
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_footer_dark', array(
        'label' => __( 'Cor do Footer', 'EBA' ),
        'section' => 'Dark-Mode',
    ) ) );

    $wp_customize->add_setting( 'cor_texto_footer_dark', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
    ) );

    // Controle para a cor do texto do cabeçalho
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_texto_footer_dark', array(
        'label' => __( 'Cor do Texto do Footer', 'EBA' ),
        'section' => 'Dark-Mode',
    ) ) );
 
 }
 
 add_action( 'customize_register', 'EBA_customize_register_dark' );


function meu_tema_definir_capa() {
    $capa_url = get_template_directory_uri() . '/screenshot.jpg';
    add_theme_support('custom-header', array(
        'default-image' => $capa_url,
        'width'         => 1200,
        'height'        => 600,
        'flex-width'    => true,
        'flex-height'   => true,
    ));
}
add_action('after_setup_theme', 'meu_tema_definir_capa');


function theme_customize_register($wp_customize) {
  // Adicionar uma seção para a imagem do cabeçalho
  $wp_customize->add_section('header_image_section', array(
    'title' => 'Imagem do Cabeçalho',
    'priority' => 30,
  ));

  // Adicionar controle para a imagem do cabeçalho
  $wp_customize->add_setting('header_image', array(
    'default' => get_template_directory_uri() . '/favicon.jpeg',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_image', array(
    'label' => 'Escolha uma imagem para o cabeçalho',
    'section' => 'header_image_section',
    'settings' => 'header_image',
  )));
}

add_action('customize_register', 'theme_customize_register');

//Adiciona o campo eventos no WordPress
function lc_create_post_type() {
    // Configurar rótulos
    $labels = array(
        'name' => 'Eventos',
        'singular_name' => 'Evento',
        'add_new' => 'Adicionar Novo Evento',
        'add_new_item' => 'Adicionar Novo Evento',
        'edit_item' => 'Editar Evento',
        'new_item' => 'Novo Evento',
        'all_items' => 'Todos os Eventos',
        'view_item' => 'Visualizar Evento',
        'search_items' => 'Pesquisar Eventos',
        'not_found' => 'Nenhum Evento Encontrado',
        'not_found_in_trash' => 'Nenhum evento encontrado na lixeira',
        'parent_item_colon' => '',
        'menu_name' => 'Eventos',
    );

    // Registrar tipo de postagem
    register_post_type('event', array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'supports' => array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes'),
        'taxonomies' => array('post_tag', 'category'),
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'events'),
    ));
}
add_action('init', 'lc_create_post_type');

// Função para adicionar campos personalizados no editor de eventos
function add_event_meta_boxes() {
    add_meta_box(
        'event_dates',
        'Event Dates',
        'event_dates_callback',
        'event',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_event_meta_boxes');

// Função de retorno de chamada para exibir os campos personalizados no editor de eventos
function event_dates_callback($post) {
    // Recupera as datas salvas (se existirem)
    $event_date = get_post_meta($post->ID, 'event_date', true);
    ?>

    <p>
        <label for="event_date">Data do evento:</label>
        <input type="date" id="event_date" name="event_date" value="<?php echo esc_attr($event_date); ?>">
    </p>

    <?php
}

// Função para salvar os campos personalizados
function save_event_meta($post_id) {
    if (isset($_POST['event_date'])) {
        update_post_meta($post_id, 'event_date', sanitize_text_field($_POST['event_date']));
    }
}
add_action('save_post_event', 'save_event_meta');

// Função para remover campos desnecessários da página de edição de eventos
function remove_unnecessary_fields() {
    remove_post_type_support('event', 'page-attributes'); // Remove a seção de atributos do post
    remove_post_type_support('event', 'custom-fields'); // Remove a seção de campos personalizados
}
add_action('admin_menu', 'remove_unnecessary_fields');

// Função para remover as seções de "Tags" e "Categorias" da página de edição de eventos
function remove_event_taxonomies() {
    remove_meta_box('tagsdiv-post_tag', 'event', 'side'); // Remove a seção de tags
    remove_meta_box('categorydiv', 'event', 'side'); // Remove a seção de categorias
}
add_action('admin_menu', 'remove_event_taxonomies');

// Função para exibir os eventos com datas futuras
function display_events() {
    echo '<h1 class="titulo">Eventos Futuros</h1>';
    echo '<br>';

    $args = array(
        'post_type' => 'event',
        'posts_per_page' => 5,
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
            echo '<h2>' . get_the_title() . '</h2>';

            // Exibir nome do autor
            echo '<p>Autor: ' . get_the_author() . '</p>';

            // Exibir a data do evento
            echo '<p>Data do evento: ' . get_post_meta(get_the_ID(), 'event_date', true) . '</p>';

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

            $event_counter++; // Incrementar o contador

            // Parar de exibir eventos após 5 e exibir o link "Mais eventos"
            if ($event_counter >= 5) {
                echo '<a href="#">Mais eventos</a>';
                break;
            }
        }
        wp_reset_postdata();
    } else {
        echo '<div>Não há eventos futuros disponíveis.</div><br>';
    }
}

function display_posts() {

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
            ?>
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

        // Verifica se existem mais de 5 postagens
        if ($query->found_posts > 5) {
            ?>
            <p><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="read-more-link">Mais posts</a></p>
            <?php
        }

        // Restaura os dados da postagem principal da página
        wp_reset_postdata();
    } else {
        // Se não houver postagens, exibe uma mensagem
        echo 'Não há postagens disponíveis.';
    }
}

function meu_tema_suporte_imagem_de_fundo() {
    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff', // Cor de fundo padrão (substitua pela cor que desejar)
        'default-image' => '', // Imagem de fundo padrão (substitua pela URL da imagem que desejar)
        'wp-head-callback' => 'meu_tema_imagem_de_fundo_estilo',
    ) );
}
add_action( 'after_setup_theme', 'meu_tema_suporte_imagem_de_fundo' );

/**
 * Estilo da imagem de fundo
 */
function meu_tema_imagem_de_fundo_estilo() {
    $background = get_background_image();
    $style = '';

    if ( $background ) {
        $style .= 'body { background-image: url("' . esc_url( $background ) . '");';

        // Verifica se a imagem deve se repetir ou não
        $background_repeat = get_theme_mod( 'background_repeat', 'repeat' );
        $style .= ' background-repeat: ' . esc_attr( $background_repeat ) . ';';

        $style .= '}';
    }

    echo '<style type="text/css">' . $style . '</style>';
}

function custom_page_title($title) {
    if (is_page()) {
        $title = get_the_title();
    }
    return $title;
}
add_filter('pre_get_document_title', 'custom_page_title');


function gallery($folder){
    ?>
    <h1> <?php echo $folder ?> </h1>
     <div class="carousel-container">
    <div class="carousel">
    <?php
    $pasta = "/" . $folder . "/";
    //echo '<h1>'. $pasta. '</h1>';
    
    $uploads_dir = get_template_directory() . $pasta . '*';
    $images = glob($uploads_dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    foreach ($images as $image) {
        $imageName = basename($image);
        echo '<img src="' . get_template_directory_uri() . $pasta . $imageName . '" alt="Imagem">';
    }
    ?>
    </div>
    <div class="carousel-controls">
      <button class="prev-button">Anterior</button>
      <button class="next-button">Próximo</button>
    </div>
  </div>
  <?php
    // Verificar se o usuário está logado
    if (is_user_logged_in()) {
        // O usuário está logado
        ?> 
        <form action="<?php echo esc_url(get_stylesheet_directory_uri() . '/indexload.php')?>" method="POST">
            <input type="hidden" name="pasta" value="<?php echo $folder?>">
            <input type="submit" class="myButton" value="Upload de Imagem">
        </form>
        <form action="<?php echo esc_url(get_stylesheet_directory_uri() . '/removeimg.php')?>" method="POST">
            <input type="hidden" name="pasta" value="<?php echo $folder?>">
            <input type="submit" class="myButton" value="Apagar imagem">
        </form>
        <?php
        //echo '<a href="' . esc_url(get_stylesheet_directory_uri() . '/indexload.php') . '">Upload de Imagens</a>';
    } 
    ?>
  

<?php }

function register_servico_post_type() {
    $labels = array(
        'name' => 'Serviços',
        'singular_name' => 'Serviço',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
    	 'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('servico', $args);
}
add_action('init', 'register_servico_post_type');

function add_servico_metabox() {
    add_meta_box(
        'servico-link',
        'Link do Serviço',
        'display_servico_metabox',
        'servico',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'add_servico_metabox');

function display_servico_metabox($post) {
    $servico_link = get_post_meta($post->ID, 'servico_link', true);
    ?>
    <label for="servico_link">Link do Serviço:</label>
    <input type="text" name="servico_link" id="servico_link" value="<?php echo esc_url($servico_link); ?>" style="width: 100%;">
    <?php
}

function save_servico_metabox($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (isset($_POST['servico_link'])) {
        update_post_meta($post_id, 'servico_link', sanitize_text_field($_POST['servico_link']));
    }
}
add_action('save_post_servico', 'save_servico_metabox');

function display_services() {
    echo '<h1 class="titulo">Serviços</h1><br>';
    $args = array(
        'post_type' => 'servico',
        'posts_per_page' => 5,
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
                echo '<div class="item-img">';
                the_post_thumbnail('thumbnail', array('class' => 'service-image'));
                echo '</div>';
                echo '<a href="' . esc_url($servico_link) . '" class="item-link">';
                the_title(); // Imprime o título como link quando não há imagem
                echo '</a>';
            } else {
                echo '<a href="' . esc_url($servico_link) . '"class="item-link">';
                the_title(); // Imprime o título como link quando não há imagem
                echo '</a>';
            }

            echo '</li>';
        }

        // Verifica se existem mais de 5 serviços
        if ($query->found_posts > 5) {
            ?>
            <p><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="read-more-link">Mais serviços</a></p>
            <?php
        }

        echo '</ul>';
        echo '</div>';
        wp_reset_postdata();
    } else {
        echo '<p>Nenhum serviço disponível.</p>';
    }
}
add_shortcode('display_services', 'display_services');

add_theme_support('post-thumbnails');

// Registrar um Tipo de Postagem Personalizado (Curso)
function register_curso_post_type() {
    $labels = array(
        'name' => 'Cursos',
        'singular_name' => 'Curso',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('curso', $args);
}
add_action('init', 'register_curso_post_type');

// Adicionar Meta Box para Tipo de Curso
function add_curso_metabox() {
    add_meta_box(
        'curso-tipo',
        'Tipo de Curso',
        'display_curso_metabox',
        'curso',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'add_curso_metabox');

// Exibir Meta Box para Tipo de Curso
function display_curso_metabox($post) {
    $curso_tipo = get_post_meta($post->ID, 'curso_tipo', true);
    ?>
    <label for="curso_tipo">Tipo de Curso:</label>
    <select name="curso_tipo" id="curso_tipo">
        <option value="graduacao" <?php selected($curso_tipo, 'graduacao'); ?>>Graduação</option>
        <option value="posgraduacao" <?php selected($curso_tipo, 'posgraduacao'); ?>>Pós-Graduação</option>
        <option value="extensao" <?php selected($curso_tipo, 'extensao'); ?>>Extensão</option>
        <option value="pesquisa" <?php selected($curso_tipo, 'pesquisa'); ?>>Pesquisa</option>
    </select>
    <?php
}

// Salvar Tipo de Curso no Meta Box
function save_curso_metabox($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (isset($_POST['curso_tipo'])) {
        update_post_meta($post_id, 'curso_tipo', sanitize_text_field($_POST['curso_tipo']));
    }
}
add_action('save_post_curso', 'save_curso_metabox');

// Exibir Cursos por Tipo
function display_cursos() {
    echo '<h1 class="titulo">Cursos</h1><br>';
    $tipos_cursos = array(
        'graduacao' => 'Graduação',
        'posgraduacao' => 'Pós-graduação',
        'extensao' => 'Extensão',
        'pesquisa' => 'Pesquisa'
    );

    foreach ($tipos_cursos as $tipo => $tipo_display) {
        echo '<h2 class="titulo">' . $tipo_display . '</h2><br>';
        $args = array(
            'post_type' => 'curso',
            'posts_per_page' => -1,
            'meta_query' => array(
                array(
                    'key' => 'curso_tipo',
                    'value' => $tipo,
                    'compare' => '='
                )
            )
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) {
            echo '<div class="curso-section">';
            echo '<ul class="curso-list">';
            while ($query->have_posts()) {
                $query->the_post();
                echo '<li class="curso-item">';
                echo '<h2>' . get_the_title() . '</h2>';

                if (has_post_thumbnail()) {
                    the_post_thumbnail('thumbnail', array('class' => 'curso-image'));
                }
            }
            echo '</ul>';
            echo '</div>';
            wp_reset_postdata();
        } else {
            echo '<p>Nenhum curso de ' . $tipo_display . ' disponível.</p>';
        }
    }
}

// Exibir Cursos por Tipo e com conteúdo
function display_cursos2() {
    echo '<h1 class="titulo">Cursos</h1><br>';
    $tipos_cursos = array(
        'graduacao' => 'Graduação',
        'posgraduacao' => 'Pós-graduação',
        'extensao' => 'Extensão',
        'pesquisa' => 'Pesquisa'
    );

    foreach ($tipos_cursos as $tipo => $tipo_display) {
        echo '<h1 class="titulo">' . $tipo_display . '</h1><br>';
        $args = array(
            'post_type' => 'curso',
            'posts_per_page' => -1,
            'meta_query' => array(
                array(
                    'key' => 'curso_tipo',
                    'value' => $tipo,
                    'compare' => '='
                )
            )
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) {
            echo '<div class="curso-section">';
            echo '<ul class="curso-list">';
            while ($query->have_posts()) {
                $query->the_post();
                echo '<li class="curso-item">';
                echo '<h2>' . get_the_title() . '</h2>';

                if (has_post_thumbnail()) {
                    the_post_thumbnail('thumbnail', array('class' => 'curso-image'));
                }

                the_content();
                echo '</li>';
            }
            echo '</ul>';
            echo '</div>';
            wp_reset_postdata();
        } else {
            echo '<p>Nenhum curso de ' . $tipo_display . ' disponível.</p>';
        }
    }
}

