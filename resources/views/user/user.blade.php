<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thành Công</title>
</head>
<body>
	<div>Xin Chào <b> {{ Session::get('user') }} </b> </div>
	<div><a href="{{ asset('dang-xuat')}}">Đăng Xuất</a></div>
</body>
</html>