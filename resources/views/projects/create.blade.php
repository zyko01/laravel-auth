<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Create a Project</title>
</head>
<body>
	<form action="/projects" method="POST">
		@csrf
		<input type="text" placeholder="Project title" name="title">

		<textarea name="description" id="" cols="30" rows="10"></textarea>

		<button type="submit"></button>
	</form>
</body>
</html>