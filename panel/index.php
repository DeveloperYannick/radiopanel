<?php
include "../assets/content/theme/hk_head.php";
include "../assets/content/theme/hk_menu.php";

$query = $link->query('SELECT rank FROM users WHERE username = "' .$username. '"');
while($row = mysqli_fetch_array($query))
{
  $rangouser = $row['rank'];
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

<title><?php echo "$title";?> - <?php echo $lang[69]; ?></title>

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
<div class="content-box">
    
	
	<div class="content-header">
        <h1><?php echo $lang[41]; ?></h1>
    </div>
    <div class="content-body">
        <div class="list-icons small-slider">
		<?php
      $api_url = '';
      $furnis = json_decode(file_get_contents($api_url), true);
      foreach($furnis['data'] as $furni){
      echo '<div style="background-image: url('. $furni['icon'] . ')" class="list-item" data-toggle="tooltip" data-placement="top"title="<b>'. $furni['name'] . '</b>"></div>';
      }
?>
		</div>
    </div>
</div>
            </div>

            <div class="col-lg-4 col-md-12 content-right">
<div class="content-box">
    <div class="content-header">
        <h1><?php echo $lang[42]; ?></h1>
    </div>
    <div class="content-body">
      <ul class="list-beats">
<?php
$resultado = $link->query("SELECT * FROM users ORDER BY id DESC limit 3");
while($row = mysqli_fetch_array($resultado))
{
?>
        <li>
            <div class="circle" style="background-image: url('<?php echo "$row[look]"; ?>&action=std&direction=2&head_direction=3&gesture=spk&size=b')"></div>
            <span>
                  <a><?php echo "$row[username]"; ?></a>
            </span>
		</li>
<?php } ?>
	  </ul>
	</div>
</div>
            </div>
        </div>
    </div>
</main>

<?php
include "../assets/content/theme/hk_footer.php";
?>
