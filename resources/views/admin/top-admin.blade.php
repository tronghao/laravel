<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> @yield('title') </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="{{ asset('resources/views/admin/style_admin.css') }}">
</head>
<body>
	<div class="container">
	  <ul class="nav">
		    <li class="nav-item">
		      <a class="nav-link title-page" href="{{ asset('admin/home') }}">Trang ADMIN</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="{{ asset('admin/them-tai-khoan') }}">Thêm Tài Khoản</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="{{ asset('dang-xuat')}} ">Đăng Xuất</a>
		    </li>
	  </ul>
	</div>

		@yield('noidung')

</body>
</html>