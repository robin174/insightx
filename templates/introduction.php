<div style="position: relative;">
	<!-- 01. Blank screen -->
	<!-- 02. Transition-in orange circles background -->


	<section class="boxFirst" style="width:100%;height:600px;position: absolute;z-index:2;background-image: url('<?php echo get_template_directory_uri(); ?>/images/insightx-circles-col-v1.png');"></section>
	<section class="boxSecond" style="width:100%;height:600px;position: absolute;z-index:3;background-color:blue;"></section>


	<!-- NB. As these use z-index they cover everything underneath, so the link is not live -->

	<!-- 03. "Reputations are hard won..." -->
	<!-- 04. "But easily lost" -->
	<section class="blockIntroduction">
		<span class="appearFirst">Reputations are hard won...<br></span>
		<span class="appearSecond">but easily lost</span>
	</section>

	<!-- NB. Logo needs updating as has natural padding-right in the SVG -->

	<!-- 05. Logo - dot 
	(with an SVG - can we update the colour of the 'Insight', '.', 'X', but the whole logo in place to hold the position of the dot (not quite centered)) -->
	<!-- 06. Logo - Insight -->
	<!-- 07. Logo - Insight X -->
	<!-- 08. Because Reputation is Everything -->
	<!-- 09. Flare background opens and moves forward -->
	<!-- 10. 'What we do' appears underneath -->
	<!-- 11. And... hold -->
	<section class="blockLogo">
		<figure class="appearLogo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/insightx-logo-white-n.svg">
		</figure>
		<span class="appearStrapline">Because <span class="red">Reputation</span> is Everything</span>
		<span class="appearLink"><span class="dot--brand"><i class="fas fa-square-full"></i></span><a href="<?php echo get_page_link( get_page_by_path( 'what-we-do' ) ); ?>">What we do</a></span>
	</section>


	<!-- TO DO
	1. Sort timings 
	2. Mobile/tablet versions?
	3. Animate SVG (nect big area to brainstorm)
	4. Get logos in place -->


	<!-- Other thoughts - 
	1. Can we make a background-image change scale or does it need to be it's own image and we layer on top 
	2. How does this work on mobile??? -->
</div>