<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aldano
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	<div id="content" class="site-content">
		<div class="container-fluid navbar-container">
			<div class="container">
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>                        
							</button>
							<a class="navbar-brand" href="#">
								<img src="https://vignette.wikia.nocookie.net/dragon-ball-z-kai/images/4/44/DBZ_Logo.png/revision/latest?cb=20120915132650">
							</a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
						  <!-- <ul class="nav navbar-nav">
						    <li class="active"><a href="#">Home</a></li>
						    <li class="dropdown">
						      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
						      <ul class="dropdown-menu">
						        <li><a href="#">Page 1-1</a></li>
						        <li><a href="#">Page 1-2</a></li>
						        <li><a href="#">Page 1-3</a></li>
						      </ul>
						    </li>
						    <li><a href="#">Page 2</a></li>
						    <li><a href="#">Page 3</a></li>
						  </ul> -->
						  <ul class="nav navbar-nav navbar-right">
						    <li><a href="#">Home</a></li>
						    <li><a href="#">Music</a></li>
						    <li><a href="#">Blog</a></li>
						    <li><a href="#">Contact</a></li>
						  </ul>
						</div>
					</div>
				</nav>
			</div>
		</div>