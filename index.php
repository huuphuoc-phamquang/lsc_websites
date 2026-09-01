<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header(); ?>

<div style="padding:36px;max-width:1180px;margin:0 auto;">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?> style="margin-bottom:48px;">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php if ( has_post_thumbnail() ) : ?>
					<div style="margin:16px 0;"><?php the_post_thumbnail( 'large' ); ?></div>
				<?php endif; ?>
				<div><?php the_excerpt(); ?></div>
			</article>
		<?php endwhile; ?>

		<?php the_posts_pagination(); ?>
	<?php else : ?>
		<p><?php esc_html_e( 'Không có nội dung.', 'lsc-theme' ); ?></p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
