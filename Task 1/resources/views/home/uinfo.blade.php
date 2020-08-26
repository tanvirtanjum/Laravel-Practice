<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
</head>
<body>

	<h1>Detail user page</h1>

	<form method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{$user['name']}}"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{$user['password']}}"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="{{$user['email']}}"></td>
			</tr>
		</table>
	</form>
</body>
</html>
