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
<div class="u-gridRow">
	<div class="u-gridCol4">
		<div class="Sidebar">
			<div class="Sidebar-inner">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div><!-- u-gridCol4 -->
	
	<div class="u-gridCol8 Coll-8">    
	<div class="hometitle">
		<h3>Welkom op de site van Wulms Daken</h3>
	</div>

<!-- --------------------- -->
	<?php the_content(); ?>
<!-- --------------------- -->

		<div class="hp-imgRow u-gridRow">
			<div class="hp-img u-gridCol4">
				<a target="_blank" href="<?php echo get_stylesheet_directory_uri(); ?>/img/Dakbedekking.jpg">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Dakbedekking.jpg">
				</a>
			</div>  
		
			<div class="hp-img u-gridCol4">
				<a target="_blank" href="<?php echo get_stylesheet_directory_uri(); ?>/img/Dakgoot.jpg">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Dakgoot.jpg">
				</a>
			</div>
		
			<div class="hp-img u-gridCol4">
				<a target="_blank" href="<?php echo get_stylesheet_directory_uri(); ?>/img/Dakisolatie.jpg">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Dakisolatie.jpg">
				</a>
			</div>
		</div>
		
		<div class="hp-imgRow  u-gridRow">
			<div class="hp-img u-gridCol4">
				<a target="_blank" href="<?php echo get_stylesheet_directory_uri(); ?>/img/Dakplaten.jpg">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Dakplaten.jpg">
				</a>
			</div>
		
			<div class="hp-img u-gridCol4">
				<a target="_blank" href="<?php echo get_stylesheet_directory_uri(); ?>/img/Eftelingbosrijk.jpg">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Eftelingbosrijk.jpg">
				</a>
			</div>
		
			<div class="hp-img u-gridCol4">
				<a target="_blank" href="<?php echo get_stylesheet_directory_uri(); ?>/img/Leien.jpg">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Leien.jpg">
				</a>
			</div> 
		</div>
	</div><!-- u-gridCol8 -->
</div><!-- u-gridRow -->

<!-- ========================================== -->


				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>
