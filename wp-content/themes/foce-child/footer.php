<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>

	<footer id="colophon" class="site-footer">
        <div class="oscars">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/oscars.png'; ?> " alt="recompense aux oscars">
        </div>
        <ul>
            <li><a href="#">Mentions Légales</a></li>
            <li><a href="#">STUDIO KOUKAKI</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>