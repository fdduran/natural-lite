<style type="text/css" media="screen">

	#logo, #masthead, #navigation {
		<?php if ( 'center' == get_theme_mod('title_align', 'center') ) { ?>
			text-align: center;
		<?php } ?>
	}
	
	.natural-header-active #logo, 
	.natural-header-active #masthead {
		<?php if ( 'center' == get_theme_mod('title_align', 'center') ) { ?>
			left: 50%;
			-webkit-transform: translateX(-50%) translateY(-50%);
			-ms-transform: translateX(-50%) translateY(-50%);
			transform: translateX(-50%) translateY(-50%);
		<?php } ?>
	}
	
	#logo, #navigation, #masthead {
		<?php if ( 'right' == get_theme_mod('title_align', 'center') ) { ?>
			right: 0;
			text-align: right;
		<?php } ?>
	}
	
	.natural-header-active #masthead {
		<?php if ( 'right' == get_theme_mod('title_align', 'center') ) { ?>
			right: 48px;
		<?php } ?>
	}
	
	#logo, #navigation, #masthead {
		<?php if ( 'left' == get_theme_mod('title_align', 'center') ) { ?>
			left: 0;
			text-align: left;
		<?php } ?>
	}
	
	.natural-header-active #masthead {
		<?php if ( 'left' == get_theme_mod('title_align', 'center') ) { ?>
			left: 48px;
		<?php } ?>
	}

</style>