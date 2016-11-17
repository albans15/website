<?php

$host="localhost"; 

$root="root"; 
$root_password=""; 

$user='newuser';
$pass='newpass';
$db='albans2-websyslab9'; 

try {
  // establish connection to database
   $dbh = new PDO('mysql:host=localhost;dbname=albans2-websyslab9', $user, $pass);
   $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   //display grade distribution
$grades = $dbh->query('SELECT `Grade` FROM grades
	WHERE `Grade` BETWEEN 90 and 100
	GROUP BY grade ORDER BY grade DESC');

echo 'Grades 90-100: ';
foreach ($grades as $row) {
	// output data
	echo '<pre>';
	printf("%s", $row['Grade']);
	echo '<pre>';
}

$grades = $dbh->query('SELECT `Grade` FROM grades
	WHERE `Grade` BETWEEN 80 and 89
	GROUP BY grade ORDER BY grade DESC');
echo 'Grades 80-89: ';
foreach ($grades as $row) {
	// output data
	echo '<pre>';
	printf("%s", $row['Grade']);
	echo '<pre>';
}

$grades = $dbh->query('SELECT `Grade` FROM grades
	WHERE `Grade` BETWEEN 70 and 79
	GROUP BY grade ORDER BY grade DESC');
echo 'Grades 70-79: ';
foreach ($grades as $row) {
	// output data
	echo '<pre>';
	printf("%s", $row['Grade']);
	echo '<pre>';
}

$grades = $dbh->query('SELECT `Grade` FROM grades
	WHERE `Grade` BETWEEN 65 and 69
	GROUP BY grade ORDER BY grade DESC');
echo 'Grades 65-69: ';
foreach ($grades as $row) {
	// output data
	echo '<pre>';
	printf("%s", $row['Grade']);
	echo '<pre>';
}

$grades = $dbh->query('SELECT `Grade` FROM grades
	WHERE `Grade` BETWEEN 0 and 64
	GROUP BY grade ORDER BY grade DESC');
echo 'Grades < 65: ';
foreach ($grades as $row) {
	// output data
	echo '<pre>';
	printf("%s", $row['Grade']);
	echo '<pre>';
}

   } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }
?>