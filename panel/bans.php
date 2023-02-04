<?php
include "../assets/content/theme/hk_head.php";
include "../assets/content/theme/hk_menu.php";

$query = $link->query('SELECT rank FROM users WHERE username = "' .$username. '"');
while($row = mysqli_fetch_array($query))
{
  $rangouser = $row['rank'];
}
if("$rangouser" == "6"){
  header ("Location: ../index");
  exit;
}
if("$rangouser" == "5"){
  header ("Location: ../index");
  exit;
}
if("$rangouser" == "4"){
  header ("Location: ../index");
  exit;
}
if("$rangouser" == "3"){
  header ("Location: ../index");
  exit;
}
if("$rangouser" == "2"){
  header ("Location: ../index");
  exit;
}
if("$rangouser" == "1"){
  header ("Location: ../index");
  exit;
}

?>

<title><?php echo "$title";?> - <?php echo $lang[80]; ?></title>
<main class="container">
    <div class="content">
        
        <div class="row">
            <div class="col-lg-12 col-md-12">
                
            </div>
        
            <div class="col-lg-8 col-md-12 content-left">
<div class="content-box">
    <div class="content-body">
<?php
$resultado = $link->query("SELECT * FROM bans ORDER BY id DESC limit 50");
while($row = mysqli_fetch_array($resultado))
{
?>
	<table class="table table-striped table-hover">
			  <thead>
				<tr>
                              <th><?php echo $lang[91]; ?></th>
                              <th><?php echo $lang[93]; ?></th>
				</tr>
			</thead>
			<tbody>
			<?php
$resultado = $link->query("SELECT * FROM bans ORDER BY id DESC limit 10");
while($row = mysqli_fetch_array($resultado))
{
?>
				<tr>
                
                              <td><?php echo "$row[username]"; ?></td>
							  <td><?php echo "$row[reason]"; ?></td>
							  <td><a href="/panel/delete/ban.php?id=<?php echo "$row[id]"; ?>"><button type="button" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></a></td>
				</tr>
				<?php
			}
			?>
			</tbody>
		</table>
<?php } ?>
    </div>
</div>
            </div>
			<div class="col-lg-4 col-md-12 content-right">
                <div class="content-box">
    <div class="content-header">
        <h1><?php echo $lang[94]; ?></h1>
    </div>
    <div class="content-body">
<form class="form-no-captions" action="" method="post" enctype="multipart/form-data">
   <input class="form-control" type="text" name="user" placeholder="<?php echo $lang[91]; ?>"/><br>
   <input class="form-control" type="text" name="reason" placeholder="<?php echo $lang[93]; ?>"/><br>
   <input class="form-control" type="date" name="ban_finish" placeholder=""/><br>
   <input class="form-control" type="submit"  name="guardar" class="form-control" value="<?php echo $lang[71]; ?>" /><br>
   <?php
if ($_POST['guardar'] && $_POST['user']) {
$user = $_POST['user'];
$reason = $_POST['reason'];
$ban = '1';
$ban_start = date("Y-m-d");
$ban_finish = nl2br($_POST['ban_finish']);

$resultado = $link->query("SELECT * FROM users WHERE username = '$user'");
 while($row=mysqli_fetch_array($resultado))
{
	$user_correcto = $row['username'];
} 

$resultado = $link->query("SELECT * FROM bans WHERE username = '$user_correcto'");
 while($row=mysqli_fetch_array($resultado))
{
	$user_existente = $row['username'];
} 

if ("$user_correcto" == "$user_existente") {
header ("Location: ban.php?username_existente"); 
} else {	
$consulta = "UPDATE users SET ban='1', ban_start='$ban_start', ban_finish='$ban_finish' WHERE username='$user_correcto'";
$resultado = $link->query($consulta);
$enviar = "INSERT INTO bans (username,reason,ban_start,ban_finish) values ('".$user_correcto."','".$reason."','".$ban_start."','".$ban_finish."')";
}
if (@$link->query($enviar)) { 	header ("Location: ban.php?save");  }
}
?>
</form>
    </div>
</div>
            </div>
        </div>
    </div>
</main>

<?php include "../assets/content/theme/hk_footer.php"; ?>