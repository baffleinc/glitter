<?php get_header(); ?>

	<video autoplay loop poster="<?php bloginfo('template_directory'); ?>/app/images/glitter.jpg" id="bgvid">
		<source src="<?php bloginfo('template_directory'); ?>/app/assets/glitter.webm" type="video/webm">
		<source src="<?php bloginfo('template_directory'); ?>/app/assets/glitter.mp4" type="video/mp4">
	</video>

	<div class="container">
		<div class="hero">
			<div>
				<div class="row">
					<div class="small-12 medium-8 columns medium-offset-2">
						<h1>SHIP YOUR <br> HATERS SOME <br> FUCKING GLITTER</h1>
						<p>Want to fuck someone off by sending them a glitter bomb? Looks like the other guys aren't doing it anymore! We love them but fuck them! we'll do it for $9.99.</p>
						<p><a href="#checkout" class="button">BUY NOW</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="info">
		<div class="row features">
			<div class="small-12 medium-4 columns">
				<i class="fa fa-bomb fa-5x"></i>
				<h2>100% guaranteed rage quit</h2>
				<p>We promise the recipient will lose their fucking mind. You'll piss them off more than you believe, and they wont even know its you.</p>
			</div>
			<div class="small-12 medium-4 columns">
				<i class="fa fa-star fa-5x"></i>
				<h2>100% sticky as fuck glitter</h2>
				<p>We've picked the cheapest, shittiest glitter you can find - not to save costs, but because we know the shittier the glitter, the hard it is to remove. They will be seeing sparkles for days.</p>
			</div>
			<div class="small-12 medium-4 columns">
				<i class="fa fa-user fa-5x"></i>
				<h2>100% Anonymous - they'll never know</h2>
				<p>We don't let them know who its from, so you don't cop any flak. Pretty smart eh? We do let them know it came from us though, in case they want to glitter bomb the shit out of someone.</p>
			</div>
		</div>
		<div class="row faq">
			<hr>
			<div class="small-12 medium-6 columns">
				<h2>FAQs</h2>
				<h3>I'm in. How much will it cost me?</h3>
				<p>Just $9.99USD - a small price to pay, to totally fuck up somebody's day.</p>
				<h3>Isn't someone else doing this?</h3>
				<p>They pussied out and couldn't handle the glitter overload. With our dedicated glitter packing team, we can keep up with the demand. We're capitalising off their incompetence, haters gonna hate.</p>
			</div>
			<div class="small-12 medium-6 columns">
				<h2>Why are you doing this?</h2>
				<p>We, like the other dudes doing this, want to serve justice in the most painful and beautiful way - with glitter bombs. Not only will you destroy their nerve for hours after opening, you will also leave them with a subtle reminder that someone out there wanted to say "Fuck you asshole", with glitter showing up everywhere. In their clothes, hair, food, on their keyboard, fucking everywhere.</p>

				<p>So yeah. Send us a few dollars, and we'll ship some annoying-ass glitter their way.</p>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>

	<div class="testimonial">
		<div>
			<div class="row">
				<h3 class="small-12 columns">My boss lost his fucking mind when he opened the glitter all over his shitty new office. It was the single most glorious day in my career.</h3>
			</div>
		</div>
	</div>

	<div class="checkout" id="checkout">
		  <div class="row">
		  	<div class="small-12 columns">
		  		<h2>Ready to fuck up someone's day? We sure are.</h2>
		  		<hr>
		  	</div>
		  	<div class="small-12 columns">
		  		<?php echo do_shortcode('[products skus="GB1, GB2, GB3, GB4"]'); ?>
		  	</div>
		  </div>
	</div>

	

	<?php get_footer(); ?>