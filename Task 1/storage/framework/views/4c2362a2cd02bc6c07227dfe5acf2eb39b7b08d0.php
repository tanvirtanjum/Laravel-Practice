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
				<td><input type="text" name="name" value="<?php echo e($user['name']); ?>"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?php echo e($user['password']); ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo e($user['email']); ?>"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ATP3\Laravel Labwork\Task 1\resources\views/home/uinfo.blade.php ENDPATH**/ ?>