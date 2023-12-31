<?php
/*
 * Template Name: Galeria
 */
get_header(); ?>


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/gallerystyle2.css">
    <main>
        <h1 class="titulo">Galeria</h1>
        <?php 
        $fpasta = isset($_POST["pasta"]) ? $_POST["pasta"] : "principal";
        if($fpasta == NULL){
            $fpasta = "principal";
        }
        gallery($fpasta);?>
    <?php
    $temaDir = get_template_directory(); // Diretório do tema

    // Obter a lista de arquivos e diretórios no diretório do tema
    $conteudoTema = scandir($temaDir);

    // Filtrar apenas as pastas (diretórios) que não sejam ocultas
    $pastas = array_filter($conteudoTema, function($item) use ($temaDir) {
        return is_dir($temaDir . '/' . $item) && $item !== '.' && $item !== '..' && strpos($item, '.') !== 0;
    });
    echo "<div><h1> Mais Galerias </h1></div><br>";
    echo '<div class="previews">';
    foreach ($pastas as $pasta) {
        
        $folder = get_template_directory() . '/' . $pasta;
        $files = scandir($folder);
        $files = array_diff($files, array('..', '.'));
        $img = get_template_directory_uri() . "/" . $pasta . "/" . reset($files);
        if($pasta != $fpasta){?>
        <form id="forms" action="<?php get_template_directory_uri();?>" method="POST">
            <input type="hidden" name="pasta" value="<?php echo $pasta?>">
            <input type="image" src="<?php echo $img?>" alt="Enviar" class="preview">
            <input type="submit" name="pasta" class="myButton" value="<?php echo $pasta?>">
        </form>
        <?php
        }
    }
    //echo "</ul>";
    ?>
    </div>
    <?php
    
    if (is_user_logged_in()) {
        // O usuário está logado
        ?> 
    <a href="<?php echo esc_url(get_stylesheet_directory_uri() . '/novagaleria.php')?>"> Adicionar nova Galeria</a>
    <a href="<?php echo esc_url(get_stylesheet_directory_uri() . '/removergaleria.php')?>"> Remover Galeria</a>
    <?php 
    }?>
    </main>
    <script src="<?php echo get_template_directory_uri(); ?>/gallery2.js"></script>
    


<?php get_sidebar(); ?>

<?php get_footer();
