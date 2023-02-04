<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dosya Yükle</title>
	<link rel="stylesheet" href="<?php echo $site_url ?>style.css" type="text/css" media="screen" />
</head>
<body>
	<div id="content">
	<?php

		$file = $_FILES["dosya"]["tmp_name"];
		$file_name = $_FILES["dosya"]["name"];
		$file_type = $_FILES["dosya"]["type"];
		$file_type_2 = explode("/",$file_type);
		$control = substr($file_type, 0,5);

		if ($control=="image") {
		    $file_upload_name = md5(date('d.m.Y H:i:s')).".".$file_type_2[1];
			$upload = move_uploaded_file($file, "uploads"."/".$file_upload_name);
			$file_link = $site_url."upload/uploads/".$file_upload_name;
			echo "<br><center><img src='$file_link'></center>";
		} else {
			echo "<h3>HATA</h3>Yüklediğiniz dosya bir resim formatına sahip değil ya da bir dosya seçmediniz.";
		}
	?>
	</div>
</body>
</html>