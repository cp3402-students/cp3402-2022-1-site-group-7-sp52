<?php
/**
 * Template Name: Full Width Template
*/
?>

<?php get_header(); ?>

    <div class="container-fluid full-width-page-template">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="row">
           <div class="col-12">
                <?php
                    get_template_part( 'template-parts/content', 'page' );
                ?>
           </div>
        </div>
        <?php endwhile; endif; ?>
    </div>

<?php get_footer(); ?>
