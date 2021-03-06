<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
<div class="content">
	<div class="inner-content">

		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<section class="small-12 medium-12 large-12 cell">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<figure>
							<img src="<?php the_field('image_header'); ?>">
							<?php if( get_field('image_credit_required') ): ?>
								<figcaption class="caption"><?php the_field('credit_name'); ?><?php if( get_field('credit_source') ): ?>&nbsp;|&nbsp;<?php if( get_field('credit_url') ): ?><a href="<?php the_field('credit_url'); ?>" target="_blank" title="<?php the_field('credit_name'); ?>, <?php the_field('credit_source'); ?>"><?php endif; ?><?php the_field('credit_source'); ?><?php if( get_field('credit_url') ): ?></a><?php endif; ?><?php endif; ?></figcaption>
							<?php endif; ?>
						</figure>
						<div class="grid-container grid-x grid-padding-x align-center">
							<main class="main small-12 medium-11 large-10 cell" role="main">
							    <h1 class="title--article"><?php the_title() ?></h1>
							    <section class="data--entry">
							    	By <?php the_author(); ?>&nbsp;-&nbsp;<?php the_time('F j, Y'); ?>
								</section>
								<section class="block--standfirst">
									 <?php if( get_field('include_standfirsts') ): ?>
									 	<?php if( have_rows('standfirst_list') ): // Repeater Field Name ?>
					                    <ul class="standfirst"> 
					                        <?php while( have_rows('standfirst_list') ): the_row(); ?>
					                            <li><span><?php the_sub_field('standfirst_point'); ?></span></li>
					                        <?php endwhile; ?>
					                    </ul>
					                    <?php endif; ?>
									 <?php endif; ?>
							    </section>
							    <article>
							    	<?php get_template_part('templates/template-buildingblocks'); ?>
								</article>
							    <p><a href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true">&larr; Back to &lsquo;This is why it is important&rsquo;</a></p>
							</main>
						</div>
					<?php endwhile; endif; ?>

				</section>
			</div>
		</div>

	</div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php get_footer(); ?>