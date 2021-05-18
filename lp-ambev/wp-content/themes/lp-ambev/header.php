<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="https://lett.2buycdn.com/embed/v1/plugin.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo ("name"); ?> </title>
    <?php wp_head();?>
    <link rel="stylesheet" href="<?= get_template_directory_uri().'/css/normalize.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri().'/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri().'/css/header.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri().'/style.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri().'/style-responsive.css' ?>">

</head>
<body <?php body_class();?>>
<div class = classe-do-menu >
         <?php
            wp_nav_menu(
            array(
                'menu' => 'menu-navegacao',
                'menu_id' => 'menu-menu-principal'
            )
        );
        ?> 
</div>




