<!DOCTYPE html>
<html lang="en">

<head>
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/gallerystyle.css">
</head>

<body>
<h1> Galeria </h1>
<?php gallery();?>

    <script src="<?php echo get_template_directory_uri(); ?>/gallery.js"></script>

<?php get_sidebar(); ?>

<?php get_footer();
