<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hướng Dẫn Sử Dụng</title>
	<link rel="icon" href="{{ asset('uploads/46494632_325816944906945_3298964650640539648_n.png') }}">
	<style type="text/css">
		a {
			color: red;
			text-decoration: none;
		}
		body{
			background: #3300ff1f;
		}
	</style>
</head>
<body>
	<h1>Mặc Định</h1>
	<ul>
		<li>I.Địa chỉ các trang:
			<ol>
				<li><a href="{{ route('getHome') }}">Trang chủ</a></li>
				<li><a href="{{ route('getEmployeeHome') }}">Trang quản trị của nhân viên</a></li>
				<li><a href="{{ route('getAdminHome') }}">Trang quản trị của admin</a></li>
				<li>Note: Lần đầu vào nếu chưa đăng nhập sẽ chuyển đến trang đăng nhập. Tài khoản xem mục II</li>
			</ol>
		</li>
		<li>II.Tài khoản
			<ol>
				<li>Tài khoản nhân viên:
					<ul>username: giang</ul>
					<ul>password: 1</ul>
				</li>
				<li>Tài khoản admin:
					<ul>username: admin</ul>
					<ul>password: admin</ul>
				</li>
				<li>Nếu tài khoản bị đổi, xin liên hệ: facebook.com/giang997</li>
			</ol>
		</li>
	</ul>
</body>
</html>