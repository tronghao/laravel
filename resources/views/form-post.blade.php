<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Post</title>
</head>
<body>
	<form action="post" method="post">
		{{ csrf_field() }}
		<input type="submit" name="sb" value="Gui Post">
	</form>
	{{ isset($i)? "tontai" : "Khong ton tai"}}
	@if(isset($i))
		{{ "ton tai" }}
	@else {{ "Khong ton tai" }}
	@endif

</body>
</html>