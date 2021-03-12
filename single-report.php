<?php 
/**
 * The template for displaying single reports
 */

get_header(); ?>
			
<div class="content">
	<div class="inner-content">

		<div class="grid-container">
			<div class="grid-x grid-margin-x grid-padding-x align-center">
				<section class="small-12 medium-11 large-10 cell">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<div class="grid-container grid-x">
							<div class="small-12 medium-12 large-12">
								<figure>
									<img src="<?php the_field('image_header'); ?>">
								</figure>
							</div>
							<main class="main small-12 medium-12 large-12 cell" role="main">
								<div class="post--report"> 
								    <h1 class="title--article"><?php the_title() ?></h1>
								    <?php /*
								    <section class="data--entry">
								    	By <?php the_author(); ?>&nbsp;-&nbsp;<?php the_time('F j, Y'); ?>
									</section>
									*/ ?>
								    <article>
								    	<?php get_template_part('templates/template-buildingblocks'); ?>
									</article>
								    <p>&larr;&nbsp;<a href="<?php echo get_page_link( get_page_by_path( 'our-reports' ) ); ?>" title="Page - Our rports">Back to &lsquo;Our reports&rsquo;</a></p>
								</div>
							</main>
						</div>
					<?php endwhile; endif; ?>

				</section>
			</div>
		</div>

	</div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php get_footer(); ?>