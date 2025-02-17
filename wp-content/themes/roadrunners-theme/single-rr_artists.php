<?php
/**
 * Theme Name: 		Roadrunners - A One-Page Music Theme
 * Theme Author: 	Dan Richardson - Subatomic Themes
 * Theme URI: 		http://themeforest.net
 * Author URI: 		http://themeforest.net/user/SubatomicThemes
 * File:			single-rr_artists.php
 * =========================================================================================================================================
 *
 * The Template for displaying all single posts in the rr_artists post type (Roadrunners plugin needed for this).
 *
 * @package roadrunners
 *
 * V1.1.0
 *
 *  - Added post pagination.
 *
 */
get_header(); ?>

<div id="main" class="grid-container" role="main">
	<div class="grid-100 tablet-grid-100 mobile-grid-100">
	<?php while ( have_posts() ) : the_post(); ?>
	
		<?php get_template_part( 'content', 'artists' ); ?>
		
		<br class="clear" />
		<div class="grid-100 tablet-grid-100 mobile-grid-100">
		
			<?php roadrunners_post_nav(); ?>
			
		</div>
		<br class="clear" />
		
		<?php if ( comments_open() || get_comments_number() ) : ?>
		
			<div class="divider"></div>
			<?php comments_template(); ?>
			
		<?php endif; ?>
		
	<?php endwhile; ?>
		
	</div>
</div>
<?php get_footer(); ?>