<?php
include "../../assets/content/theme/hk_head_2.php";
include "../../assets/content/theme/hk_menu.php";

$query = $link->query('SELECT rank FROM users WHERE username = "' .$username. '"');
while($row = mysqli_fetch_array($query))
{
  $rangouser = $row['rank'];
}
if("$rangouser" == "1"){
header("Location: " . $_SERVER['HTTP_REFERER']);
  exit;
}
if("$rangouser" == "2"){
header("Location: " . $_SERVER['HTTP_REFERER']);
  exit;
}
if("$rangouser" == "3"){
header("Location: " . $_SERVER['HTTP_REFERER']);
  exit;
}
if("$rangouser" == "4"){
header("Location: " . $_SERVER['HTTP_REFERER']);
  exit;
}
if("$rangouser" == "5"){
header("Location: " . $_SERVER['HTTP_REFERER']);
  exit;
}

?>
<title><?php echo "$title";?> - <?php echo $lang[90]; ?></title>
<main class="container">
    <div class="content">
        
        <div class="row">
            <div class="col-lg-12 col-md-12">
                
            </div>
        
            <div class="col-lg-8 col-md-12 content-left">
<div class="content-box">
	<div class="content-header">
        <h1><?php echo $lang[90]; ?></h1>
    </div>
	<form class="form-no-captions" action="" method="post" enctype="multipart/form-data">
    <div class="content-body" style="padding: 5px;">
        <textarea name="article" cols="10" rows="10" id='edit'><?php echo $columnas['article']; ?></textarea>
    </div>
</div>
            </div>
			<div class="col-lg-4 col-md-12 content-right">
                <div class="content-box">
    <div class="content-body">
   <input class="form-control" type="text" name="title" placeholder="<?php echo $lang[88]; ?>"/><br>
   <select class="form-control"  name="category">
       <option value="fansite"><?php echo "$title";?></option>
	   <option value="hotel"><?php echo $lang[6]; ?></option>
       <option value="maze"><?php echo $lang[7]; ?></option>
   </select><br>
   <input class="form-control" type="text" name="featured_image" placeholder="<?php echo $lang[89]; ?>"/><br>
   <input class="form-control" type="submit"  name="guardar" class="form-control" value="<?php echo $lang[71]; ?>" /><br>
</form>
    </div>
</div>
            </div>
        </div>
    </div>
</main>
					  
<?php
if ($_POST['guardar'] && $_POST['title']) {
$enviar = "INSERT INTO news (author,title,category,date,featured_image,article,look) values ('".$username."','".strip_tags($_POST['title'])."','".strip_tags($_POST['category'])."','".$_POST['date']."','".$_POST['featured_image']."','".$_POST['article']."','".$look."')";

if (@$link->query($enviar)) { 
  
$date_log = date("Y-m-d");
$action = "$lang[119]";
$enviar_log = "INSERT INTO logs (username,action,date) values ('".$username."','".$action."','".$date_log."')";
$link->query($enviar_log);

?>
<script type="text/javascript">
  location.href ="<?php echo $_SERVER['HTTP_REFERER']; ?>";
</script>
<?php
}
}
?>

<?php include "../../assets/content/theme/hk_footer_2.php"; ?>
