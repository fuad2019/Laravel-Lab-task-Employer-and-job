<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home! {{session('name')}}</h1>

	<a href="{{route('student.add')}}">Add user</a> | 
	<a href="{{route('student.index')}}">UserList</a> | 



     <a href="{{route('employer.add')}}">Add Employer</a> | 
	<a href="{{route('employer.index')}}">EmployerList</a> | 


   <a href="{{route('job.add')}}">Add Job</a> | 
	<a href="{{route('job.index')}}">Job List</a> | 


	<a href="/logout">logout</a>

	

</body>
</html>