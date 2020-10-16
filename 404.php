<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>
			
	<div class="content">
		<main class="main">

			<div class="grid-container grid-x grid-padding-x align-center">
                <div class="small-12 medium-10 large-10 cell">

					<article class="content-not-found">
						<header class="article-header">
							<h1><?php _e( 'Epic 404 - Article Not Found', 'jointswp' ); ?></h1>
						</header> <!-- end article header -->
				
						<section class="entry-content">
							<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'jointswp' ); ?></p>
						</section> <!-- end article section -->
					</article> <!-- end article -->
	
				</div>
            </div>

		</main><!-- end #main -->
	</div> <!-- end #content -->

<?php get_footer(); ?>