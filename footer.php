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
									<div class="small-12 large-12 cell">
										<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/insightx-logo-white-n.svg" width="100px" title="Logo - Insight.X"></a>
									</div>
									<div class="small-12 medium-6 large-6 cell">
										<p class="footer--sm">Company number: 12674763<br>
										71-75 Shelton Street, London WC2H 9JQ</p>
									</div>
									<div class="small-12 medium-6 large-6 cell medium-text-right">
										<div class="foot--contact">
											<p class="footer--sm">Email InsightX on <a href="mailto:info@insightxintel.com" title="Email InsightX">info@insightxintel.com</a><br>
											Find InsightX on <a href="https://www.linkedin.com/company/insightx/" target="_blank" title="InsightX on LinkedIn">LinkedIn</a><br>
											<a href="<?php echo get_page_link( get_page_by_path( 'privacy-policy' ) ); ?>" title="Privacy Policy">Privacy Policy</a> | <a href="<?php echo get_page_link( get_page_by_path( 'cookie-policy' ) ); ?>" title="Cookie Policy">Cookie Policy</a></p>
										</div>
									</div>
									<div class="small-12 large-12 cell">
										<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> Ltd. All rights reserved.</p>
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