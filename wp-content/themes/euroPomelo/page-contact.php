<?php
/**
 * Template Name: Contact page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Euro_Pomelo
 * @since Euro Pomelo 1.0
 */

get_header('pomelo'); ?>

<section>
	<div class="container">

		<div class="contact_us">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-2">
					<h1>Contact Us</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-2 hidden-xs"><img src="img/img_contact_us.png" class="img-responsive" /></div>
				<div class="col-sm-6 col-xs-12">
					<form>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
						</div>
						<button type="submit" class="btn btn-default">Send Message</button>
					</form>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="address">
						<p><b>Address:</b> Some Address 44, Italy</p>
						<p><b>Phone:</b> +388919101010</p>
						<p><b>Email:</b> info@europmalle.com</p>
					</div>

					<p><b>Follow Us:</b></p>
					<div class="social">
						<a href="#"><img src="img/facebook.svg" width="18" /></a>
						<a href="#"><img src="img/twitter.svg" width="18" /></a>
						<a href="#"><img src="img/googleplus.svg" width="18" /></a>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<?php get_footer('pomelo'); ?>
