<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<link rel="stylesheet" href="css/styles.css" type="text/css" media="all" />
<script type="text/javascript" src="js/mootools-core-1.4.2-full-compat.js"></script>
<script type="text/javascript" src="js/filepath.js"></script>

<title>Woop! Image Uploader</title>

</head>

<body>

<div id="upload">
	<form action="uploadfile.php" method="post" enctype="multipart/form-data">
	<div id="browse-container">
		<div id="wrapper">
			<span id="browse"></span>
			<span id="file-name">No File Selected</span>
			<input type="file" name="file-name" id="file-input" />
		</div>
	</div>
	<div>
		<input id="textarea" type="text" name="pass" value="Password" onFocus="javascript:this.value='',this.type='password'" />
		<input id="button" type="submit" name="submit" value="Woop!" />
	</div>
	</form>
</div>

</body>
</html>