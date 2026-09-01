<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
	<footer style="background:#1C4587;color:#FFFFFF">
		<div style="padding:44px 36px;display:grid;grid-template-columns:1.4fr 0.8fr 1fr;gap:44px">
			<div style="display:flex;flex-direction:column;gap:14px">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo-ngang-trang-trim.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" style="width:210px;display:block">
				<span style="font-size:12px;font-weight:800;letter-spacing:0.1em;text-transform:uppercase;color:rgba(243,245,248,0.55)">Phân hiệu Trường Đại học Ngoại thương tại TP. Hồ Chí Minh</span>
				<p style="margin:0;font-size:14px;line-height:1.6;color:rgba(243,245,248,0.72)">Logistics Studying Club tự hào là CLB tiên phong của trường Đại học Ngoại thương Cơ sở II trong lĩnh vực Logistics và Quản lý chuỗi cung ứng.</p>
				<div style="display:flex;gap:16px">
					<a href="https://www.facebook.com/lscftuhcmc" style="font-size:13px;font-weight:600;color:#FFFFFF" target="_blank" rel="noopener noreferrer">Facebook</a>
					<a href="https://www.linkedin.com/company/lsc-ftu-2" style="font-size:13px;font-weight:600;color:#FFFFFF" target="_blank" rel="noopener noreferrer">LinkedIn</a>
					<a href="mailto:ict.lsc.ftu2@gmail.com" style="font-size:13px;font-weight:600;color:#FFFFFF">Email</a>
				</div>
			</div>
			<div style="display:flex;flex-direction:column;gap:10px">
				<span style="font-size:11px;font-weight:800;letter-spacing:0.12em;text-transform:uppercase;color:rgba(243,245,248,0.55)">Khám phá LSC</span>
				<a href="#su-menh" style="font-size:14px;color:rgba(243,245,248,0.85)">Về chúng tôi</a>
				<a href="#hinh-anh" style="font-size:14px;color:rgba(243,245,248,0.85)">Hình ảnh</a>
				<a href="#scmission" style="font-size:14px;color:rgba(243,245,248,0.85)">SCMission</a>
				<a href="#du-an" style="font-size:14px;color:rgba(243,245,248,0.85)">Hoạt động</a>
			</div>
			<div style="display:flex;flex-direction:column;gap:10px">
				<span style="font-size:11px;font-weight:800;letter-spacing:0.12em;text-transform:uppercase;color:rgba(243,245,248,0.55)">Trụ sở &amp; liên hệ</span>
				<span style="font-size:14px;line-height:1.6;color:rgba(243,245,248,0.85)">Số 15, đường D5, Phường Thạnh Mỹ Tây, TP. Hồ Chí Minh</span>
				<a href="mailto:ict.lsc.ftu2@gmail.com" style="font-size:14px;color:#FF6A6A">ict.lsc.ftu2@gmail.com</a>
			</div>
		</div>
		<div style="padding:16px 36px;font-size:12px;color:rgba(243,245,248,0.55)">&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> - Đại học Ngoại thương Cơ sở II.</div>
	</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
