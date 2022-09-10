<!-- <section class="blog-detail-section py-5">
        <header class="blog-detail-head mb-3">
            <div>
                <h1><?php //echo get_the_title(); 
                    ?></h1>
                <div class="blog-detail-meta mb-3">
                Posted by <?php //echo get_the_author(); 
                            ?><br>
                <time datetime="<?php //echo get_the_date('F j, Y'); 
                                ?>"  class="date pr-2">
                    <i class="icofont-ui-calendar pr-1"></i><?php //echo get_the_date(); 
                                                            ?>
                </time><br>
                <?php
                // the_tags('<span class="tag"><i class="icofont-ui-tag"></i>','</span><span class="tag"><i class="icofont-ui-tag"></i>','</span>');
                ?>
                <div class="comment"><i class="icofont-comment pr-1"></i><?php //echo get_comments_number(); 
                                                                            ?></div>
                </div>
            </div>
            <img src="https://www.canva.com/learn/wp-content/uploads/2020/01/how-creativity-impacts.jpg">
        </header>
        <? php // the_content(); 
        ?>
        <?php //comments_template(); 
        ?>
</section> -->

<section class="blog-detail-section standard-padding">
    <div class="row">
        <div class="col">
            <?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</section>