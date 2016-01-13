<!-- BEGIN .slideshow -->
<div class="slideshow radius-full">

	<!-- BEGIN .flexslider -->
	<div class="flexslider radius-full loading" data-speed="<?php echo get_theme_mod('transition_interval', '12000'); ?>" data-transition="<?php echo get_theme_mod('transition_style', 'fade'); ?>">
	
		<div class="preloader"></div>
		
		<!-- BEGIN .slides -->
		<ul class="slides">
		
			<?php $slider = new WP_Query(array('cat'=>get_theme_mod('category_slideshow_home', '0'), 'posts_per_page'=>get_theme_mod('postnumber_slideshow_home', '6'))); ?>
			<?php if ($slider->have_posts()) : while($slider->have_posts()) : $slider->the_post(); ?>
			<?php $video = natural_lite_first_embed_media(); ?>
			
			<li <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<?php if ( has_post_thumbnail()) { ?>
					<a class="feature-img" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'natural-lite' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail( 'featured-large' ); ?></a>
				<?php } elseif ( ! empty( $video ) ) { ?>
					<div class="feature-vid"><?php echo $video ?></div>
				<?php } else { ?>
					<a class="feature-img" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'natural-lite' ), the_title_attribute( 'echo=0' ) ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" /></a>
				<?php } ?>
				
				<?php if ( ! empty( $post->post_excerpt ) ) { ?>
					
					<!-- BEGIN .information -->
					<div class="information absolute-center">
							
							<!-- BEGIN .excerpt -->
							<div class="excerpt">
								
								<h2 class="headline text-center"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo get_the_excerpt(); ?></a></h2>
							
							<!-- END .excerpt -->
							</div>
			
					<!-- END .information -->
					</div>
					
				<?php } ?>
				
			</li>
			
			<?php endwhile; endif; ?>
			<?php wp_reset_postdata(); ?>
			
		<!-- END .slides -->
		</ul>
		
	<!-- END .flexslider -->
	</div>
	
	<ul class="flex-control-nav radius-bottom">
		
		<?php if ($slider->have_posts()) : while($slider->have_posts()) : $slider->the_post(); ?>
		
		<?php $trimtitle = get_the_title(); ?>
		<?php $shorttitle = wp_trim_words( $trimtitle, $num_words = 4, $more = '' ); ?>
		
		<li><a><?php echo esc_html( $shorttitle ); ?></a></li>
		
		<?php endwhile; endif; ?>
		<?php wp_reset_postdata(); ?>
		
	</ul>

<!-- END .slideshow -->
</div>