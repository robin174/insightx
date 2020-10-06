<?php
/*
Template Name: Page - Homepage
*/
get_header(); ?>

	<div class="content">
		<main class="main">

			<div class="grid-container grid-x grid-padding-x align-center">
                <div class="small-12 medium-10 large-10 cell">
                	<section class="blockHome text-center">
                		<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/images/insightx-logo-white-n.svg" width="400px">
						</figure>
						<h2>Because <span class="red">Reputation</span> is Everything</h2>
						<p><span class="dot--brand"><i class="fas fa-square-full"></i></span><a href="<?php echo get_page_link( get_page_by_path( 'what-we-do' ) ); ?>">What we do</a></p>
                	</section>
					
					
                </div>
            </div>

		</main><!-- end #main -->
	</div> <!-- end #content -->


<?php get_footer(); ?>