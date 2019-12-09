<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home! <?php echo e(session('name')); ?></h1>

	<a href="<?php echo e(route('student.add')); ?>">Add user</a> | 
	<a href="<?php echo e(route('student.index')); ?>">UserList</a> | 



     <a href="<?php echo e(route('employer.add')); ?>">Add Employer</a> | 
	<a href="<?php echo e(route('employer.index')); ?>">EmployerList</a> | 


   <a href="<?php echo e(route('job.add')); ?>">Add Job</a> | 
	<a href="<?php echo e(route('job.index')); ?>">Job List</a> | 


	<a href="/logout">logout</a>

	

</body>
</html>