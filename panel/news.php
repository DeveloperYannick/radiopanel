<?php
include "../assets/content/theme/hk_head.php";
include "../assets/content/theme/hk_menu.php";

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
<title><?php echo "$title";?> - <?php echo $lang[4]; ?></title>
<div class="topnews news-overview container">
   <div class="row">
   <?php
$resultado = $link->query("SELECT * FROM news ORDER BY id DESC limit 1000");
while($row = mysqli_fetch_array($resultado))
{
?>
        <div class="news-col col-lg-4">
             <div class="news-small" style="background-image: url('<?php echo "$row[featured_image]"; ?>')" onclick="window.location='/panel/edit/article.php?article=<?php echo "$row[id]"; ?>'">
                <div class="news-title"><?php echo "$row[title]"; ?></div>
             </div>
        </div>
		<?php } ?>
   </div>
</div>

<?php include "../assets/content/theme/hk_footer.php"; ?>