<?php
/*
Template Name: Page - Template
*/
get_header(); ?>

	<div class="content">
		<main class="main">

			<div class="grid-container grid-x grid-padding-x">
                <div class="small-12 large-12 medium-12 cell">
					<h1 class="without--logo"><?php the_title(); ?></h1>
					 <section>
						<?php get_template_part('templates/template-buildingblocks'); ?>
					</section>
                </div>
            </div>

		</main><!-- end #main -->
	</div> <!-- end #content -->


<?php get_footer(); ?>