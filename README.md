# LSC Theme — Hướng dẫn chỉnh sửa nội dung

Theme tùy biến cho website Logistics Studying Club (FTU CS2), không dùng page builder. Tài liệu này hướng dẫn cách sửa nội dung mà **không cần đụng code**.

## 1. Customizer — Appearance → Customize

Dùng cho các thông tin toàn site (đổi ở đâu cũng thấy ngay, có preview trực tiếp).

### Nhận diện trang (Site Identity)
- **Logo**: đổi ảnh logo header/footer. Nếu không đặt, theme tự dùng logo mặc định có sẵn.

### Thông tin CLB → Liên hệ & Social
- Link Facebook
- Link LinkedIn
- Email liên hệ
- Địa chỉ
- Ghi chú dưới logo (footer) — dòng chữ "Phân hiệu Trường Đại học Ngoại thương..."
- Đoạn giới thiệu ngắn (footer)

### CSS bổ sung (Additional CSS)
Dùng khi cần chèn CSS tùy chỉnh cho các khối nội dung dán vào trang (ví dụ khối 2 cột ở trang Liên hệ). **Không dùng để sửa nội dung** — chỉ chỉnh style.

## 2. ACF (Advanced Custom Fields) — nội dung trang chủ

Cần cài plugin miễn phí **Advanced Custom Fields** (Plugins → Add New → tìm tên, Install → Activate). Sau khi bật, vào **Trang chủ → sửa trang**, cuộn xuống dưới sẽ thấy khối **"Nội dung trang chủ"**:

| Field | Nội dung |
|---|---|
| Tiêu đề Hero | Dòng tiêu đề lớn đầu trang ("CLB Logistics HCMC") |
| Đoạn giới thiệu Hero | Đoạn mô tả dưới tiêu đề |
| Nội dung Sứ mệnh | Đoạn văn ở khối "SHIP YOUR DREAMS" |
| Mô tả SCMission | Đoạn mô tả trong khối SCMission |
| SCMission - 4 số liệu | Mùa tổ chức / Thí sinh / Doanh nghiệp / Trường đại học |
| Mô tả Podcast / Workshop / Training | Đoạn mô tả ngắn của 3 dự án tiêu biểu |

Mỗi ô đều có **chữ mờ (placeholder)** hiển thị đúng nội dung đang chạy trên site — dùng để đối chiếu trước khi sửa. Để trống ô nào thì trang vẫn hiển thị nội dung mặc định, không bị vỡ.

Chưa cài ACF thì trang chủ vẫn chạy bình thường với nội dung mặc định.

## 3. Nội dung nằm trong code (cần sửa file + upload lại theme)

Những phần sau **chưa** đưa vào Customizer/ACF vì là nội dung cấu trúc, ít đổi, hoặc gắn với anchor cố định trên trang:

| Nội dung | File | Ghi chú |
|---|---|---|
| Nhãn menu (Về chúng tôi, Hình ảnh...) | `header.php`, `footer.php` | Gắn với anchor `#su-menh`, `#hinh-anh`... đổi label cần cẩn thận không đổi anchor |
| Ảnh sự kiện (gallery, SCMission, dự án) | `front-page.php` | Trỏ trực tiếp URL ảnh trong Thư viện Media (`wp-content/uploads/...`) |
| Link fanpage/social ở từng nút riêng lẻ | `front-page.php` | Ví dụ nút "Fanpage SCMission" khác với link Facebook CLB ở footer |
| Bố cục, màu sắc, khoảng cách | `style.css`, style inline trong các file `.php` | |

Muốn đưa thêm phần nào ở đây vào Customizer/ACF để tự sửa qua wp-admin — báo lại để bổ sung.

## 4. Cách cập nhật theme lên site

1. Tải file theme (`.zip`) đã cập nhật.
2. wp-admin → **Appearance → Themes → Add New → Upload Theme** → chọn file zip → **Replace current with uploaded**.
3. Nếu chỉ sửa CSS/màu sắc mà không thấy đổi ngay: **hard refresh** trình duyệt (Ctrl+F5 / Ctrl+Shift+R) — trình duyệt có thể đang cache bản CSS cũ.

## 5. Giao diện điện thoại (mobile)

Trên màn hình ≤640px, một số phần được **ẩn bớt** để trang gọn hơn (không xóa dữ liệu, chỉ ẩn qua CSS — vẫn hiện đầy đủ trên desktop):
- 2 nút Fanpage ở đầu trang (hero)
- Khối "Khoảnh khắc của CLB" (gallery ảnh)
- Số liệu trong ô SCMission
- Ô Workshop và Training (giữ lại Podcast)
- Footer chỉ còn logo + 3 link Facebook/LinkedIn/Email

Muốn hiện lại phần nào trên mobile, báo lại — chỉnh trong `style.css`, phần `@media (max-width: 640px)`.
