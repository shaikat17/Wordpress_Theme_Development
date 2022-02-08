<?php get_header(); ?>
	<div class="main">
		<div class="container">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<article class="post">
				<h3><?php the_title(); ?></h3>
					<div class="meta">
					Created By: <?php the_author(); ?> on <?php the_time('F j, Y g:ia'); ?>
				</div>
				<?php the_content(); ?>
				
				</article>
				<?php endwhile; ?>
			<?php else : ?>
			<?php echo wpautop('Sorry No post found'); ?>
		<?php endif; ?>
		</div>
	</div>

	<?php wP_footer(); ?>
