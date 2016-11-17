<?php
$suppress_localhost = false;
$host="localhost"; 

$root="root"; 
$root_password=""; 

$user='newuser';
$pass='newpass';
$db='albans2-websyslab9'; 
// PDO execute function, create database 'albans2-websyslab9'
    try {
        $dbh = new PDO("mysql:host=$host", $root, $root_password);
// create user and grant user access to the new database
        $dbh->exec("CREATE DATABASE `$db`;
                CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';
                GRANT ALL ON `$db`.* TO '$user'@'localhost';
                FLUSH PRIVILEGES;");
// ensure database does not already exist
   } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }
// confirm database has been created
   if ($dbh) {
      echo "Database created.";
   }

?>