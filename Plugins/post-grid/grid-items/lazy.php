<?php

/*
* @Author 		pickplugins
* Copyright: 	2015 pickplugins
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 
		
		if($lazy_load_enable=='yes'){
			
			$html.= '<div id="post-grid-lazy-'.$post_id.'" class="post-grid-lazy"><img src="'.$lazy_load_image_src.'"/></div>';
				$html .= "<script>
				
				jQuery( window ).load(function() {
				
				jQuery('#post-grid-lazy-".$post_id."').fadeOut();
				jQuery('#post-grid-".$post_id."').fadeIn();
				});

				</script>";
				

		
		}