<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>
	</head>
	<?php wp_head(  ) ?>
	<body>
	<header>
		<div class="container">
			<?php 
				wp_nav_menu( 
					array( 
						'theme_location' => 'top-menu',
						//'menu' => 'Top Menu',
						'menu_class' => 'top-bar'
					)
				);
			 ?>
		</div>
	</header>
