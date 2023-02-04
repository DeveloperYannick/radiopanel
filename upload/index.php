<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dosya Yükle</title>
	<link rel="stylesheet" href="<?php echo $site_url ?>style.css" type="text/css" media="screen" />
</head>
<body>

	<div id="content">
		<form action="/upload/upload.php" method="post" enctype="multipart/form-data" class="upload-form">
			<input type="file" name="dosya" class="upload">
			<input type="submit" value="yükle" >
		</form>
	</div>

</form>
</body>
</html>