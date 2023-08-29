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
    
    //Configurações e controles para as cores personalizadas
    
    //Cor de Fundo
    $wp_customize->add_setting( 'EBA_background_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'EBA_background_color', array(
        'label'    => __( 'Cor do Fundo', 'EBA' ),
        'section'  => 'colors',
        'settings' => 'EBA_background_color',
    )));

     // Cor do Cabeçalho(Texto)
     $wp_customize->add_setting('cor_cabecalho', array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_cabecalho', array(
        'label'   => __( 'Cor do Cabeçalho(Texto)', 'EBA' ),
        'section' => 'colors',
    ) ) );

    // Cor do Cabeçalho(Texto)
    $wp_customize->add_setting('cor_cabecalho_fundo', array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_cabecalho_fundo', array(
        'label'   => __( 'Cor do Cabeçalho(Fundo)', 'EBA' ),
        'section' => 'colors',
    ) ) );

    // Cor do Título(Texto)
    $wp_customize->add_setting( 'cor_titulo', array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_titulo', array(
        'label'   => __( 'Cor do Título(Texto)', 'EBA' ),
        'section' => 'colors',
    ) ) );
        
    // Cor do Título(Fundo)
    $wp_customize->add_setting( 'cor_titulo_fundo', array(
        'default'   => '#11d700',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_titulo_fundo', array(
        'label'   => __( 'Cor do Título(Fundo)', 'EBA' ),
        'section' => 'colors',
    ) ) );

    // Cor do Subtítulo(Texto)
    $wp_customize->add_setting( 'cor_subtitulo', array(
        'default'   => '#11d700',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_subtitulo', array(
        'label'   => __( 'Cor do Subtítulo(Texto)', 'EBA' ),
        'section' => 'colors',
    ) ) );

    // Cor do Subtítulo(Fundo)
    $wp_customize->add_setting( 'cor_subtitulo_fundo', array(
        'default'   => '#11d700',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_subtitulo_fundo', array(
        'label'   => __( 'Cor do Subtítulo(Fundo)', 'EBA' ),
        'section' => 'colors',
    ) ) );

    // Cor do Tópico(Texto)
    $wp_customize->add_setting( 'cor_topico', array(
        'default'   => '#11d700',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_topico', array(
        'label'   => __( 'Cor do Tópico', 'EBA' ),
        'section' => 'colors',
    ) ) );

    // Cor do Texto
    $wp_customize->add_setting( 'cor_texto', array(
        'default'   => '#222222',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_texto', array(
        'label'   => __( 'Cor do Texto', 'EBA' ),
        'section' => 'colors',
    ) ) );

    // Cor do Menu
    $wp_customize->add_setting( 'cor_menu', array(
        'default'   => '#add8e6',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_menu', array(
        'label'   => __( 'Cor do Menu', 'EBA' ),
        'section' => 'colors',
    ) ) );

     // Cor do Footer(Texto)
     $wp_customize->add_setting( 'cor_footer', array(
        'default'   => '#222222',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_footer', array(
        'label'   => __( 'Cor do Texto do Rodapé(Texto)', 'EBA' ),
        'section' => 'colors',
    ) ) );

    // Cor do Footer(Fundo)
    $wp_customize->add_setting( 'cor_footer_fundo', array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_footer_fundo', array(
        'label'   => __( 'Cor do Rodapé(Fundo)', 'EBA' ),
        'section' => 'colors',
    ) ) );

    //Cor da Barra Lateral(Texto)
    $wp_customize->add_setting( 'cor_sidebar', array(
        'default'   => '#222222',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_sidebar', array(
        'label'   => __( 'Cor da Barra Lateral(Texto)', 'EBA' ),
        'section' => 'colors',
    ) ) );

    //Cor da Barra Lateral(Fundo)
    $wp_customize->add_setting( 'cor_sidebar_fundo', array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_sidebar_fundo', array(
        'label'   => __( 'Cor da Barra Lateral(Fundo)', 'EBA' ),
        'section' => 'colors',
    ) ) );
}

add_action( 'customize_register', 'EBA_customize_register' );

function EBA_customize_register_dark($wp_customize) {
    $wp_customize->add_section('Dark-Mode', array(
        'title' => __('Dark Mode', 'EBA'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('cor_fundo_dark', array(
        'default' => '#111111',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_fundo_dark', array(
        'label' => __('Cor de Fundo (Dark Mode)', 'EBA'),
        'section' => 'Dark-Mode',
        'settings' => 'EBA_background_color_dark',
    )));

    $wp_customize->add_setting('cor_cabecalho_dark', array(
        'default' => '#dd0000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_cabecalho_dark', array(
        'label' => __('Cor do Cabeçalho (Dark Mode)', 'EBA'),
        'section' => 'Dark-Mode',
        'settings' => 'header_background_color_dark',
    )));

    $wp_customize->add_setting('cor_cabecalho_fundo_dark', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_cabecalho_fundo_dark', array(
        'label' => __('Cor de Fundo do Cabeçalho (Dark Mode)', 'EBA'),
        'section' => 'Dark-Mode',
    )));

    $wp_customize->add_setting('cor_titulo_dark', array(
        'default' => '#ffd700',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_titulo_dark', array(
        'label' => __('Cor do Título (Dark Mode)', 'EBA'),
        'section' => 'Dark-Mode',
    )));

    $wp_customize->add_setting('cor_titulo_fundo_dark', array(
        'default' => '#ffd700',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_titulo_fundo_dark', array(
        'label' => __('Cor de Fundo do Título (Dark Mode)', 'EBA'),
        'section' => 'Dark-Mode',
    )));

    $wp_customize->add_setting('cor_subtitulo_dark', array(
        'default' => '#ffd700',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_subtitulo_dark', array(
        'label' => __('Cor do Subtítulo (Dark Mode)', 'EBA'),
        'section' => 'Dark-Mode',
    )));

    $wp_customize->add_setting('cor_subtitulo_fundo_dark', array(
        'default' => '#ffd700',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_subtitulo_fundo_dark', array(
        'label' => __('Cor de Fundo do Subtítulo (Dark Mode)', 'EBA'),
        'section' => 'Dark-Mode',
    )));

    $wp_customize->add_setting('cor_topico_dark', array(
        'default' => '#add8e6',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_topico_dark', array(
        'label' => __('Cor do Topico (Dark Mode)', 'EBA'),
        'section' => 'Dark-Mode',
    )));

    $wp_customize->add_setting('cor_texto_dark', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_texto_dark', array(
        'label' => __('Cor do Texto (Dark Mode)', 'EBA'),
        'section' => 'Dark-Mode',
    )));

    $wp_customize->add_setting('cor_menu_dark', array(
        'default' => '#add8e6',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_menu_dark', array(
        'label' => __('Cor do Menu (Dark Mode)', 'EBA'),
        'section' => 'Dark-Mode',
    )));

    $wp_customize->add_setting('cor_footer_dark', array(
        'default' => '#222222',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_footer_dark', array(
        'label' => __('Cor do Rodapé (Dark Mode)', 'EBA'),
        'section' => 'Dark-Mode',
    )));

    $wp_customize->add_setting('cor_footer_fundo_dark', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_footer_fundo_dark', array(
        'label' => __('Cor de Fundo do Rodapé (Dark Mode)', 'EBA'),
        'section' => 'Dark-Mode',
    )));

    //Cor da Barra Lateral(Texto)
    $wp_customize->add_setting( 'cor_sidebar_dark', array(
        'default'   => '#222222',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_sidebar_dark', array(
        'label'   => __( 'Cor da Barra Lateral(Texto)', 'EBA' ),
        'section' => 'Dark-Mode',
    ) ) );

    //Cor da Barra Lateral(Fundo)
    $wp_customize->add_setting( 'cor_sidebar_fundo_dark', array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_sidebar_fundo_dark', array(
        'label'   => __( 'Cor de Fundo da Barra Lateral(Dark Mode)', 'EBA' ),
        'section' => 'Dark-Mode',
    ) ) );
}

add_action('customize_register', 'EBA_customize_register_dark');



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

// Adiciona o campo eventos no WordPress
function lc_create_post_type() {
    $labels = array(
        'name' => 'Eventos',
        'singular_name' => 'Evento',
        // ... (resto dos rótulos)
    );

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

function event_dates_callback($post) {
    $event_date = get_post_meta($post->ID, 'event_date', true);
    $formatted_event_date = !empty($event_date) ? date('Y-m-d', strtotime($event_date)) : '';
    ?>

    <p>
        <label for="event_date">Data do evento:</label>
        <input type="date" id="event_date" name="event_date" value="<?php echo esc_attr($formatted_event_date); ?>">
    </p>

    <?php
}

function save_event_meta($post_id) {
    if (isset($_POST['event_date'])) {
        update_post_meta($post_id, 'event_date', sanitize_text_field($_POST['event_date']));
    }
}
add_action('save_post', 'save_event_meta');

function remove_unnecessary_fields() {
    remove_post_type_support('event', 'page-attributes');
    remove_post_type_support('event', 'custom-fields');
}
add_action('admin_menu', 'remove_unnecessary_fields');

function remove_event_taxonomies() {
    remove_meta_box('tagsdiv-post_tag', 'event', 'side');
    remove_meta_box('categorydiv', 'event', 'side');
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
	echo '<a href="#">Mais eventos</a>';
    } else {
        echo '<div>Não há eventos futuros disponíveis.</div><br>';
    }
}

function add_post_summary_meta_box() {
    add_meta_box(
        'post_summary',
        'Post Summary',
        'post_summary_callback',
        'post',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_post_summary_meta_box');

function post_summary_callback($post) {
    $post_summary = get_post_meta($post->ID, 'post_summary', true);
    ?>

    <p>
        <label for="post_summary">Resumo do post:</label>
        <textarea id="post_summary" name="post_summary" rows="4"><?php echo esc_textarea($post_summary); ?></textarea>
    </p>

    <?php
}

function save_post_summary_meta($post_id) {
    if (isset($_POST['post_summary'])) {
        update_post_meta($post_id, 'post_summary', sanitize_textarea_field($_POST['post_summary']));
    }
}
add_action('save_post', 'save_post_summary_meta');

function add_post_deadline_meta_box() {
    add_meta_box(
        'post_deadline',
        'Post Deadline',
        'post_deadline_callback',
        'post',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_post_deadline_meta_box');

function post_deadline_callback($post) {
    $post_deadline = get_post_meta($post->ID, 'post_deadline', true);
    ?>

    <p>
        <label for="post_deadline">Data limite do post:</label>
        <input type="date" id="post_deadline" name="post_deadline" value="<?php echo esc_attr($post_deadline); ?>">
    </p>

    <?php
}

function save_post_deadline_meta($post_id) {
    if (isset($_POST['post_deadline'])) {
        update_post_meta($post_id, 'post_deadline', sanitize_text_field($_POST['post_deadline']));
    }
}
add_action('save_post', 'save_post_deadline_meta');

function display_posts() {
    ?>
    <h1 class="titulo">Posts</h1>
    <?php
    echo '<br>';

    // Obtém todas as categorias
    $categories = get_categories();

    foreach ($categories as $category) {
        echo "<h2>{$category->name}</h2>";

        // Obtém as postagens da categoria atual
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
            'category__in' => array($category->term_id),
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
		$query->the_post();
		$post_deadline = get_post_meta(get_the_ID(), 'post_deadline', true);
            	// Verificar a data limite do post
            	if (empty($post_deadline) || strtotime($post_deadline) >= current_time('timestamp')) {
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>" class="link"><h3 class="entry-title"><?php the_title(); ?></h3></a>
                    <div class="entry-meta">
                        <p>Autor: <?php the_author(); ?></p>
                        <p>Data de Publicação: <?php echo date_i18n('j \d\e F \d\e Y', strtotime(get_the_date())); ?></p>
                    </div>
                    <div class="entry-content">
                    	<?php
                    	$post_summary = get_post_meta(get_the_ID(), 'post_summary', true);
                    	if (!empty($post_summary)) {
                        	echo '<p>' . esc_html($post_summary) . '</p>';
                    	} else {
			    the_content();
			}
	    		?>		
		     </div>
                </article>
		<?php
		}
            }
                ?>
                <p><a href="<?php echo get_category_link($category->term_id); ?>" class="read-more-link">Mais posts <?php echo $category->name;?></a></p>
                <?php
            wp_reset_postdata();
        } else {
            echo 'Não há postagens disponíveis para esta categoria.';
        }
    }
}
/**
 * Estilo da imagem de fundo
 */
function meu_tema_adicionar_suporte_imagem_de_fundo() {
    add_theme_support( 'custom-background' );
}
add_action( 'after_setup_theme', 'meu_tema_adicionar_suporte_imagem_de_fundo' );


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

//add_action( 'customize_register', 'meu_tema_imagem_de_fundo_estilo' );


function custom_page_title($title) {
    if (is_page()) {
        $title = get_the_title();
    }
    return $title;
}
add_filter('pre_get_document_title', 'custom_page_title');


function gallery($folder){
    ?>
    <h2> <?php echo $folder ?> </h2>
     <div class="carousel-container">
    <div class="carousel">
    <?php
    $pasta = "/" . $folder . "/";
    //echo '<h1>'. $pasta. '</h1>';
    
    $uploads_dir = get_template_directory() . $pasta . '*';
    $images = glob($uploads_dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    echo '<div class="gallery-container">';
    echo '<div class="gallery">';
    $fileCount = 0;
    foreach ($images as $image) {
        $fileCount++;
        $imageName = basename($image);
        echo '<div class="slide"><img src="' . get_template_directory_uri() . $pasta . $imageName . '" alt="Imagem"></div>';
    }
    echo '</div>';
    echo '</div>';
    echo '<style>';
    if($fileCount > 5)
    {
        echo '.gallery img{height: ' . 1000 / $fileCount . 'px;}';
    }
        for ($i = 0; $i < $fileCount; $i++) {
        echo ".slide:nth-child(" . ($i + 1) . ") {transform: rotateY(". $i * (360 / $fileCount) ."deg) translateZ(" . ($fileCount * 50) ."px);}";
    }
    echo "</style>";
    ?>


    </div>
  </div>
  <div class="rodar-container">
  <div class="left">
    << Rodar Galeria
    </div>
    <div class="right">
    Rodar Galeria >>
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
                echo '<a href="' . esc_url($servico_link) . '">';
                echo '<div class="item-img">';
                the_post_thumbnail('thumbnail', array('class' => 'service-image'));
                echo '</div>';
                echo '<p class="item-link">';
                the_title(); // Imprime o título como link quando não há imagem
                echo '</p>';
                echo '</a>';
            } else {
                echo '<a href="' . esc_url($servico_link) . '"class="item-link">';
                the_title(); // Imprime o título como link quando não há imagem
                echo '</a>';
            }

            echo '</li>';
        }
            ?>
            <p><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="read-more-link">Mais serviços</a></p>
            <?php
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
        echo '<h2 class="titulo_cursos">' . $tipo_display . '</h2><br>';
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
                echo '<h3>' . get_the_title() . '</h3>';

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




