<?php
/*
 * The template for displaying the footer. 
 * Contains closing divs for header.php.
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
				
				</div><!-- end .background-wrapper -->
				<footer class="footer" role="contentinfo">
					<div class="inner-footer">
						
						<section class="foot--primary">
							<div class="grid-container">
								<div class="grid-x grid-padding-x">
									<div class="small-12 medium-12 large-12 cell">
										<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
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