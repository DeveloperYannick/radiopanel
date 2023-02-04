<?php
include "../assets/content/theme/hk_head.php";
include "../assets/content/theme/hk_menu.php";

$query = $link->query('SELECT rank FROM users WHERE username = "' .$username. '"');
while($row = mysqli_fetch_array($query))
{
  $rangouser = $row['rank'];
}
if("$rangouser" == "7"){
  header ("Location: ../index");
  exit;
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

<title><?php echo "$title";?> - <?php echo $lang[81]; ?></title>
<main class="container">
    <div class="content">
        
        <div class="row">
            <div class="col-lg-12 col-md-12">
                
            </div>
        
            <div class="col-lg-8 col-md-12 content-left">
<div class="content-box">
    <div class="content-body">
<?php
$resultado = $link->query("SELECT * FROM users WHERE rank > 1 ORDER BY rank DESC");
while($row=mysqli_fetch_array($resultado))
{
?>
	<table class="table table-striped table-hover">
			  <thead>
				<tr>
                              <th><?php echo $lang[91]; ?></th>
				</tr>
			</thead>
			<tbody>
<?php
                      
            $resultado = $link->query("SELECT * FROM users WHERE rank > 2 ORDER BY rank DESC");
              while($row=mysqli_fetch_array($resultado))
            {
?>
				<tr>
                
                              <td><?php echo "$row[username]"; ?></td>
				</tr>
<?php } ?>
			</tbody>
		</table>
<?php } ?>
    </div>
</div>
            </div>
			<div class="col-lg-4 col-md-12 content-right">
                <div class="content-box">
    <div class="content-header">
        <h1><?php echo $lang[95]; ?></h1>
    </div>
    <div class="content-body">
<form class="form-no-captions" action="" method="post" enctype="multipart/form-data">
   <input class="form-control" type="text" name="user" placeholder="<?php echo $lang[91]; ?>"/><br>
   <select class="form-control" required="" name="rank">
					
					  <?php
                        if("$rankuser" >= "$rank7"){
                      $resultado = $link->query("SELECT * FROM ranks ORDER BY id DESC");
                      while($row=mysqli_fetch_array($resultado))
                      {
                      ?>
                     
                    <option value="<?php echo "$row[id]"; ?>"><?php echo "$row[name]"; ?></option>
					<?php
                      }}
                    ?>
                        
                      <?php
                      
                        if("$rankuser" == "6"){
                      $resultado = $link->query("SELECT * FROM ranks WHERE id < 6 ORDER BY id DESC");
                      while($row=mysqli_fetch_array($resultado))
                      {
                      ?>
                     
                    <option value="<?php echo "$row[id]"; ?>"><?php echo "$row[name]"; ?></option>
					<?php
                      }}
                    ?>
                      <?php
                      
                        if("$rankuser" == "5"){
                      $resultado = $link->query("SELECT * FROM ranks WHERE id < 5 ORDER BY id DESC");
                      while($row=mysqli_fetch_array($resultado))
                      {
                      ?>
                     
                    <option value="<?php echo "$row[id]"; ?>"><?php echo "$row[name]"; ?></option>
					<?php
                      }}
                    ?>
                      <?php
                      
                        if("$rankuser" == "4"){
                      $resultado = $link->query("SELECT * FROM ranks WHERE id < 4 ORDER BY id DESC");
                      while($row=mysqli_fetch_array($resultado))
                      {
                      ?>
                     
                    <option value="<?php echo "$row[id]"; ?>"><?php echo "$row[name]"; ?></option>
					<?php
                      }}
                    ?>
                      <?php
                      
                        if("$rankuser" == "3"){
                      $resultado = $link->query("SELECT * FROM ranks WHERE id < 3 ORDER BY id DESC");
                      while($row=mysqli_fetch_array($resultado))
                      {
                      ?>
                     
                    <option value="<?php echo "$row[id]"; ?>"><?php echo "$row[name]"; ?></option>
					<?php
                      }}
                    ?>
                        
    </select><br>
   <input class="form-control" type="submit"  name="guardar" class="form-control" value="<?php echo $lang[71]; ?>" />
<?php
if ($_POST['guardar'] && $_POST['user']) {
$user = $_POST['user'];
$rank = nl2br($_POST['rank']);
$enviar = "UPDATE users SET rank='$rank' WHERE username='$user'";

if (@$link->query($enviar)) { header ("Location: /panel/team?save"); }
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