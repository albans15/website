<?php
$host="localhost"; 

$root="root"; 
$root_password=""; 

$user='newuser';
$pass='newpass';
$db='albans2-websyslab9'; 

try {
  // establish connection to mysql database
   $dbh = new PDO('mysql:host=localhost;dbname=albans2-websyslab9', $user, $pass);
   $dbh ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // get all data from all tables
try {
   $results1 = $dbh->query('SELECT * FROM courses');
   $results2 = $dbh->query('SELECT * FROM students');
   $results3 = $dbh->query('SELECT * FROM grades');

// establish conntect to postgresql database
   $host        = "host=127.0.0.1";
   $port        = "port=5432";
   $dbname      = "dbname=albans2websyslab10";
   $credentials = "user=root password=root";
// connect to postgresql database created through terminal
   $db = pg_connect( "$host $port $dbname $credentials"  );
//   if(!$db){
//      echo "Error : Unable to open database.\n";
//   } else {
//      echo "Opened database successfully.\n";
//   }

   // insert data from mysql table 'courses' to postgresql table 'courses'
   foreach ($results1 as $results) {
   	 $sql = "INSERT INTO courses VALUES ('$results[CRN]', 
   	 	'$results[prefix]', '$results[nbr]', '$results[title]', 
   	 	'$results[section]', '$results[year]') ON CONFLICT (CRN) DO NOTHING;";
	 $query = "SELECT * from courses";
   	 $result=pg_query($query);
	}
		   // display merged courses table
		$i = 0;
		echo '<html><body><table><tr>';
		while ($i < pg_num_fields($result))
		{
			$fieldName = pg_field_name($result, $i);
			echo '<td>' . $fieldName . '</td>';
			$i = $i + 1;
		}
		echo '</tr>';
		$i = 0;
		while ($row = pg_fetch_row($result)) 
		{
			echo '<tr>';
			$count = count($row);
			$y = 0;
			while ($y < $count)
			{
				$c_row = current($row);
				echo '<td>' . $c_row . '</td>';
				next($row);
				$y = $y + 1;
			}
			echo '</tr>';
			$i = $i + 1;
		}
		pg_free_result($result);

		echo '</table></body></html>';


// insert data from mysql table 'students' to postgresql table 'students'
   foreach ($results2 as $results) {
   	 $sql = "INSERT INTO students VALUES ('$results[RIN]', 
   	 	'$results[RCSID]', '$results[FirstName]', '$results[LastName]', 
   	 	'$results[Alias]', '$results[Phone]', '$results[Street]', '$results[City]',
   	 	'$results[State]', '$results[Zip]') ON CONFLICT (RIN) DO NOTHING;";
	 $query = "SELECT * from students";
   	 $result=pg_query($query);
	}
	   // display merged students table
		$i = 0;
		echo '<html><body><table><tr>';
		while ($i < pg_num_fields($result))
		{
			$fieldName = pg_field_name($result, $i);
			echo '<td>' . $fieldName . '</td>';
			$i = $i + 1;
		}
		echo '</tr>';
		$i = 0;
		while ($row = pg_fetch_row($result)) 
		{
			echo '<tr>';
			$count = count($row);
			$y = 0;
			while ($y < $count)
			{
				$c_row = current($row);
				echo '<td>' . $c_row . '</td>';
				next($row);
				$y = $y + 1;
			}
			echo '</tr>';
			$i = $i + 1;
		}
		pg_free_result($result);
		echo '</table></body></html>';

// insert data from mysql table 'grades' to postgresql table 'grades'
   foreach ($results3 as $results) {
   	 $sql = "INSERT INTO grades VALUES ('$results[ID]', 
   	 	'$results[CRN]', '$results[RIN]', '$results[Grade]') ON CONFLICT (ID) DO NOTHING;";
	 $query = "SELECT * from grades";
   	 $result=pg_query($query);
	}
	   // display merged grades table
		$i = 0;
		echo '<html><body><table><tr>';
		while ($i < pg_num_fields($result))
		{
			$fieldName = pg_field_name($result, $i);
			echo '<td>' . $fieldName . '</td>';
			$i = $i + 1;
		}
		echo '</tr>';
		$i = 0;
		while ($row = pg_fetch_row($result)) 
		{
			echo '<tr>';
			$count = count($row);
			$y = 0;
			while ($y < $count)
			{
				$c_row = current($row);
				echo '<td>' . $c_row . '</td>';
				next($row);
				$y = $y + 1;
			}
			echo '</tr>';
			$i = $i + 1;
		}
		pg_free_result($result);

		echo '</table></body></html>';



   } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }
   } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }

   //if(!$sql){
   //   echo "Error : Unable to merge databases.\n";
   //} else {
   //   echo "Databases merged successfully.\n";
   //}
   // clost database connection
   pg_close($db);


?>