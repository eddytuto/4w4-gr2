<?php get_header() ?>
<main class="site__main">
<h1>Groupe #2</h1>
<section class="animation">
    <div class="animation__bloc">1</div>
    <div class="animation__bloc">2</div>
    <div class="animation__bloc">3</div>
    <div class="animation__bloc">4</div>
    <div class="animation__bloc">5</div>
</section>
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
        <?php the_title() ?>
        <?php the_content() ?>   
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>