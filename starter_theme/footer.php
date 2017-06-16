<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_theme
 */

?>

	</div><!-- #content -->
<!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
    function pageCreate(){
         ///other scripts here
        $(".videofundo").css("top", "50% !important;");
}
    </script>
    
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
</body>
</html>
