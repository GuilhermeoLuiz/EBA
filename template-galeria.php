<?php
/*
 * Template Name: Galeria
 */
get_header(); ?>


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/gallerystyle.css">
    <main>
        <h1> Galeria </h1>
        <?php 
        $folder = $_POST["pasta"];
        if($folder == NULL){
            $folder = "uploads";
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

    echo "<ul>";
    foreach ($pastas as $pasta) {
        ?>
        <form id="forms" action="<?php get_template_directory_uri();?>" method="POST">
        <li> <a><?php echo esc_html($pasta) ?></a> </li>
        <input type="hidden" name="pasta" value="<?php echo esc_html($pasta)?>">
        <input type="submit" class="myButton">
        </form>
        <?php
    }
    echo "</ul>";
    ?>

    </main>
    <script src="<?php echo get_template_directory_uri(); ?>/gallery.js"></script>
    


<?php get_sidebar(); ?>

<?php get_footer();
