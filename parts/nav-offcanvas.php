<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<ul class="menu">
			<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/insightx-logo-grey-n.svg" width="150px" title="Logo - Insight.X"></a></li>
		</ul>
	</div>
	<div class="top-bar-right float-right">
		<ul class="menu">
			<li><button class="menu-fa" type="button" data-toggle="off-canvas"><i class="fas fa-2x fa-bars"></i></button></li>
			<?php /* <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> */ ?>
			<?php /* <li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li> */ ?>
		</ul>
	</div>
</div>