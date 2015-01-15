<?php get_header(); ?>

	<header>
		<h1>Glitterbomb.com</h1>
	</header>
	
	<?php if(is_page('checkout')) : ?>
		<div class="row">
			<div class="small-12 columns">
				<h1>Fuck yeah.</h1>
				<h3>Now who is the poor bastard that is receiving said glitter bomb?</h3>
				<hr>
			</div>
		</div>
	<?php endif; ?>

	<div class="row">
		<div class="small-12 columns">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
	</div>

<?php get_footer(); ?>