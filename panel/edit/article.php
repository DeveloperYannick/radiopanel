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
<?php
$id = $_GET['article'];
$consulta =<<<SQL
SELECT *
FROM
news WHERE id = '$id'
LIMIT 1
SQL;
 $filas = $link->query($consulta);
  $columnas = mysqli_fetch_assoc($filas);
?>
<title><?php echo "$title";?> - <?php echo $columnas['title']; ?></title>
<main class="container">
    <div class="content">
        
        <div class="row">
            <div class="col-lg-12 col-md-12">
                
            </div>
        
            <div class="col-lg-8 col-md-12 content-left">
<div class="content-box">
	<div class="content-header">
        <h1><?php echo $columnas['title']; ?></h1>
    </div>
	<form class="form-no-captions" method="post" action="../update/article.php">
	<input type="hidden" name="id" value="<?php echo $columnas['id']; ?>"/>
    <div class="content-body" style="padding: 5px;">
        <textarea name="article" cols="10" rows="10" id='edit'><?php echo $columnas['article']; ?></textarea>
    </div>
</div>
            </div>
			<div class="col-lg-4 col-md-12 content-right">
                <div class="content-box">
    <div class="content-body">
   <input class="form-control" type="text" name="title" placeholder="<?php echo $lang[88]; ?>" value="<?php echo $columnas['title']; ?>"/><br>
   
   <select class="form-control"  name="category">
       <option value="<?php echo $columnas['category']; ?>"><?php echo $columnas['category']; ?></option>
       <option value="fansite"><?php echo "$title";?></option>
	   <option value="hotel"><?php echo $lang[6]; ?></option>
       <option value="maze"><?php echo $lang[7]; ?></option>
   </select><br>
   
   <input class="form-control" type="text" name="featured_image" placeholder="<?php echo $lang[89]; ?>" value="<?php echo $columnas['featured_image']; ?>"/><br>
   <input class="form-control" type="submit"  class="form-control" value="<?php echo $lang[71]; ?>" /><br>
</form>
    </div>
</div>
            </div>
        </div>
    </div>
</main>

<?php 

include "../../assets/content/theme/hk_footer_2.php";

?>