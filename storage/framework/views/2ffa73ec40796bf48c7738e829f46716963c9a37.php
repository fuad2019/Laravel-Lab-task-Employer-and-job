<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Job Details</h1>
	<a href="<?php echo e(route('job.index')); ?>">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			<td><?php echo e($job['jobId']); ?></td>
		</tr>
		<tr>
			<td>Company NAME</td>
			<td><?php echo e($job['companyname']); ?></td>
		</tr>


        <tr>
			<td>Job Title</td>
			<td><?php echo e($job['jobtitle']); ?></td>
		</tr>

       <tr>
			<td>Job Location</td>
			<td><?php echo e($job['jobloc']); ?></td>
		</tr>
         <tr>
			<td>Salary</td>
			<td><?php echo e($job['salary']); ?></td>
		</tr>




		

	</table>
</body>
</html>