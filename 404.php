<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>

	<div class="content">
        <div class="animation">
            <?php get_template_part('templates/animation-404-live'); ?>
        </div>
	</div><!-- end #content -->

	<?php /*
	<div class="content">
		<main class="main">
			<div class="grid-container grid-x grid-padding-x align-center">
                <div class="small-12 medium-10 large-10 cell">
                	<section class="blockHome text-center">
                		<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/images/insightx-logo-white-n.svg" width="400px">
						</figure>
						<h2>404.</h2>
						<p style="color:#798d91;">The article you were looking for was not found, but maybe try looking again</p>
						<p>&larr;&nbsp;<a style="color:#df0914;" href="<?php echo get_page_link( get_page_by_path( 'this-is-why-it-is-important' ) ); ?>">Back to &lsquo;This is why it is important&rsquo;</a></p>
                	</section>
				</div>
            </div>
		</main><!-- end #main -->
	</div> <!-- end #content -->
	*/?>

<?php get_footer(); ?>