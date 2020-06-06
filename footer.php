<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package freasy
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<span>Freasy - Comida Congelada</span>
			<span class="sep"> | </span>
			<span class="copy-date"><?php echo date('Y'); ?> &copy; Copyright - Freasy</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
