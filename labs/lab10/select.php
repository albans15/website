<?php
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

$result = pg_query($db, "SELECT CRN, nbr FROM courses");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}
echo '<html><body><table><tr>';
while ($row = pg_fetch_row($result)) {
  echo '<td>' . "$row[1], $row[0]" . '</td>';
  echo "<br />\n";
}

echo '</table></body></html>';

echo 'showing data from courses table due to error with migrating students data...see readme.md file';

   ?>