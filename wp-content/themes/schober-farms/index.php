<?php get_header(); ?>

<?php 
//BANNER
if ( has_post_thumbnail() ) {
	echo '<div class="mainBanner">';
	the_post_thumbnail();
	echo '</div>';
} 
?>

<?php 
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); 
        //
        // Post Content here
        //
        the_content();
    }
} 
?>


<?php get_footer(); ?>