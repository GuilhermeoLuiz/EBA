<!doctype html>
<html id="me">
  <head>
	<meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <title><?php echo get_bloginfo('title');?></title>
<?php wp_head();
include 'style.php';
?>
</head>
<body>



<?php
if (has_site_icon()) {
    $favicon_url = get_site_icon_url();
?>
    <link rel="icon" href="<?php echo esc_url($favicon_url); ?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo esc_url($favicon_url); ?>">
<?php } ?>
<a href="<?php echo esc_url(home_url('/')); ?>">
  <div class="header-image">
        <img src="<?php echo esc_url(get_theme_mod('header_image')); ?>">
  </div>
</a>
<header>
<h1 class="title">
<div class="menu-icon">
	:::
</div>
<span class="separator"></span>
<a href="<?php echo esc_url(home_url('/')); ?>" class="texto">
<div class="texto">
	<?php
$descricao_site = get_bloginfo('title');
echo $descricao_site;
?>
</div>
</a>
</h1>
<form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Pesquisar">
    <input type="submit" id="searchsubmit" value="Pesquisar">
</form>
<img class="lupa" src="<?php echo get_template_directory_uri();?>/lupa.png">
<button class="dark" id="dark-mode-toggle">
	Dark
</button>

</header>



<nav class="menu">
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
<script src="<?php echo get_template_directory_uri(); ?>/search.js"></script>

<audio id="meuAudio" src="<?php echo get_template_directory_uri(); ?>/click.wav"></audio>
<script src="<?php echo get_template_directory_uri(); ?>/audio.js"></script>



