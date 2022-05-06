<?php
/**
 * L'entête « header » de chacune des pages de notre site
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head() ?>
    <!-- Style du customizer -->
    <style>
         /* change la le background-color du clip-path dans .home::after qui un pseudo élément du body pour la page d'accueil */
        .home::after{
            background-color: <?= get_theme_mod("background_clippath"); ?>;
        }
        /* change la le background-color du body */
        .site {
            background-color: <?= get_theme_mod("background_body"); ?>;
        }
        /*
        .site__main {
            background-color: ;
        }
        */
    </style>

    <?php show_admin_bar(true); ?>
</head>
<body  <?php body_class("site"); ?> >
<header class="site__header">
    <section class="site__header__titre">
        <?= get_custom_logo(); ?>
        <h1 class="header__titre">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">    
                <?php bloginfo('name'); ?></h1>
            </a>
        <h2 class="header__description"><?php bloginfo('description'); ?></h2>
    </section>
    <section class="util">
        <?= get_sidebar('entete_1'); ?>
    <?php // get_search_form(); ?>
    </section>
    
    
</header>
<section class="site__barre">
    <input type="checkbox"  id="chk-burger">
    <label for="chk-burger" id="burger" class="burger">
        <div class="burger__ligne"></div>
        <div class="burger__ligne"></div>
        <div class="burger__ligne"></div>
    
    </label>
    <?php wp_nav_menu(array("menu"=>"principal",
                            "container"=>"nav")); ?>
</section>
