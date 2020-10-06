<?php
/*
Template Name: Page - Team
*/
get_header(); ?>

	<div class="content">
		<main class="main">

			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<section class="small-12 medium-12 large-12 cell">
	               
	               		<div class="grid-container grid-x grid-padding-x">
	               			<div class="small-12 medium-12 large-12 cell">
								<h1 class="with--logo"><img class="in--title" src="<?php echo get_template_directory_uri(); ?>/images/insightx-logo-white-n.svg" title="Logo - Insight.X"><?php the_title(); ?></h1>
							</div>
						</div>
						<div class="grid-container grid-x grid-padding-x">
			            <?php
					        $args=array(
					            'post_type' => 'team',
					            'post_status' => 'publish',
					            'orderby' => 'menu_order',
								'order'   => 'ASC'
					        );
					        $my_query = null;
					        $my_query = new WP_Query($args);
					        if( $my_query->have_posts() ) {
					        while ($my_query->have_posts()) : $my_query->the_post(); ?>
			            		<?php get_template_part('templates/template-team'); ?>
					    	<?php endwhile; }
					    	wp_reset_query(); ?>
					    </div>

				    </section>
				</div>
			</div>

		</main><!-- end #main -->
	</div> <!-- end #content -->


<?php get_footer(); ?>