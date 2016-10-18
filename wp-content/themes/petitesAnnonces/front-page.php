<?php get_header(); ?>

<section class="container" id="listeAnnonces">
    
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$the_query = new WP_Query( array ('post_type' => 'annonce',
    'orderby' => 'rand',
    'posts_per_page' => 3,
    'paged' => $paged
    ) );
if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>
        <article class="col-md-4">
            <h2><?php the_title(); ?></h2>
                    <?php 
        if(has_post_thumbnail()) {?>
            <div class="responsiveImage">
            <?php
            the_post_thumbnail("thumbnail_annonce");
            ?>
            </div>
            <?php
        }
        ?>
            <span class="prix"><strong>Prix : </strong><?php the_field('prix'); ?> €</span><br/>

            <a href="<?php the_permalink(); ?>" class="btn">Plus de détails ...</a>
        </article>
        <?php
    }
    echo '</ul>';
    /* Restore original Post Data */
    wp_reset_postdata();
} else {
    // no posts found
}
?>
    
    <div class="pagination">
    <?php
wp_pagenavi( array( 'query' => $the_query ) );
?>
    </div>

</section>

<?php get_footer(); ?>