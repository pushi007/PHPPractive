<!DOCTYPE html>
<html>
<head>
<title>Register Employees</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" media="all" />
</head>
<body>
<div id="container">
<header>
<h1><a href="register.php">Register Employees</a></h1>
</header>

<ul id="main_menu">
<li><a href="index.php" title="Search Employees">Search Employees</a></li>
</ul>

<form method="post" action="registerEmp.php">
<fieldset>
<legend>Register</legend>
<p><label> Emp ID: </label><input type="text" name="empid" /></p>
<p><label> Emp Name: </label><input type="text" name="empname" /></p>

<p class="center"><input value="Register" type="submit" class="center" /></p>
</fieldset>
</form>

<footer>
<p>Copyright &copy; 2017 Pushpendra</p>
<p><a href="mailto:pushpendrapal2206@gmail.com">Contact</a></p>
</footer>

</div>
</body>
</html>