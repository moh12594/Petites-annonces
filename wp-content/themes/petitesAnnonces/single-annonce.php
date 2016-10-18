<?php get_header(); ?>

<div id="content" class="container">
    <?php
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>

<?php
        if(has_post_thumbnail()) {?>
            <div class="responsiveImage">
            <?php
            the_post_thumbnail("thumbnail_annonce_full");
            ?>
            </div>
            <?php
        }
        ?>
            <h1><?php the_title(); ?></h1>
            <h2>Posté le <?php the_time('F jS, Y') ?></h2>
            <p><?php the_content(); ?></p>
    <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    ?>
</div>

<?php get_footer(); ?>