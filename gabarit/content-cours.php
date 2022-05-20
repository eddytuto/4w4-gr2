<?php 
$categories = get_the_category();
//var_dump($categories);
//echo $categories[1]->slug;
?>
<article class="formation__cours <?php echo $categories[1]->slug; ?>">
    <?php
    $titre = get_the_title();
    // 582-1w1 Mise en page Web (75h)
    // 1w1 Mise en page Web
    $titreFiltreCours = substr($titre, 3, -6);
    // $nbHeures = substr($titre, -6);
    $nbHeures = get_field( "nombre_dheures" );
    $departement = get_field( "departement" );
    $sigleCours = substr($titre, 0, 4);
    $descCours  = get_the_content(); // description complète du cours */

    ?>
    <code class="formation__cours__invisible"><?= $descCours ?></code>
    <?php the_post_thumbnail("thumbnail") ?>
    <h3 class="cours__titre">
        <a href="<?php echo get_permalink(); ?>">
            <?= $titreFiltreCours; ?>
        </a>
    </h3>
    <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
    <p class="cours__sigle"><?= $sigleCours; ?> </p>
    <p class="cours__desc"> <?= wp_trim_words($descCours,15,"<button class='cours__desc__ouvrir'> La suite </button>"); ?></p>
    <p class="cours__departement"><?= $departement; ?></p>
</article>