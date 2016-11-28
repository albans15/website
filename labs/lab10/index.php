<!DOCTYPE> 
<html>
<head>
	<title>Lab 10: PHP and Postgres</title>

<style type="text/css">
body {
	font-family: Sans-Serif, Arial, Times;
	max-width: 30em;
	margin: 3em 3em 3em 3em;
}
input {
	background-color: #9CD563;
}
form {
	text-align: right;
	margin: 1em 1em 1em 1em;
}
</style>

<body>
<?php
// choice 1
echo 'Option 1: Install';
?>
<hr/>
<form action="install.php" method="post">
Create database and tables: <input type="submit" value="Go"><br>
</form>

<br>
<br>

<?php
// choice 2
echo 'Option 2: Migrate';
?>
<hr/>
<form action="migrate.php" method="post">
Merge lab 9 MySQL database with this database: <input type="submit" value="Go"><br>
</form>

<br>
<br>

<?php
// choice 3
echo 'Option 3: Select';

?>
<hr/>
<form action="select.php" method="post">
View all students with A(90+) in at least one class: <input type="submit" value="Go"><br>
</form>
</body>
</html>