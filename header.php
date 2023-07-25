<?php
$cor_back = get_theme_mod('EBA_background_color', '#add8e6');
?>
<!doctype html>
<html id="me">
	<meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
<?php wp_head();
$cor_cabecalho = get_theme_mod( 'header_background_color', '#dd0000' );
$cor_texto = get_theme_mod('cor_texto_cabecalho', '#111111');
$cor_menu = get_theme_mod('cor_menu', '#add8e6');
$cor_footer = get_theme_mod('cor_footer', '#ffffff');
$cor_texto_footer = get_theme_mod('cor_texto_footer', '#222222');
?>
<style>
  html{
    background-color: <?php echo $cor_back;?>;
    color: <?php echo get_theme_mod('cor_texto', '#222222');?>;
  }
	.menu-principal{
		background-color: <?php echo $cor_menu;?>;
}
  .dark-mode html{
    background-color: black;
  }
  footer{
    background-color: <?php echo $cor_footer;?>;
    color: <?php echo $cor_texto_footer;?>;
  }

  header{
    background-color: <?php echo $cor_cabecalho; ?>;
    color: <?php echo $cor_texto;?>;
  }

  .dark-mode header{
    background-color: <?php echo get_theme_mod('header_background_color_dark', '#dd0000');?>;
    color: <?php echo get_theme_mod('cor_texto_cabecalho_dark', '#ffffff');?>;
  }
  
</style>

<body>
<link rel="icon" type="image/jpeg" href="<?php echo get_template_directory_uri(); ?>/favicon.jpeg">

<div class="header-image">
      <img src="<?php echo esc_url(get_theme_mod('header_image')); ?>">
</div>
<header>
<h1 class="titulo">
<div class="menu-icon">
	:::
</div>
<span class="separator"></span>
<div class"texto">
	<?php
$descricao_site = get_bloginfo('title');
echo $descricao_site;
?>
</div>
</h1>
<button class="dark" id="dark-mode-toggle">
	Dark
</button>

</header>


<nav class="menu" style="background-color: <?php echo $cor_menu;?>;">
<?php
 wp_nav_menu( array(
    'theme_location' => 'menu-principal',
  'container' => 'nav',
  'container_class' => 'menu-principal'
  ) );
  ?>
</nav>

<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/dark.js"></script>




