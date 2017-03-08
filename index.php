<!DOCTYPE html>
<html>
<head>
<title>Search Employees</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" media="all" />
</head>
<body>
<div id="container">
<header>
<h1><a href="register.php">Search Employees</a></h1>
</header>

<ul id="main_menu">
<li><a href="register.php" title="Register new user">Register Employee</a></li>
<li><a href="search.php" title="Users list">Search Register Employee</a></li>

</ul>

<form method="post" action="searchResults.php">
<fieldset>
<legend>Search</legend>
<p><label> Emp ID: </label><input type="text" name="empid" /></p>

<p class="center"><input value="Search" type="submit" class="center" /></p>
</fieldset>
</form>

<footer>
<p>Copyright &copy; 2017 Pushpendra</p>
<p><a href="mailto:pushpendrapal2206@gmail.com">Contact</a></p>
</footer>

</div>
</body>
</html>