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
if("$rangouser" == "6"){
header("Location: " . $_SERVER['HTTP_REFERER']);
  exit;
}
if("$rangouser" == "7"){
header("Location: " . $_SERVER['HTTP_REFERER']);
  exit;
}

?>
<?php
$id = $_GET['edit'];
$consulta =<<<SQL
SELECT * FROM config WHERE id = '$id' LIMIT 1
SQL;
 $filas = $link->query($consulta);
 $columnas = mysqli_fetch_assoc($filas);
?>
<title><?php echo "$title";?> - <?php echo $lang[113]; ?></title>
<main class="container">
    <div class="content">
        
        <div class="row">
            <div class="col-lg-12 col-md-12">
                
            </div>
        
<style>
.code {
	background: #1f1e1e;
	border-radius: 5px;
	padding: 5px;
}

.code .red {
	color: #cc8a91;
}

.code .blue {
	color: #8dd2d2;
}

.code .yellow {
	color: #efe4b0;
}

.code .left {
	margin-left: 20px;
}
</style>
            <div class="col-lg-8 col-md-12 content-left">
<div class="content-box">
	<div class="content-header">
        <h1><?php echo $lang[114]; ?></h1>
    </div>
	<form class="form-no-captions" method="post" action="/panel/update/config.php">
	<input type="hidden" name="id" value="<?php echo "$id";?>"/>
    <div class="content-body" style="padding: 5px;">
        <div>
		           <div class="code">
		    <span class="red">&lt;head<span class="red">></span></span><br>
		      <span class="left"><span class="red">&lt;meta</span> <span class="blue">charset</span><span class="red">="</span><span class="yellow">utf-8<span class="red">"</span><span class="red">></span></span><br>
		      <span class="left"><span class="red">&lt;meta</span> <span class="blue">name</span><span class="red">="</span><span class="yellow">author<span class="red">"</span><span class="blue"> content<span class="red">="</span><span class="yellow"><b>Yılmaz Ev (<?php echo "$yilmazev";?>)</b></span><span class="red">"></span></span></span><br>
			  <span class="left"><span class="red">&lt;meta</span> <span class="blue">name</span><span class="red">="</span><span class="yellow">title<span class="red">"</span><span class="blue"> content<span class="red">="</span><span class="yellow"><b><?php echo "$title";?></b>"<span class="red">></span></span></span><br>
		      <span class="left"><span class="red">&lt;meta</span> <span class="blue">name</span><span class="red">="</span><span class="yellow">description<span class="red">"</span><span class="blue"> content<span class="red">="</span><span class="yellow"><b><?php echo "$description";?></b></span><span class="red">"></span></span></span><br>
		      <span class="left"><span class="red">&lt;meta</span> <span class="blue">name</span><span class="red">="</span><span class="yellow">keywords<span class="red">"</span><span class="blue"> content<span class="red">="</span><span class="yellow"><b><?php echo "$keywords";?></b></span><span class="red">"></span></span></span><br>
		      <span class="left"><span class="red">&lt;meta</span> <span class="blue">name</span><span class="red">="</span><span class="yellow">robots<span class="red">"</span><span class="blue"> content<span class="red">="</span><span class="yellow">index, follow, noarchive</span></span><span class="red">"></span></span></span><br>
		      <span class="left"><span class="red">&lt;meta</span> <span class="blue">property</span><span class="red">="</span><span class="yellow">og:title<span class="red">"</span><span class="blue"> content<span class="red">="</span><span class="yellow"><b><?php echo "$title";?></b></span><span class="red">"></span></span></span><br>
		      <span class="left"><span class="red">&lt;meta</span> <span class="blue">property</span><span class="red">="</span><span class="yellow">og:url<span class="red">"</span><span class="blue"> content<span class="red">="</span><span class="yellow"><b><?php echo "$url";?></b></span><span class="red">"></span></span></span><br>
			<span class="red">&lt;/head<span class="red">></span></span>
		  </div>
		</div>
    </div>
</div>
            </div>
			<div class="col-lg-4 col-md-12 content-right">
                <div class="content-box">
    <div class="content-body">
   <input class="form-control" type="text" name="url" value="<?php echo "$url";?>"/><br>
   <input class="form-control" type="text" name="title" value="<?php echo "$title";?>"/><br>
   <input class="form-control" type="text" name="description" value="<?php echo "$description";?>"/><br>
   <input class="form-control" type="text" name="keywords" value="<?php echo "$keywords";?>"/><br>
   <select class="form-control"  name="theme">
       <option value="blue"><?php echo $lang[126]; ?></option>
       <option value="yellow"><?php echo $lang[127]; ?></option>
       <option value="pink"><?php echo $lang[128]; ?></option>
       <option value="purple"><?php echo $lang[129]; ?></option>
       <option value="green"><?php echo $lang[130]; ?></option>
       <option value="red"><?php echo $lang[131]; ?></option>
       <option value="orange"><?php echo $lang[132]; ?></option>
   </select><br>
   <select class="form-control"  name="maintenance">
       <option value="0"><?php echo $lang[133]; ?></option>
       <option value="1"><?php echo $lang[134]; ?></option>
   </select><br>
   <select class="form-control"  name="login">
       <option value="1"><?php echo $lang[135]; ?></option>
       <option value="0"><?php echo $lang[136]; ?></option>
   </select><br>
   <select class="form-control"  name="register">
       <option value="1"><?php echo $lang[137]; ?></option>
       <option value="0"><?php echo $lang[138]; ?></option>
   </select><br>
   <input class="form-control" type="text" name="yilmazev" value="<?php echo "$yilmazev";?> (license)" disabled /><br>
   <input class="form-control" type="submit"  class="form-control" value="<?php echo $lang[71]; ?>" /><br>
</form>
    </div>
</div>
            </div>
        </div>
    </div>
</main>

<?php 

include "../assets/content/theme/hk_footer.php";

?>