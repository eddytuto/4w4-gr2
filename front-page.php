<?php get_header() ?>
<main class="site__main">
<h1>Groupe #2</h1>

    <h1>Les études en TIM</h1>
    
    <?php 
    /* --------------------------------------------- menu accueil */
    wp_nav_menu(array("menu"=>"accueil",
                            "container"=>"nav")); ?>
    
   <?php 
   /* --------------------------------------------- menu evenement */
   wp_nav_menu(array("menu"=>"evenement",
                            "container"=>"nav")); ?>

   <?php if (have_posts()): the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content() ?>   
   <?php endif ?>
   
</main>
<?php get_footer() ?>