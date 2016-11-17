<?php 


   require 'install.php';

// establish connection to database
   try {
      $conn = new PDO('mysql:host=localhost;dbname=albans2-websyslab9', $install['user'], $install['pass']);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
    catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }

   if ($conn) {
      echo "Connected!";
   }

      // create table 'courses'
   $tbl_sql = 'CREATE TABLE IF NOT EXISTS courses (CRN int(11) not null, prefix varchar(4) not null, nbr smallint(4), title varchar(255), section int(2), year int(4), PRIMARY KEY (id))';
   $dbh->exec($tbl_sql);
   echo "Table created.";

   }

 ?>