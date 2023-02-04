<?php
$consulta = "SELECT * FROM users WHERE username = '".$username."' LIMIT 1";
$filas = $link->query($consulta);
$columnas = mysqli_fetch_assoc($filas);
$look = $columnas['look'];
?>
<style>
.fr-dii.fr-fir {
    float: right;
    margin: 5px 0 5px 5px;
    max-width: calc(100% - 5px);
}

.fr-dii.fr-fil {
    float: left;
    margin: 5px 5px 5px 0;
    max-width: calc(100% - 5px);
}
</style>
<?php $id = $_GET['id']; $consulta = "SELECT *FROM news WHERE id = '".$id."' LIMIT 1"; $filas1 = $link->query($consulta); $columnas = mysqli_fetch_assoc($filas1); $article_id = $columnas['id']; ?>
<title><?php echo "$title";?> - <?php echo $columnas['title']; ?></title>
<main class="container">
    <div class="content">
            <div class="news row no-gutters">
        <div class="col-lg-8">
            <div class="news-body">
			<?php if($_SESSION["logeado"] == "SI"){ $id_article = $columnas['id']; } ?> 
                <div class="news-header" style="background-image: url('<?php echo $columnas['featured_image']; ?>')">
                    <h1><?php echo $columnas['title']; ?></h1>
                    <div class="news-author">
                        <div class="badge-name">
                            <a><?php echo $columnas['author']; ?></a>
					    </div>
                    </div>
                </div>
                <div class="news-text">
                  <?php echo $columnas['article']; ?>  
				</div>
            </div>
        </div>
        <div class="col-lg-4">
		<div class="news-comments">
		 <?php if($_SESSION["logeado"] == "SI"){ ?>
		<form action="" method="post" enctype="multipart/form-data" class="form-no-captions"> 
                <div class="input-group">
                    <textarea class="form-control" name="comment" rows="5" placeholder="<?php echo $lang[70]; ?>"></textarea>
					<input type="hidden" name="article_id" value="<?php echo $columnas['id'];?>"/>
	                <input type="hidden" name="look" value="<?php echo "$look";?>"/>
                    <input type="hidden" name="username" value="<?php echo "$username";?>"/>
                </div>
                        <input name="enviar" type="submit" value="<?php echo $lang[71]; ?>" style="top: 135px;z-index: 3;" class="btn btn-hm btn-rounded">
                    </form>
<?php
error_reporting(0);

$postarticle_id = $_POST['article_id'];
$postusername = $_POST['username'];
$postlook = $_POST['look'];

if ("$article_id" == "$postarticle_id") {
if ("$look" == "$postlook") {
if ("$username" == "$postusername") {
  $htmlremplazar1 = strip_tags($_POST['comment']);
if ($_POST['enviar'] && $_POST['article_id']) {
$enviar = "INSERT INTO comments (username,article_id,comment,look) values ('".$_POST['username']."','".$_POST['article_id']."','".$htmlremplazar1."','".$_POST['look']."')";

if ($link->query($enviar)) { 
$date_log = date("Y-m-d");
$action = "$lang[118]";
$enviar_log = "INSERT INTO logs (username,action,date) values ('".$username."','".$action."','".$date_log."')";
$resultado_log = $link->query($enviar_log);
header ("Location: ../article?id=$article_id"); }
}
}
	}}}
?>
               <h1><?php echo $lang[72]; ?></h1>
			    <?php $query = $link->query('SELECT * FROM comments WHERE article_id = "'.$article_id.'" ORDER BY id DESC limit 50'); while($row = mysqli_fetch_array($query)) { ?>
			   <div class="content-box">
			       <div class="content-header">
				        <div class="user-avatar" style="background-image: url(https://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $row['look'];?>&size=n&direction=2&head_direction=3&gesture=sml&action=wav)"></div>
						<h1><a><?php echo $row['username'];?></a></a></h1>
			       </div>
			       <div class="content-body"><?php $htmlremplazar = $row['comment']; echo strip_tags($htmlremplazar);?></div>
			   </div>
			   <?php } ?>
		</div>
    </div>
    </div>
</main>