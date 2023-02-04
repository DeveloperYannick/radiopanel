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
if("$rangouser" == "6"){
header("Location: " . $_SERVER['HTTP_REFERER']);
  exit;
}
if("$rangouser" == "7"){
header("Location: " . $_SERVER['HTTP_REFERER']);
  exit;
}

?>
<title><?php echo "$title";?> - <?php echo $lang[84]; ?></title>
<main class="container">
    <div class="content">
        
        <div class="row">
            <div class="col-lg-12 col-md-12">
                
            </div>
        
            <div class="col-lg-8 col-md-12 content-left">
<div class="content-box">
    
	<div class="content-header">
        <h1><?php echo $lang[40]; ?></h1>
    </div>
    <div class="content-body">
        <div class="list-icons small-slider">
<?php
$resultado = $link->query("SELECT * FROM badges ORDER BY id DESC limit 50");
while($row = mysqli_fetch_array($resultado))
{
?>
		     <div style="background-image: url(<?php echo "$row[badge]"; ?>)" class="list-item" data-toggle="tooltip" data-placement="top"title="<b><?php echo "$row[name]"; ?></b><br><?php echo "$row[description]"; ?>"></div>
<?php } ?>
		</div>
    </div>
</div>
            </div>
			<div class="col-lg-4 col-md-12 content-right">
                <div class="content-box">
    <div class="content-header">
        <h1><?php echo $lang[85]; ?></h1>
    </div>
    <div class="content-body">
<form class="form-no-captions" action="" method="post" enctype="multipart/form-data">
   <input class="form-control" type="text" name="badge" placeholder="<?php echo $lang[86]; ?>"/><br>
   <input class="form-control" type="text" name="name" placeholder="<?php echo $lang[87]; ?>"/><br>
   <input class="form-control" type="submit"  name="guardar" class="form-control" value="<?php echo $lang[71]; ?>" /><br>
</form>
    </div>
</div>
            </div>
        </div>
    </div>
</main>
 <?php
if ($_POST['guardar'] && $_POST['badge']) {
$enviar = "INSERT INTO badges (username,badge,name,description) values ('".$username."','".strip_tags($_POST['badge'])."','".$_POST['name']."','".$_POST['description']."')";

if (@$link->query($enviar)) {
  

$title_log = date("Y-m-d");
$action = "$lang[120]";
$enviar_log = "INSERT INTO logs (username,action,date) values ('".$username."','".$action."','".$title_log."')";
$link->query($enviar_log);

?>
<script type="text/javascript">
  location.href ="<?php echo $_SERVER['HTTP_REFERER']; ?>";
</script>
<?php
} }
?>

<?php 

include "../../assets/content/theme/hk_footer.php";

?>
