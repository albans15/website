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
 
// display list of students, alphabetically by last name, first name
$results = $dbh->query('SELECT FirstName, LastName FROM students
	ORDER BY LastName ASC, FirstName ASC');
foreach ($results as $row) {
	// output data of each row
	echo '<pre>';
	printf("%s", $row['LastName']);
	echo ', ';
	printf("%s", $row['FirstName']);
	echo '<pre>';
}

   } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }
?>