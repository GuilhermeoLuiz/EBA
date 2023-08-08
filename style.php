<?php
$cor_back = get_theme_mod('EBA_background_color', '#add8e6');
$cor_cabecalho = get_theme_mod( 'header_background_color', '#dd0000' );
$cor_texto = get_theme_mod('cor_texto_cabecalho', '#111111');
$cor_menu = get_theme_mod('cor_menu', '#add8e6');
$cor_footer = get_theme_mod('cor_footer', '#ffffff');
$cor_texto_footer = get_theme_mod('cor_texto_footer', '#222222');
$cor_sub = get_theme_mod('cor_subtitulo', '#11d700');
?>

<style>
  html{
    background-color: <?php echo $cor_back;?>;
    color: <?php echo get_theme_mod('cor_texto', '#222222');?>;
  }

  body{
    background-image: url('<?php echo get_background_image()?>');
    //background-size: cover;
    //background-repeat: no-repeat; 
  }

  h2, h1:not(.title, .titulo){
    background-color: <?php echo $cor_sub;?>;
    
  }

  .titulo{
    background-color: <?php echo get_theme_mod('cor_titulo', '#555555');?>;
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
  .dark-mode {
    background-color:<?php echo get_theme_mod('EBA_background_color_dark', '#111111');?>;
    color: <?php echo get_theme_mod('cor_texto_dark', '#111111');?>;
}

  .dark-mode header{
    background-color: <?php echo get_theme_mod('header_background_color_dark', '#dd0000');?>;
    color: <?php echo get_theme_mod('cor_texto_cabecalho_dark', '#ffffff');?>;
  }

  .dark-mode html{
	background-color: <?php echo get_theme_mod('EBA_background_color_dark', '#111111');?>;
}

.dark-mode body{
	background-color: <?php echo get_theme_mod('EBA_background_color_dark', '#111111');?>;;
}



.dark-mode h1:not(.title, .titulo){
	background-color: <?php echo get_theme_mod('cor_subtitulo_dark', '#ffd700');?>;
}

.dark-mode h2{
  background-color: <?php echo get_theme_mod('cor_subtitulo_dark', '#ffd700');?>;
}

.dark-mode footer{
	background-color: <?php echo get_theme_mod('cor_footer_dark', '#111111');?>;
  color: <?php echo get_theme_mod('cor_texto_footer_dark', '#ffffff');?>;
}

.dark-mode .menu-principal{
  background-color: <?php echo get_theme_mod('cor_menu_dark', '#add9e6');?>;
}

  
</style>
