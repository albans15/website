<?php
   $host        = "host=127.0.0.1";
   $port        = "port=5432";
   $dbname      = "dbname=albans2websyslab10";
   $credentials = "user=root password=root";
// connect to database created through terminal
   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database.\n";
   } else {
      echo "Opened database successfully.\n";
   }

    $sql1 =<<<EOF
      CREATE TABLE IF NOT EXISTS courses
      (CRN INT PRIMARY KEY  NOT NULL,
      prefix         VARCHAR(4)  NOT NULL,
      nbr            SMALLINT    NOT NULL,
      title          VARCHAR(255)NOT NULL,
      section        INT         NOT NULL,
      year           INT         NOT NULL);
EOF;

    $sql2 =<<<EOF
      CREATE TABLE IF NOT EXISTS students
      (RIN INT PRIMARY KEY  NOT NULL,
      RCSID          CHAR(7)       NOT NULL,
      FirstName      VARCHAR(100)    NOT NULL,
      LastName       VARCHAR(100)    NOT NULL,
      Alias          VARCHAR(100)    NOT NULL,
      Phone          BIGINT     NOT NULL,
      Street         VARCHAR(100)    NOT NULL,
      City           VARCHAR(100)    NOT NULL,
      State          VARCHAR(2)    NOT NULL,
      Zip            INT        NOT NULL);
EOF;

    $sql3 =<<<EOF
      CREATE TABLE IF NOT EXISTS grades
      (ID SERIAL,
      CRN            INT        NOT NULL,
      RIN            INT        NOT NULL,
      grade          INT        NOT NULL);
EOF;

   $ret = pg_query($db, $sql1);
   if(!$ret){
      echo pg_last_error($db);
   } else {
      echo "Table 'courses' created successfully.\n";
   }

   $ret = pg_query($db, $sql2);
   if(!$ret){
      echo pg_last_error($db);
   } else {
      echo "Table 'students' created successfully.\n";
   }

   $ret = pg_query($db, $sql3);
   if(!$ret){
      echo pg_last_error($db);
   } else {
      echo "Table 'grades' created successfully.\n";
   }
   pg_close($db);

?>