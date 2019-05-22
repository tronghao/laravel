@extends('admin\top-admin')
@section('title', 'Admin')
@section('noidung')
	<div class ="container nd">
		<table class="table table-striped">
			<tr>
				<th>Usename</th>
				<th>Pasword</th>
				<th>Họ Tên</th>
				<th>Email</th>
				<th></th>
				<th></th>
			</tr>

			@foreach ($allUser as  $value)
			<tr>			
				<td> {{ $value['username'] }} </td>
				<td> {{ $value['password'] }} </td>
				<td> {{ $value['fullname'] }} </td>
				<td> {{ $value['email'] }} </td>
				<td><a href="edit-tai-khoan/{{ $value['id'] }}"><button class="btn btn-info"> Edit </button> </a></td>
				<td><a href="delete-tai-khoan/{{ $value['id'] }}"><button class="btn btn-danger"> Delete</button> </a></td>
			</tr>
			@endforeach

		</table>
	</div>
@stop
