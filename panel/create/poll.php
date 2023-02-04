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
<title><?php echo "$title";?> - <?php echo $lang[58]; ?></title>
<main class="container">
    <div class="content">
        
        <div class="row">
            <div class="col-lg-12 col-md-12">
                
            </div>
        
            <div class="col-lg-8 col-md-12 content-left">
<div class="card-deck">
<?php
$resultado = $link->query("SELECT * FROM polls ORDER BY id DESC limit 50");
while($row = mysqli_fetch_array($resultado))
{
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo "$row[poll_name]"; ?></h5>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: <?php echo "$row[a_option_result]"; ?>%;" aria-valuenow="<?php echo "$row[other_option_result]"; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo "$row[a_option]"; ?> (<?php echo "$row[a_option_result]"; ?>%)</div>
        </div>
		<br>
		<div class="progress">
            <div class="progress-bar" role="progressbar" style="width: <?php echo "$row[b_option_result]"; ?>%;" aria-valuenow="<?php echo "$row[b_option_result]"; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo "$row[b_option]"; ?> (<?php echo "$row[b_option_result]"; ?>%)</div>
        </div>
		<br>
		<div class="progress">
            <div class="progress-bar" role="progressbar" style="width: <?php echo "$row[other_option_result]"; ?>%;" aria-valuenow="<?php echo "$row[other_option_result]"; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo "$row[other_option]"; ?> (<?php echo "$row[other_option_result]"; ?>%)</div>
        </div>
   </div>
    <div class="card-footer">
      <small class="text-muted"><?php echo $lang[59]; ?> <?php echo "$row[date]"; ?> ❤ <?php echo "$row[participant]"; ?> <?php echo $lang[60]; ?></small>
    </div>
  </div>
<?php } ?>
</div>

            </div>
			<div class="col-lg-4 col-md-12 content-right">
                <div class="content-box">
    <div class="content-header">
        <h1><?php echo $lang[96]; ?></h1>
    </div>
    <div class="content-body">
<form class="form-no-captions" action="" method="post" enctype="multipart/form-data">
   <input class="form-control" type="text" name="poll_name" placeholder="<?php echo $lang[97]; ?>"/><br>
   <input class="form-control" type="text" name="a_option" placeholder="<?php echo $lang[98]; ?>"/><br>
   <input class="form-control" type="text" name="a_option_result" placeholder="<?php echo $lang[99]; ?>"/><br>
   <input class="form-control" type="text" name="b_option" placeholder="<?php echo $lang[100]; ?>"/><br>
   <input class="form-control" type="text" name="b_option_result" placeholder="<?php echo $lang[101]; ?>"/><br>
   <input class="form-control" type="text" name="other_option" placeholder="<?php echo $lang[102]; ?>"/><br>
   <input class="form-control" type="text" name="other_option_result" placeholder="<?php echo $lang[103]; ?>"/><br>
   <input class="form-control" type="text" name="date" placeholder="<?php echo $lang[104]; ?>"/><br>
   <input class="form-control" type="text" name="participant" placeholder="<?php echo $lang[105]; ?>"/><br>
   <input class="form-control" type="submit"  name="guardar" class="form-control" value="<?php echo $lang[71]; ?>" /><br>
</form>
    </div>
</div>
            </div>
        </div>
    </div>
</main>
 <?php
if ($_POST['guardar'] && $_POST['poll_name']) {
$enviar = "INSERT INTO polls (username,poll_name,a_option,a_option_result,b_option,b_option_result,other_option,other_option_result,date,participant) values ('".$username."','".strip_tags($_POST['poll_name'])."','".$_POST['a_option']."','".$_POST['a_option_result']."','".$_POST['b_option']."','".$_POST['b_option_result']."','".$_POST['other_option']."','".$_POST['other_option_result']."','".$_POST['date']."','".$_POST['participant']."')";

if (@$link->query($enviar)) {
  

$title_log = date("Y-m-d");
$action = "$lang[121]";
$enviar_log = "INSERT INTO logs (username,action,date) values ('".$username."','".$action."','".$title_log."')";
$link->query($enviar_log);

?>
<script type="text/javascript">
  location.href ="<?php echo $_SERVER['HTTP_REFERER']; ?>";
</script>
<?php
} }
?>
<style>
.progress {
    display: -ms-flexbox;
    display: flex;
    height: 35px;
    overflow: hidden;
    line-height: 0;
    font-size: .75rem;
    background-color: #e9ecef;
    border-radius: .25rem;
    font-size: 14px;
}
</style>
<?php 

include "../../assets/content/theme/hk_footer.php";

?>
