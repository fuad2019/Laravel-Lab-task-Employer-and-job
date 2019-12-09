<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Employer Details</h1>
	<a href="<?php echo e(route('employer.index')); ?>">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			<td><?php echo e($std['userId']); ?></td>
		</tr>
		<tr>
			<td>Employer Name</td>
			<td><?php echo e($std['employername']); ?></td>
		</tr>


       <tr>
			<td>Company Name</td>
			<td><?php echo e($std['companyname']); ?></td>
		</tr>


		  <tr>
			<td>Contact</td>
			<td><?php echo e($std['contact']); ?></td>
		</tr>

       <tr>
			<td>User Name</td>
			<td><?php echo e($std['username']); ?></td>
		</tr>



		

	</table>
</body>
</html>