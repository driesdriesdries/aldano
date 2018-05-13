<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aldano
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- Static Background Section Section -->
			<div class="container-fluid static-background-container" style="background:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?php echo get_theme_file_uri("/images/aldano-cover-background.png"); ?>'); background-size: cover; background-position: center center; background-repeat: no-repeat; background-attachment: fixed; height: 500px;">
				<div class="container">
					<div class="col-sm-6">
						<h1>NEW DIGITAL ALBUM</h1>
						<h2>COLD SMOKE</h2>
						<h3>MARCH '18</h3>
						<p>In this world, something has already happened. Some things have already ended. For the better, vicous old men no longer run things. To the worse, aggressive younger ones keep making and changing the rules.</p>
						<span>READ MORE ></span>
					</div>
					<div class="col-sm-6">
						<audio controls>
						  <source src="<?php echo get_theme_file_uri('/audio/teaser-tracks/1-dirt-diamonds-teaser.mp3'); ?>" type="audio/ogg">
						  <source src="horse.mp3" type="audio/mpeg">
						Your browser does not support the audio element.
						</audio>
					</div>
				</div>
			</div>

			<!-- Next Section -->
			<div class="container-fluid vinyl-section">
				<div class="container">
					<div class="col-md-6 col-sm-12">
						<h1>LIMITED EDITION</h1>
						<h2>COLLECTOR'S VINYL</h2>
						<h3>MARCH '18</h3>
						<p>Available to order, is our physical Cold Smoke vinyl album, convered in a copy of the original screen printed artwork.</p>
						<p>Please note, there's only a limited amount of these available.</p>
						<span>READ MORE ></span>
					</div>
					<div class="col-md-6 col-sm-12">
						<img src="https://cdn.shopify.com/s/files/1/0580/0965/products/CH_StoreRecord.jpg?v=1507756031">
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
