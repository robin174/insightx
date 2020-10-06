<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
				
				</div><!-- end .background-wrapper -->
				<footer class="footer" role="contentinfo">
					<div class="inner-footer">
						
						<section class="foot--primary">
							<div class="grid-container">
								<div class="grid-x grid-padding-x">
									<div class="small-12 medium-6 large-6 cell">
										<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/insightx-logo-white-n.svg" width="100px" title="Logo - Insight.X"></a>
										<p class="footer--sm">Company number: 12674763<br>
										71-75 Shelton Street, London WC2H 9JQ</p>
										<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> Ltd. All rights reserved.</p>
									</div>
									<div class="small-12 medium-6 large-6 cell text-right">
									</div>
								</div>
							</div>
						</section>
	
					</div><!-- end #inner-footer -->
				</footer><!-- end .footer -->
			
			</div><!-- end .off-canvas-content -->
		</div><!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html><!-- end page -->