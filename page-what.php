<?php
/*
Template Name: Page - What we do
*/
get_header(); ?>

	<div class="content">
		<main class="main">

			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<section class="small-12 medium-12 large-12 cell">

						<div class="grid-container grid-x grid-padding-x align-center">
	               			<div class="small-12 medium-9 large-9 cell">
								
	               				<section class="section--part-01">
									<?php if( have_rows('part_01') ): // Repeater Field Name ?>
										<?php while( have_rows('part_01') ): the_row(); ?>
											<h2><?php the_sub_field('introduction_part_01');?></h2>
			               					<section class="content--enlarged">
			               						<?php the_sub_field('content_part_01');?>
			               					</section>
										<?php endwhile; ?>
									<?php endif; ?>
								</section>

								<section class="section--part-02">
		               				<?php if( have_rows('part_02') ): // Repeater Field Name ?>
										<?php while( have_rows('part_02') ): the_row(); ?>
			               					<section class="content--enlarged">
				               					<?php the_sub_field('content_part_02');?>
				               				</section>
		               					<?php endwhile; ?>
									<?php endif; ?>
								</section>

								<section class="section--link">
									<a class="buttonTextLarge" href="<?php echo get_page_link( get_page_by_path( 'how-we-do-it-ix' ) ); ?>">The Solution</a>
								</section>

							</div>
						</div>			

						<div class="grid-container grid-x grid-padding-x">
							<div class="small-12 medium-12 large-12 cell columns--two" >
								<?php get_template_part('templates/template-buildingblocks'); ?>
							</div>
						</div>

					</section>
	            </div>
	        </div>

		</main><!-- end #main -->
	</div> <!-- end #content -->


<?php get_footer(); ?>