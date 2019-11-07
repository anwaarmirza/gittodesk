<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Cepon
 * @since Cepon 2.8.0
 test
 */

	get_header(); 
	mas_custom_breadcrumbs();
            ?>
       <div class="container" style="background-color:#FFFFFF;">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8" style="padding-left:10px;padding-right:10px;">
				
					<div id="searchresult" style="margin-top:10px;">
        <?php
            /* Queue the first post, that way we know who
             * the author is when we try to get their name,
             * URL, description, avatar, etc.
             *
             * We reset this later so we can run the loop
             * properly with a call to rewind_posts().
             */
            if ( have_posts() )
                the_post();
				
            /* Since we called the_post() above, we need to
             * rewind the loop back to the beginning that way
             * we can run the loop properly, in full.
             */
            rewind_posts();
        
            /* Run the loop for the author archive page to output the authors posts
             * If you want to overload this in a child theme then include a file
             * called loop-author.php and that will be used insteadtest.
             */
             get_template_part( 'search-loop', 'search' );
             
        ?>
			</div>	
				
			</div>	
			<div class="col-md-4"><?php include (TEMPLATEPATH . '/mas-framework/right-section1.php'); ?></div>
		</div>
	</div>
</div>

<?php 
	//get_template_part( 'after', 'content' );
	get_footer(); ?>
