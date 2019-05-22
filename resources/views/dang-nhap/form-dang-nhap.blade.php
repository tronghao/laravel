<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng Nhập</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="resources/views/dang-nhap/style_dangnhap.css">
</head>
<body class="container-fluid">
	<div class="container background col-xs-10 col-sm-6 col-md-4 col-xs-offset-2 col-sm-offset-3 col-md-offset-4"> <br />
		<div class="title-dn">Đăng Nhập</div> <br />
		<div class="form container">
			<form  action="" method="post">
				{{ csrf_field() }}
				<table class="container">
					<tr>
						<td class="title-form">Usename: </td>
						<td ><input class="form-control" type="text" name="tenDangNhap" size="5" required autofocus> </td>
					</tr>
					<tr>
						<td  class="title-form">Password: </td>
						<td><input class="form-control" type="password" name="pass" size="5" required></td>
					</tr>
					<tr>
						<td colspan="2"><br /><input class="btn btn-info" type="submit" name="dangNhap" value="Đăng Nhập"></td>
					</tr>
				</table>
			</form>	 <br />
			<div> {{ $error or ''}} </div>
		</div>
	</div>	
</body>
</html>
