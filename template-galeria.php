<?php
/*
 * Template Name: Galeria
 */
get_header(); ?>


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/gallerystyle.css">
    <main>
        <?php 
        $folder = $_POST["pasta"];
        if($folder == NULL){
            $folder = "principal";
        }
        gallery($folder);?>

    <?php
    $temaDir = get_template_directory(); // Diretório do tema

    // Obter a lista de arquivos e diretórios no diretório do tema
    $conteudoTema = scandir($temaDir);

    // Filtrar apenas as pastas (diretórios) que não sejam ocultas
    $pastas = array_filter($conteudoTema, function($item) use ($temaDir) {
        return is_dir($temaDir . '/' . $item) && $item !== '.' && $item !== '..' && strpos($item, '.') !== 0;
    });
    echo "<div><h1> Galerias </h1></div>";
    echo "<ul>"; 
    foreach ($pastas as $pasta) {
        ?>
        <form id="forms" action="<?php get_template_directory_uri();?>" method="POST">
            <input type="submit" name="pasta" class="myButton" value="<?php echo esc_html($pasta)?>">
        </form>
        <?php
    }
    echo "</ul>";
    ?>
    <?php
    if (is_user_logged_in()) {
        // O usuário está logado
        ?> 
    <a href="<?php echo esc_url(get_stylesheet_directory_uri() . '/novagaleria.php')?>"> Adicionar nova Galeria</a>
    <?php 
    }?>
    </main>
    <script src="<?php echo get_template_directory_uri(); ?>/gallery.js"></script>
    


<?php get_sidebar(); ?>

<?php get_footer();
