<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

	<h1>Welcome home!</h1>


	<h2>user list</h2>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Password</td>
			<td>Action</td>
		</tr>

	<?php for($i=0; $i != count($users); $i++): ?>
		<tr>
			<td><?php echo e($users[$i]['id']); ?></td>
			<td><?php echo e($users[$i]['name']); ?></td>
			<td><?php echo e($users[$i]['email']); ?></td>
			<td><?php echo e($users[$i]['password']); ?></td>
			<td>
				<a href="/home/edit/<?php echo e($users[$i]['id']); ?>">Edit</a> |
				<a href="/home/delete/<?php echo e($users[$i]['id']); ?>">Delete</a> |
				<a href="/home/uinfo/<?php echo e($users[$i]['id']); ?>">Details</a> |
			</td>
		</tr>
	<?php endfor; ?>
	</table>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\ATP3\Laravel Labwork\Task 1\resources\views/home/index.blade.php ENDPATH**/ ?>