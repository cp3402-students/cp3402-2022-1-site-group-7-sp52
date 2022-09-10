
<?php
    $taxonomy = get_queried_object()->taxonomy;
    if(empty($taxonomy)){
        $taxonomy = "category";
    }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-sm-6 mb-4'); ?>>

    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">
                <?= get_the_term_list( get_the_ID(), $taxonomy, '', ', ' ); ?>
            </strong>
            <h3 class="mb-0">
                <a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'waiyan'), the_title_attribute('echo=0')); ?>" rel="bookmark">
                    <?php the_title(); ?>
                </a>
            </h3>
            <div class="mb-1 text-muted"><?= customtheme_article_posted_on(); ?></div>
            <p class="mb-auto"><?= the_excerpt(); ?></p>
            <!--a tag stretched-link class has removed-->
            <a href="<?= get_the_permalink(); ?>">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?= get_the_post_thumbnail(get_the_ID(), 'medium'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</article>

