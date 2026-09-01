<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header(); ?>

<div style="padding:36px;max-width:1180px;margin:0 auto;">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?>>
			<h1 style="font-size:36px;font-weight:800;color:var(--navy);margin-bottom:24px;"><?php the_title(); ?></h1>
			<?php if ( has_post_thumbnail() ) : ?>
				<div style="margin-bottom:24px;"><?php the_post_thumbnail( 'large' ); ?></div>
			<?php endif; ?>
			<div><?php the_content(); ?></div>
		</article>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>
