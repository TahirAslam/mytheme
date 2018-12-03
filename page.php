<?php /* Template Name: Page */ ?>
<?php get_header(); 
if (have_posts()): while(have_posts()): the_post(); endwhile;else:echo'<p>No Post</p>';endif;?>
<?php get_footer(); ?>