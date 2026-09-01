<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
	<footer style="background:#1C4587;color:#FFFFFF">
		<div id="footer-grid" style="padding:44px 36px;display:grid;grid-template-columns:1.4fr 0.8fr 1fr;gap:44px">
			<div id="footer-brand-col" style="display:flex;flex-direction:column;gap:14px">
				<div id="site-logo-footer">
					<?php if ( has_custom_logo() ) : ?>
						<?php the_custom_logo(); ?>
					<?php else : ?>
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo-ngang-trang-trim.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" style="display:block">
					<?php endif; ?>
				</div>
				<span id="footer-note" style="font-size:12px;font-weight:800;letter-spacing:0.1em;text-transform:uppercase;color:rgba(243,245,248,0.55)"><?php echo esc_html( get_theme_mod( 'lsc_footer_note', 'Phân hiệu Trường Đại học Ngoại thương tại TP. Hồ Chí Minh' ) ); ?></span>
				<p id="footer-about" style="margin:0;font-size:14px;line-height:1.6;color:rgba(243,245,248,0.72)"><?php echo esc_html( get_theme_mod( 'lsc_footer_about', 'Logistics Studying Club tự hào là CLB tiên phong của trường Đại học Ngoại thương Cơ sở II trong lĩnh vực Logistics và Quản lý chuỗi cung ứng.' ) ); ?></p>
				<div id="footer-social-row" style="display:flex;gap:16px">
					<a href="<?php echo esc_url( get_theme_mod( 'lsc_facebook_url', 'https://www.facebook.com/lscftuhcmc' ) ); ?>" style="font-size:13px;font-weight:600;color:#FFFFFF" target="_blank" rel="noopener noreferrer">Facebook</a>
					<a href="<?php echo esc_url( get_theme_mod( 'lsc_linkedin_url', 'https://www.linkedin.com/company/lsc-ftu-2' ) ); ?>" style="font-size:13px;font-weight:600;color:#FFFFFF" target="_blank" rel="noopener noreferrer">LinkedIn</a>
					<a href="mailto:<?php echo esc_attr( get_theme_mod( 'lsc_contact_email', 'ict.lsc.ftu2@gmail.com' ) ); ?>" style="font-size:13px;font-weight:600;color:#FFFFFF">Email</a>
				</div>
			</div>
			<div id="footer-nav-col" style="display:flex;flex-direction:column;gap:10px">
				<span style="font-size:11px;font-weight:800;letter-spacing:0.12em;text-transform:uppercase;color:rgba(243,245,248,0.55)">Khám phá LSC</span>
				<a href="#su-menh" style="font-size:14px;color:rgba(243,245,248,0.85)">Về chúng tôi</a>
				<a href="#hinh-anh" style="font-size:14px;color:rgba(243,245,248,0.85)">Hình ảnh</a>
				<a href="#scmission" style="font-size:14px;color:rgba(243,245,248,0.85)">SCMission</a>
				<a href="#du-an" style="font-size:14px;color:rgba(243,245,248,0.85)">Hoạt động</a>
			</div>
			<div id="footer-contact-col" style="display:flex;flex-direction:column;gap:10px">
				<span style="font-size:11px;font-weight:800;letter-spacing:0.12em;text-transform:uppercase;color:rgba(243,245,248,0.55)">Trụ sở &amp; liên hệ</span>
				<span style="font-size:14px;line-height:1.6;color:rgba(243,245,248,0.85)"><?php echo esc_html( get_theme_mod( 'lsc_contact_address', 'Số 15, đường D5, Phường Thạnh Mỹ Tây, TP. Hồ Chí Minh' ) ); ?></span>
				<?php $lsc_email = get_theme_mod( 'lsc_contact_email', 'ict.lsc.ftu2@gmail.com' ); ?>
				<a href="mailto:<?php echo esc_attr( $lsc_email ); ?>" style="font-size:14px;color:#FF6A6A"><?php echo esc_html( $lsc_email ); ?></a>
			</div>
		</div>
		<div id="footer-copyright" style="padding:16px 36px;font-size:12px;color:rgba(243,245,248,0.55)">&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> - Đại học Ngoại thương Cơ sở II.</div>
	</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
