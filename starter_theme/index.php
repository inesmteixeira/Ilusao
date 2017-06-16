<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
            
            
			             <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					       <h1 class="entry-title"><?php the_title(); ?></h   1>

                        </article><!-- #post-## -->
                    
<!--
			<?php endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
-->
          
<div class="botao" >
  <svg height="60" width="320">
    <rect class="caixa" height="60" width="320" />
  </svg>
   <div class="texto" style="margin-top:0;"><a href="wp-content/themes/starter_theme/seg.html">ENTER</a></div>
</div>
 


<div class= "fundo">
    <video class="video" autoplay loop muted>
  <source src="<?php echo get_stylesheet_directory_uri(); ?>/images/olho.mp4" type="video/mp4">
</video>
</div>  
            
            

		</main><!-- #main -->
        
        
	</div><!-- #primary -->

    

<?php
get_footer();
