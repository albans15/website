<!DOCTYPE> 
<html>
<head>
	<title>Lab 9: PHP and POD</title>

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
echo 'Option 2: Load';
?>
<hr/>
<form action="insert.php" method="post">
Insert records into tables: <input type="submit" value="Go"><br>
</form>

<br>
<br>

<?php
// choice 3
echo 'Option 3: Students';

?>
<hr/>
<form action="output.php" method="post">
View list of students: <input type="submit" value="Go"><br>
</form>



<br>
<br>
<?php
// choice 4
echo 'Option 4: Grade Distribution';
?>
<hr/>
<form action="output2.php" method="post">
View grade ranges: <input type="submit" value="Go"><br>
</form>
</body>
</html>