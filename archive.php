<?php get_header();?>

<h1><?php the_archive_title(); ?></h1>
<?php the_post_thumbnail('large'); ?>
<?php if (have_posts()) {
			 while (have_posts()) {
			 	  the_post();?>

<?php  } ?>
		 <?php  } ?>

<?php get_footer();?>