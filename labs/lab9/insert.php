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

    $tbl1 = $dbh->prepare("INSERT IGNORE into `courses` (
   	CRN, prefix, nbr, title, section, year) VALUES 
('35032', 'MATH', '2400', 'Intro to Diff Eq', '9', '2015'),
('35090', 'PSYC', '1200', 'Gen Psych', '1', '2014'),
('35285', 'MGMT', '4140', 'Computer Info Systens', '1', '2013'),
('35436', 'MGMT', '1100', 'Intro to Mgmt', '4', '2014'),
('35524', 'MGMT', '4100', 'Quantitative Methods for Business', '1', '2015'),
('37350', 'ITWS', '1220', 'IT and Society', '1', '2016'),
('38123', 'BMED', '4200', 'Modeling of Biomedical Systems', '1', '2016'),
('38740', 'ITWS', '4600', 'Data Analytics', '1', '2015'),
('38990', 'MGMT', '4130', 'Enterprise IT Integration', '1', '2015'),
('39152', 'BMED', '2540', 'Biomechanics', '2', '2012')");
    $tbl1->execute();

    $tbl2 = $dbh->prepare("INSERT IGNORE into `students` (
   	RIN, RCSID, FirstName, LastName, Alias, Phone, Street, City, State, Zip) VALUES
('660129856', 'rainea', 'Audrey', 'Raines', 'n/a', '5182762000', '1446 State Cir', 'Mansfield', 'PA', '18521'),
('661297534', 'bauerj2', 'Jack', 'Bauer', 'n/a', '5182762000', '458 Albany Ln', 'Rensselaer', 'NY', '45857'),
('663435879', 'greenm', 'Maggie', 'Greene', 'n/a', '5182762000', '7189 Harmony Ave', 'Albany', 'PA', '18231'),
('663451243', 'chambt', 'Tara', 'Chambler', 'n/a', '5182762000', '3906 Harmony Ave', 'Harrisburg', 'VT', '43926'),
('663847201', 'tayloa', 'Allison', 'Taylor', 'n/a', '5182762000', '1418 Little St', 'Jersey City', 'NY', '35377'),
('663487224', 'rheeg5', 'Glen', 'Rhee', 'n/a', '5182762000', '7104 Rensselaer Dr', 'Philadelphia', 'NY', '12013'),
('664985867', 'coopes', 'Sheldon', 'Cooper', 'n/a', '5182762000', '8818 Harmony Cir', 'Trenton', 'NJ', '15635'),
('665472837', 'myersn2', 'Nina', 'Myers', 'n/a', '5182762000', '3196 College Cir', 'Harrisburg', 'NY', '19695'),
('667548394', 'walshs3', 'Shane', 'Walsh', 'n/a', '5182762000', '8184 Back St', 'Troy', 'NY', '13905'),
('668372983', 'loganc', 'Charles', 'Logan', 'n/a', '5182762000', '5984 Harmony Ave', 'Philadelphia', 'NY', '41574')");
    $tbl2->execute();

	$tbl3 = $dbh->prepare("INSERT IGNORE into `grades` (
	 ID, CRN, RIN, Grade) VALUES
('', '35032', '660129856', '86'),
('', '35524', '663847201', '67'),
('', '38123', '667548394', '100'),
('', '35090', '665472837', '72'),
('', '35436', '663451243', '67'),
('', '38123', '665472837', '93'),
('', '35285', '663435879', '100'),
('', '38123', '663487201', '83'),
('', '38740', '664985867', '91'),
('', '35524', '668372983', '100'),
('', '38123', '665472837', '84'),
('', '35285', '663435879', '94'),
('', '35285', '664985867', '46'),
('', '35436', '663847234', '90'),
('', '38740', '665472837', '80'),
('', '38990', '664985867', '70'),
('', '35436', '660129856', '78'),
('', '38990', '667548394', '89'),
('', '35285', '664985867', '87'),
('', '37350', '664985867', '74'),
('', '35524', '668372983', '51'),
('', '37350', '663487224', '88'),
('', '39152', '661297534', '67'),
('', '35090', '663451243', '95'),
('', '35032', '663847201', '73')");
     $tbl3->execute();

   } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }

echo '10 courses, 10 students, and 25 grades have been inserted into their respective tables.'

?>
