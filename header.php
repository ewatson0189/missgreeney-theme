<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>missgreeney Theme</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	
	<?php 
		
		if( is_front_page() ):
			$missgreeney_classes = array( 'missgreeney-class', 'my-class' );
		else:
			$missgreeney_classes = array( 'no-missgreeney-class' );
		endif;
		
	?>
	
	<body <?php body_class( $missgreeney_classes ); ?>>
		
		<?php wp_nav_menu(array('theme_location'=>'primary')); ?>