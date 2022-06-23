<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale=1.0">
	<meta http-equiv="X-UA-Compatible content=ie=edge">
	<title><?php wp_title();?></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	    <link rel="stylesheet"  href="<?php bloginfo('stylesheet_url')?>"type="text/css"/>
	<?php wp_head();?>
	<div class="container geral">
		<div class="row">
			<div class="col-md-5 logo">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="logo">
			</div>
			<div class="col-md-7 titulo">
				<h1><?php bloginfo('name')?></h1>
				<p><?php bloginfo('description')?></p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<?php 
				$args = array(
				'theme_location' => 'header-menu',
				'menu' => 'Menu 1'
				);
				wp_nav_menu($args);
			?>
		</div>
	</div>
</head>
<body>
