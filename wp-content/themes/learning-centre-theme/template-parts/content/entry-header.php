<div class="entry-header py-5 bg-primary text-white">
    <div class="entry-header-inner">
      <div class="container">
	  	<h1 class="entry-title">
			<?php if(is_category() || is_archive()): ?>
				<?= single_cat_title(); ?>
			<?php else: ?>
				<?= the_title(); ?>
			<?php endif; ?>
	  	</h1>
		<?php if ( has_excerpt() ) { ?>
			<p class="lead mb-4">
				<div class="intro-text section-inner">
					<?php the_excerpt(); ?>
				</div>
			</p>
		<?php } ?>
      </div>
    </div>
</div>
