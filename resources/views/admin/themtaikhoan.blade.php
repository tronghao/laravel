@extends('admin\top-admin')
@section('title', 'Thêm Tài Khoản')
@section('noidung')
	<div class="form container col-sm-4">
		<h2>Thêm Tài Khoản</h2>
		@if(isset($info))
			@if($info == "Tài khoản bị trùng")
				<div class="alert alert-danger"> {{ $info }} </div>
			@else
				<div class="alert alert-success"> {{ $info }} </div>
			@endif
		@endif
		<form  action="{{ asset('admin/them-tai-khoan')}}" method="post">
			{{ csrf_field() }}
			<table class="container">
				<tr>
					<td class="title-form">Usename: </td>
					<td ><input class="form-control" type="text" name="tenDangNhap" size="5" required autofocus> </td>
				</tr>
				<tr>
					<td  class="title-form">Password: </td>
					<td><input class="form-control" type="text" name="pass" size="5" required></td>
				</tr>
				<tr>
					<td class="title-form">Email: </td>
					<td ><input class="form-control" type="email" name="email" size="5" required> </td>
				</tr>
				<tr>
					<td  class="title-form">Họ Tên: </td>
					<td><input class="form-control" type="text" name="hoten" size="5" required></td>
				</tr>
				<tr>
					<td colspan="2"><br /><input class="btn btn-info" type="submit" name="them" value="Thêm Tài Khoản"></td>
				</tr>
			</table>
		</form>	 <br />
	</div>
@stop
