<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary', // Remplace 'primary' par l'identifiant de ton menu
            'container' => 'nav', // Utilise 'div', 'nav', etc., selon la balise souhaitée
            'container_class' => 'main-menu', // Optionnel, pour ajouter une classe CSS
            'menu_class' => 'menu', // Classe CSS pour les éléments du menu
        ));
        ?>

        <nav class="main-menu">
            <button id="hamburger" class="hamburger-icon">&#9776;</button>
        </nav>
    </header>