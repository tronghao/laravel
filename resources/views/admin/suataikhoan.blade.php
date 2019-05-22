@extends('admin\top-admin')
@section('title', 'Sửa Tài Khoản')
@section('noidung')
	<div class="form container col-sm-4">
		<h2>Sửa Tài Khoản</h2>
		@if(isset($info))
			@if($info == "Tài khoản bị trùng")
				<div class="alert alert-danger"> {{ $info }} </div>
			@else
				<div class="alert alert-success"> {{ $info }} </div>
			@endif
		@else

		<form  action="{{ asset('admin/edit-tai-khoan/'.$dulieu[0]['id'])}}" method="post">
			{{ csrf_field() }}
			<table class="container">

				@foreach($dulieu as $value)
				<tr>
					<td class="title-form">Usename: </td>
					<td ><input class="form-control" type="text" name="tenDangNhap" size="5" required autofocus value="{{ $value['username'] }}"> </td>
				</tr>
				<tr>
					<td  class="title-form">Password: </td>
					<td><input class="form-control" type="text" name="pass" size="5" required value="{{ $value['password'] }}"></td>
				</tr>
				<tr>
					<td class="title-form">Email: </td>
					<td ><input class="form-control" type="email" name="email" size="5" required value="{{ $value['email'] }}"> </td>
				</tr>
				<tr>
					<td  class="title-form">Họ Tên: </td>
					<td><input class="form-control" type="text" name="hoten" size="5" required value="{{ $value['fullname'] }}"></td>
				</tr>
				<tr>
					<td colspan="2"><br /><input class="btn btn-info" type="submit" name="them" value="Sửa Tài Khoản"></td>
				</tr>
				@endforeach

			</table>
		</form>	 <br />
		@endif
	</div>
@stop
