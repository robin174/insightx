<?php
/*
Template Name: Page - How we do it
*/
get_header(); ?>

	<div class="content">
		<main class="main">

			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<section class="small-12 medium-12 large-12 cell">

						<div class="grid-container grid-x grid-padding-x">
	               			<div class="small-12 medium-12 large-12 cell">
								<h1 class="with--logo"><img class="in--title show-for-medium" src="<?php echo get_template_directory_uri(); ?>/images/insightx-logo-white-n.svg" title="Logo - Insight.X ">Reputational Risk Reports</h1>
							</div>
						</div>			

						<div class="grid-container grid-x grid-padding-x">
							<div class="small-12 medium-12 large-12 cell columns--two" >
								<section class="col--baseline">
									<?php get_template_part('templates/template-buildingblocks'); ?>
								</section>
							</div>
						</div>

					</section>
	            </div>
	        </div>

		</main><!-- end #main -->
	</div> <!-- end #content -->


<?php get_footer(); ?>