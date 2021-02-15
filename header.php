<?php
/**
 * header
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
		<title>Event theme</title>
</head>
<body>
	<div class="wrapper"> 


			

				<nav>
<?php
			wp_nav_menu(
				array(
					'theme_location'=>'top-menu',
				)
			);
		?>
	</nav>

