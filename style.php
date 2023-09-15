<?php
    $cor_fundo = get_theme_mod('EBA_background_color', '#add8e6');
    $cor_cabecalho = get_theme_mod('cor_cabecalho', '#111111');
	$cor_cabecalho_fundo = get_theme_mod('cor_cabecalho_fundo', '#111111');
    $cor_titulo = get_theme_mod('cor_titulo', '#add8e6');
    $cor_titulo_fundo = get_theme_mod('cor_titulo_fundo', '#add8e6');
    $cor_subtitulo = get_theme_mod('cor_subtitulo', '#11d700');
	$cor_subtitulo_fundo = get_theme_mod('cor_subtitulo_fundo', '#11d700');
    $cor_topico = get_theme_mod('cor_topico', '#add8e6');
    $cor_menu = get_theme_mod('cor_menu', '#add8e6');
    $cor_texto = get_theme_mod('cor_texto', '#add8e6');
    $cor_link = get_theme_mod('cor_link', '#add8e6');
    $cor_botao = get_theme_mod('cor_botao', '#add8e6');
    $cor_footer = get_theme_mod('cor_footer', '#ffffff');
    $cor_footer_fundo = get_theme_mod('cor_footer_fundo', '#222222');
	$cor_sidebar = get_theme_mod('cor_sidebar', '#222222');
    $cor_sidebar_fundo = get_theme_mod('cor_sidebar_fundo', '#ffffff');

    $cor_menu_dark = get_theme_mod('cor_menu_dark', '#add9e6');
    $cor_fundo_dark = get_theme_mod('cor_fundo_dark', '#111111');
    $cor_cabecalho_fundo_dark = get_theme_mod('cor_cabecalho_fundo_dark', '#dd0000');
    $cor_cabecalho_dark = get_theme_mod('cor_cabecalho_dark', '#ffffff');
    $cor_titulo_dark = get_theme_mod('cor_titulo_dark', '#add8e6');
    $cor_titulo_fundo_dark = get_theme_mod('cor_titulo_fundo_dark', '#add8e6');
    $cor_subtitulo_dark = get_theme_mod('cor_subtitulo_dark', '#ffd700');
    $cor_subtitulo_fundo_dark = get_theme_mod('cor_subtitulo_fundo_dark', '#11d700');
    $cor_topico_dark = get_theme_mod('cor_topico_dark', '#add8e6');
    $cor_texto_dark = get_theme_mod('cor_texto_dark', '#111111');
    $cor_link_dark = get_theme_mod('cor_link_dark', '#add8e6');
    $cor_botao_dark = get_theme_mod('cor_botao_dark', '#add8e6');
    $cor_footer_dark = get_theme_mod('cor_footer_dark', '#ffffff');
    $cor_footer_fundo_dark = get_theme_mod('cor_footer_fundo_dark', '#111111');
    $cor_sidebar_dark = get_theme_mod('cor_sidebar_dark', '#222222');
    $cor_sidebar_fundo_dark = get_theme_mod('cor_sidebar_fundo_dark', '#ffffff');
?>

<style>

    html {
        background-color: <?php echo $cor_fundo; ?>;
        color: <?php echo $cor_texto; ?>;
    }

    body {
        background-image: url('<?php echo get_background_image(); ?>');
        background-size: cover;
        background-repeat: no-repeat;
    }

    h2 {
        background-color: <?php echo $cor_subtitulo_fundo; ?>;
        color: <?php echo $cor_subtitulo; ?>;
    }

    h3 {
        color: <?php echo $cor_topico; ?>;
    }

    .titulo {
        background-color: <?php echo $cor_titulo_fundo; ?>;
        color: <?php echo $cor_titulo; ?>;
    }

    .menu-principal {
        background-color: <?php echo $cor_menu; ?>;
    }

    footer {
        background-color: <?php echo $cor_footer_fundo; ?>;
        color: <?php echo $cor_footer; ?>;
    }

    header {
        background-color: <?php echo $cor_cabecalho_fundo; ?>;
    }

    .texto {
        color: <?php echo $cor_cabecalho; ?>;
    }

    a:not(.myButton):hover, .link .entry-title:hover, .item-link:hover{
        color: <?php echo $cor_link; ?>;
    }

    p:not(.entry-title, .circle) {
        color: <?php echo $cor_texto; ?>;
    }

    button, .myButton{
        color: <?php echo $cor_texto; ?>;
        background-color: <?php echo $cor_botao; ?>;
    }

    button:hover, .myButton:hover{
        background-color: <?php echo $cor_link; ?>;
    }

	.sidebar p{
        color: <?php echo $cor_sidebar; ?>;
	}
    .sidebar {
        background-color: <?php echo $cor_sidebar_fundo; ?>;
	}

    /* Dark Mode */
    .dark-mode html {
    background-color: <?php echo $cor_fundo_dark; ?>;
    color: <?php echo $cor_texto_dark; ?>;
	}

	.dark-mode body {
		background-color: <?php echo $cor_fundo_dark; ?>;
	}

	.dark-mode h2 {
		background-color: <?php echo $cor_subtitulo_fundo_dark; ?>;
		color: <?php echo $cor_subtitulo_dark; ?>;
	}

	.dark-mode h3 {
		color: <?php echo $cor_topico_dark; ?>;
	}

	.dark-mode .titulo {
		background-color: <?php echo $cor_titulo_fundo_dark; ?>;
        color: <?php echo $cor_titulo_dark; ?>;

	}

	.dark-mode .menu-principal {
		background-color: <?php echo $cor_menu_dark; ?>;
	}

	.dark-mode header {
		background-color: <?php echo $cor_cabecalho_fundo_dark; ?>;
		color: <?php echo $cor_cabecalho_dark; ?>;
	}

	.dark-mode footer {
		background-color: <?php echo $cor_footer_fundo_dark; ?>;
		color: <?php echo $cor_footer_dark; ?>;
	}

	.dark-mode p:not(.entry-title) {
        color: <?php echo $cor_texto_dark; ?>;
    }

	.dark-mode .sidebar {
		background-color: <?php echo $cor_sidebar_fundo_dark; ?>;
	}

    .dark-mode .sidebar p{
        color: <?php echo $cor_sidebar_dark; ?>;
	}

    .menu-principal a{
        color: <?php echo $cor_texto;?>;
    }

    .dark-mode a:hover, .dark-mode .link .entry-title:hover, .dark-mode .item-link:hover{
        color: <?php echo $cor_link_dark; ?>;
    }

    .dark-mode button, .dark-mode .myButton{
        color: <?php echo $cor_texto_dark; ?>;
        background-color: <?php echo $cor_botao_dark; ?>;
    }

    .dark-mode button:hover, .dark-mode .myButton:hover{
        background-color: <?php echo $cor_link_dark; ?>;
    }


</style>
