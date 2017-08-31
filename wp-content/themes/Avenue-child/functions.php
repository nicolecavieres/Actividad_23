<?php 

function dl_enqueue_scripts() {
		$theme_data = wp_get_theme();

		/* Register Scripts */
		
		wp_register_script('bxslider', get_parent_theme_file_uri('/js/jquery.bxSlider.min.js'), array('jQuery_migrate'), $theme_data->get( 'Version' ), true);

		wp_register_script('superfish', get_parent_theme_file_uri('/js/superfish.js'), array('jQuery_migrate'), $theme_data->get( 'Version' ), true);

		wp_register_script('effects', get_parent_theme_file_uri('/js/effects.js'), array('jQuery_migrate'), $theme_data->get( 'Version' ), true);


		/* Enqueue Scripts */
		wp_enqueue_script('bxslider');
		wp_enqueue_script('superfish');
		wp_enqueue_script('effects'); 

	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );

?>