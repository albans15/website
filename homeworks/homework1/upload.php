<?php
if (isset($_POST['upload']) && $_POST['upload'] == 'Upload') {
  // Get the temporary filename and path
$tmp = $_FILES['file_up']['tmp_name'];
$filename = basename($_FILES['file_up']['name']);

if ($img = getimagesize($tmp)) {
	if (!move_uploaded_file($tmp, $filename)) {
		throw Exception('Unable to save file.');
	} else {
		echo "File Saved.";
	}
  }
}

//if (isset($filename) && file_exists($filename)) {
//	header('Content-type:' . $img['mime']);
//	readfile($filename);
//	exit();
 // printf("<pre>");
 // print_r($_FILES);
 // printf("</pre>");
//} 

else {
?>
<!doctype html>
<html>
<head>
  <title>Lecture #19 Example - Uploads</title>
</head>
<body>
<form enctype="multipart/form-data" action="upload.php" method="post">
<input name="file_up" type="file"/>
<input name="upload" type="submit" value="Upload"/>
</form>

</body>
</html>
<?php } ?>
