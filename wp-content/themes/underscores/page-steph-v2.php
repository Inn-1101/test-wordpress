<?php
/**
 * 
 * Template Name: Steph-v2
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
            the_content();
		endwhile; // End of the loop.
		?>

        <?php
            foreach(get_field('jobs') as $key => $value): ?>
                <img src="<?= $value['image'] ?>" alt="">
                <p><?= $value['title'] ?></p>
            <?php 
            endforeach;
            ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
