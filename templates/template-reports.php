<div class="small-12 medium-6 large-4 cell">
	<section>
		<figure class="visual--report">
			<a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('normal'); ?>
			</a>
			<?php if( get_field('caption_title') ): ?>
				<figcaption class="visual--caption" style="margin-right: 40px;line-height: 1.2;min-height: 45px;">
					<?php the_field('caption_title'); ?>
				</figcaption>
			<?php endif; ?>
		</figure>
	</section>
</div>