<!DOCTYPE html>
<html>
<head>
	<title>Website</title>
</head>
<body>

	<form action="{{url('insert')}}" method="post">
		
		 {{ csrf_field() }}

		<label>Name</label>
		<input type="text" name="name">

		<label>Email</label>
		<input type="text" name="email">

		<input type="submit" value="submit">

	</form>

</body>
</html>