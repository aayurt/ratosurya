<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme Egg
 * @subpackage Eggnews
 * @since 1.0.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	

 
<?php wp_reset_postdata(); ?>
 <?php query_posts('posts_per_page=2'); ?>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header class="entry-header">
					<h1 class="entry-title"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
<?php $tagQuery = new WP_Query( 'tag=nepal&posts_per_page=1' ); ?>
<?php while($tagQuery->have_posts()) : $tagQuery->the_post(); ?>
<div class="container">
  <div class="row">
    <div class="col-sm">
	  <?php 
	 if(has_post_thumbnail()){
                  the_post_thumbnail();
             } 
	  the_title(); ?>
	  
    </div>
    <div class="col-sm">
      <div class="row">
	  <div class="col-5">
	Row-1
	</div>
    <div class="col-7">
	Row-1 Topic
	</div>
	</div>
	<div class="row">
	<div class="col-5">
	Row-2
	</div>
    <div class="col-7">
	Row-2 Topic
	</div>
	</div>
	<div class="row">
	<div class="col-5">
	Row-3
	</div>
    <div class="col-7">
	Row-3 Topic
	</div>
	</div>
    </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>
</div
<?php endwhile; ?> >
<ul>
<?php $tagQuery = new WP_Query( 'tag=nepal&posts_per_page=1' ); ?>
<?php while($tagQuery->have_posts()) : $tagQuery->the_post(); ?>
NEWS
<li>
<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
<ul><li><?php the_content(); ?></li>
</ul>
</li>
<?php endwhile; ?> 
</ul> 
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
eggnews_sidebar();
get_footer();
