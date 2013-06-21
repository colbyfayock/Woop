<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<link rel="stylesheet" href="css/styles.css" type="text/css" media="all" />

<title>Woop! Image Results</title>

</head>

<body>
<div id="uploaded">

<?php

$pass = $_POST['pass'];
$error = $_FILES['file-name']['error'];
$errorArray = array();

$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
$urlRoot = trim(htmlspecialchars($_SERVER['HTTP_HOST']), 'www.');

$typeArray = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');

$name = str_replace(' ', '_', $_FILES['file-name']['name']);
$nameTemp = $_FILES['file-name']['tmp_name'];
$type = $_FILES['file-name']['type'];
$size = $_FILES['file-name']['size'];
$sizeKb = $size / 1024;

if($pass != 'asdf'){
	$errorArray['pass'] = 'That is NOT the right password!'; }
if($error > 0){
	$errorArray['error'] = 'Error: <strong>' . $error . '</strong>'; }
if(!in_array($type, $typeArray)){
	$errorArray['type'] = 'File type <strong>' . $type . '</strong> isn\'t supported \'round here'; }
if($sizeKb > 2048){
	$errorArray['size'] = 'You\'re file was <strong>' . round($sizeKb) . ' kb</strong>. That\'s way too big!'; }

if(!$errorArray){
	echo '<span class="success">Upload Successful!</span> <br /><br />';
	echo 'Upload: ' . $name . '<br />';
	echo 'Type: ' . $type . '<br />';
	echo 'Size: ' . $sizeKb . ' Kb<br />';
	
	if (file_exists('../w/' . $name)){
		$pieces = explode('.', $name);
		if (file_exists('../w/' . $pieces[0] . '(1).' . $pieces[1])){
			$fileCount = count(glob('../w/' . $pieces[0] . '([0-9]*).' . $pieces[1]));
			print 'File Count: ' . $fileCount . '<br />';
			$fileNameNew = $pieces[0] . '(' . ($fileCount + 1) . ').' . $pieces[1];
			echo '<strong>' . $name . ' already exists.</strong><br />';
			echo '<strong>Renamed ' . $name . ' to ' . $fileNameNew . '</strong><br />';
			move_uploaded_file($nameTemp, '../w/' . $fileNameNew);
			echo 'Location: w/' . $fileNameNew . '<br /><br />';
			echo '<span style="display:block;background-color:#eee;padding:1em;">' . $urlRoot . '/w/' . $fileNameNew . '</span><br /><br />';
			echo '<img class="uploaded-img" src="../w/' . $fileNameNew . '" alt="' . $fileNameNew . '" />';
		}
		else {
			$fileNameNew = $pieces[0] . '(1).' . $pieces[1];
			echo '<strong>' . $name . ' already exists</strong><br />';
			echo '<strong>Renamed ' . $name . ' to ' . $fileNameNew . '</strong><br />';
			move_uploaded_file($nameTemp, '../w/' . $fileNameNew);
			echo 'Location: w/' . $fileNameNew . '<br /><br />';
			echo '<span style="display:block;background-color:#eee;padding:1em;">' . $urlRoot . '/w/' . $fileNameNew . '</span><br /><br />';
			echo '<img class="uploaded-img" src="../w/' . $fileNameNew . '" alt="' . $fileNameNew . '" />';
		}
	}
	else {
		move_uploaded_file($nameTemp, '../w/' . $name);
		echo 'Location: w/' . $name . '<br /><br />';
		echo '<span style="display:block;background-color:#eee;padding:1em;">' . $urlRoot . '/w/' . $name . '</span><br /><br />';
		echo '<img class="uploaded-img" src="../w/' . $name . '" alt="' . $_FILES['file-name']['name'] . '" />';
	}
}
else{
	echo '<span class="fail">Nope, that file is invalid!</span><br /><br />';

	foreach($errorArray as $fail){
		echo $fail . '<br>';
	}

}

echo '<br /><br /><a href=' . $url . '>Back</a>';

?>
</div>
</body>
</html>