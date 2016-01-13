<!-- BEGIN .information -->
<div class="information radius-full shadow">
	
	<div class="img-holder">
	<?php if ( has_post_thumbnail()) { ?>
		<a class="feature-img radius-top" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'natural-lite' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail( 'featured-small' ); ?></a>
	<?php } ?>
	</div>
	
	<!-- BEGIN .article -->
	<div class="article">
		
		<div class="text-holder">
			<h2 class="title text-center"><?php the_title(); ?></h2>
			<?php the_excerpt(); ?>
		</div>
		
		<div class="align-center text-center">
			<a class="button" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'natural-lite' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php esc_html_e("Learn More", 'natural-lite'); ?></a>
		</div>
	
	<!-- END .article -->
	</div>

<!-- END .information -->
</div>