<?php
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


// create tables in database
try {
  // establish connection to database
   $dbh = new PDO('mysql:host=localhost;dbname=albans2-websyslab9', $user, $pass);

  // create table 'courses'
   $sql = $dbh->exec("CREATE TABLE IF NOT EXISTS `courses` (
    CRN int(11) not null, prefix varchar(4) not null, 
    nbr smallint(4) not null, title varchar(255) not null, 
    section int(2) not null, year int(4) not null, 
    PRIMARY KEY (CRN))") or die('Table already created.');

 }
    catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }

try {
  // establish connection to database
   $dbh = new PDO('mysql:host=localhost;dbname=albans2-websyslab9', $user, $pass);

  // create table 'students'
   $sql = $dbh->exec("CREATE TABLE IF NOT EXISTS `students` (
    RIN int(9) not null, RCS ID char(7) not null, First Name varchar(100) not null, 
    Last Name varchar(100) not null, Alias varchar(100) not null, 
    Phone bigint(10) not null, Street varhar(100) not null, 
    City varchar(100) not null, State varchar(2) not null, Zip int(5) not null, 
    PRIMARY KEY (RIN))") or die('Table already created.');

 }
    catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }


try {
  // establish connection to database
   $dbh = new PDO('mysql:host=localhost;dbname=albans2-websyslab9', $user, $pass);


  // create table 'grades'
   $sql = $dbh->exec("CREATE TABLE IF NOT EXISTS `grades` (
    ID int(11) not null AUTO-INCREMENT, CRN int(11) not null, 
    RIN int(11) not null, grade int(3) not null, 
    PRIMARY KEY (ID))") or die('Table already created.');

 }
    catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   } 

?>