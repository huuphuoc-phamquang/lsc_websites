<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div style="background:#FFFFFF;color:#1C4587">
<header style="background:#1C4587;color:#FFFFFF;display:flex;align-items:center;justify-content:space-between;padding:14px 36px;border-bottom:1px solid rgba(255,255,255,0.2)">
	<a href="https://lscftu2.com" style="display:block;width:190px">
		<?php if ( has_custom_logo() ) : ?>
			<?php the_custom_logo(); ?>
		<?php else : ?>
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo-ngang-trang-trim.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" style="width:190px;display:block">
		<?php endif; ?>
	</a>
	<div style="display:flex;align-items:center;gap:24px">
		<a href="#su-menh" style="font-size:13px;font-weight:600;color:#FFFFFF">Về chúng tôi</a>
		<a href="#hinh-anh" style="font-size:13px;font-weight:600;color:#FFFFFF">Hình ảnh</a>
		<a href="#scmission" style="font-size:13px;font-weight:600;color:#FFFFFF">SCMission</a>
		<a href="#du-an" style="font-size:13px;font-weight:600;color:#FFFFFF">Hoạt động</a>
		<a href="https://lscftu2.com/trang-chu/contact/" style="font-size:13px;font-weight:600;color:#FFFFFF">Liên hệ</a>
	</div>
</header>
