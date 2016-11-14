<?php 


   require 'config.php';

   try {
//      open connection here
   	$conn = new PDO('mysql:host=localhost;dbname=websys_shop', $config['DB_USERNAME'],
   		$config['DB_PASSWORD']);
   	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   	$id = 2;

	   	$results = $conn->query('SELECT * FROM customers');
	   	foreach ($results as $row) {
	   		echo '<pre>';
	   		print_r($row);
	   		echo '<pre';

	   		printf("Last name = %s", $row['lastname']);
	   	}

	  

   } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }

   if ($conn) {
      echo "Connected!";
   }
 ?>