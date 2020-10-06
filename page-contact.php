<?php
/*
Template Name: Page - Contact
*/
get_header(); ?>

	<div class="content">
		<main class="main">

			<div class="grid-container grid-x grid-padding-x">
                <div class="small-12 large-4 medium-4 cell">
					<h4 class="title--contact"><?php the_title(); ?></h4>
					<?php the_field('contact_introduction');?>
                </div>
                <div class="small-12 large-8 medium-8 cell">
                	<section class="form--contact">
                		<?php $contactform = get_field('contact_shortcode');
                		echo do_shortcode($contactform); ?>
                	</section>
                </div>
            </div>

		</main><!-- end #main -->
	</div> <!-- end #content -->


<?php get_footer(); ?>