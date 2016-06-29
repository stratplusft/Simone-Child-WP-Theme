<?php
/**
 * The child theme template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 * 
 * @package simone-child
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            <?php get_sidebar( 'footer' ); ?>
		<div class="site-info">
			<p>&copy; 2016 Typhina Web Development Limited.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>