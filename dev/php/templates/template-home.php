<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--home" id="post-<?php the_ID(); ?>">
			<div class="pagetitle">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="Content-entry">
			
<!-- ========================================== -->
<div class="hometitle">
	<h3>Welkom op de site van Wulms Daken</h3>
</div>

<!-- --------------------- -->
	<?php the_content(); ?>
<!-- --------------------- -->

<div class="hp-imgRow">
	<div class="hp-img u-gridCol4">
		<img src="http://placehold.it/235x135/ccc">
	</div>

	<div class="hp-img u-gridCol4">
		<img src="http://placehold.it/235x135/ccc">
	</div>

	<div class="hp-img u-gridCol4">
		<img src="http://placehold.it/235x135/ccc">
	</div>
</div>

<div class="hp-imgRow">
	<div class="hp-img u-gridCol4">
		<img src="http://placehold.it/235x135/ccc">
	</div>

	<div class="hp-img u-gridCol4">
		<img src="http://placehold.it/235x135/ccc">
	</div>

	<div class="hp-img u-gridCol4">
		<img src="http://placehold.it/235x135/ccc">
	</div>
</div>


<!-- ========================================== -->


				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>
