<?include 'partials/header.php';?>

<?php

$dev = true;
$devUrl = '../w/';
$liveUrl = '../fay.io/w';
$uploadUrl = !empty($dev) ? $devUrl : $liveUrl;

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


$image_name = $name;
$image_type = $type;
$image_size = round($sizeKb);


if(!$errorArray){
	$image_upload_status = '<span class="success">Upload Successful!</span>';

	if (file_exists($uploadUrl . $name)){
		$pieces = explode('.', $name);
		if (file_exists($uploadUrl . $pieces[0] . '(1).' . $pieces[1])){
			$fileCount = count(glob($uploadUrl . $pieces[0] . '([0-9]*).' . $pieces[1]));
			print 'File Count: ' . $fileCount . '<br />';
			$fileNameNew = $pieces[0] . '(' . ($fileCount + 1) . ').' . $pieces[1];
			echo '<strong>' . $name . ' already exists.</strong><br />';
			echo '<strong>Renamed ' . $name . ' to ' . $fileNameNew . '</strong><br />';

			move_uploaded_file($nameTemp, $uploadUrl . $fileNameNew);

			$image_copy = $urlRoot . '/w/' . $fileNameNew;
			$image_location = 'w/' . $fileNameNew;
			$image_url = $uploadUrl . $fileNameNew;
			$image_name_new = $fileNameNew;
		}
		else {
			$fileNameNew = $pieces[0] . '(1).' . $pieces[1];
			echo '<strong>' . $name . ' already exists</strong><br />';
			echo '<strong>Renamed ' . $name . ' to ' . $fileNameNew . '</strong><br />';

			move_uploaded_file($nameTemp, $uploadUrl . $fileNameNew);

			$image_copy = $urlRoot . '/w/' . $fileNameNew;
			$image_location = 'w/' . $fileNameNew;
			$image_url = $uploadUrl . $fileNameNew;
			$image_name_new = $fileNameNew;
		}
	}
	else {
		move_uploaded_file($nameTemp, $uploadUrl . $name);

		$image_copy = $urlRoot . '/w/' . $name;
		$image_location = 'w/' . $name;
		$image_url = $uploadUrl . $name;
		$image_name_new = $_FILES['file-name']['name'];
	}
}
else{

	$image_upload_status = '<span class="fail">Nope, that file is invalid!</span>';

	foreach($errorArray as $fail){
		echo $fail . '<br>';
	}

}

?>



<div class="container content">
	<div class="body">
		<div class="row center-head">
			<div class="twelvecol">
				<h1><a href="http://img.fay.io/">Woop!<span class="hidden-desktop">s</span></a></h1>
			</div>
		</div>
		<div class="row upload-details">
			<div class="twelvecol">

				<h2><?=$image_upload_status?></h2>
				<ul>
					<li>
						<span>Upload:</span> <?=$image_name?>
					</li>
					<li>
						<span>Type:</span> <?=$image_type?>
					</li>
					<li>
						<span>Size:</span> <?=$image_size?>kb
					</li>
					<li>
						<span>Location:</span> <?=$image_location?>
					</li>
					<li>
						<span style="display:block;background-color:#eee;padding:1em;"><?=$image_copy?></span>
					</li>
					<li>
						<img src="<?=$image_url?>" alt="<?=$image_name_new?>" />
					</li>
				</ul>

			</div>
		</div>
		<div class="row">
			<div class="twelvecol">
				<a href="<?=$url?>">Back</a>
			</div>
		</div>
	</div>
</div>

<?include 'partials/footer.php';?>
<?include 'partials/postfooter.php';?>