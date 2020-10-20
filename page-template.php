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
					<section>
						<?php if(is_page('privacy-policy')): { ?>
							<div class="small-12 medium-10 large-10 cell">
						        <p style="font-size:90%;">
						        	<br>
						            ---<br>
						            <i>This page was last updated: <?php the_modified_date(); ?></i>
						        </p>
							</div>
						<?php } endif; ?>
					</section>
                </div>
            </div>

		</main><!-- end #main -->
	</div> <!-- end #content -->


<?php get_footer(); ?>