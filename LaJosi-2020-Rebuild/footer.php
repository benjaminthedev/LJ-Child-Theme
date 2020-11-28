<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LaJosi_Golfing
 */

?>

	<footer class="site-footer">

	<div class="footer__logoWrapper">
		<img src="https://lajosi.com.au/wp-content/uploads/2020/11/Lajosi-Sign_footer.png" alt="Lajosi Footer Logo" class="footer__logo">
	</div>

	<div class="footer__social">
		<ul>
		<li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
		<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
		</ul>
	</div>
<!--	<div class="current__converter">
		<?php // echo do_shortcode('[woocs]'); ?>	
	</div> -->
	<div class="footer__nav">
		<ul>
			<li><a href="https://lajosi.com.au/fitting/">Fitting</a></li>
			<!-- <li><a href="#">Terms & Conditions</a></li> -->
			<li><a href="https://lajosi.com.au/warranty/">Warranty</a></li>
			<!-- <li><a href="#">Privacy Policy</a></li> -->
			<li><a href="https://lajosi.com.au/contact-us/">Contact Us</a></li>
		</ul>
	</div>

		<div class="footer__siteInfo">
			<p>&copy; 2020. Lajosi Engineered for Golf</p>

		</div><!-- .site-info -->
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
