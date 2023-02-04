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

$date_hoy = date("Y-m-d");

$visitantes = $link->query("SELECT * FROM logs_visiting WHERE date_start = '".$date_hoy."'");
$visitantes_hoy = mysqli_num_rows($visitantes);

$users = $link->query("SELECT * FROM users");
$users_registrados = mysqli_num_rows($users);

$equipo = $link->query("SELECT * FROM users WHERE rank > 1");
$miembros_equipo = mysqli_num_rows($equipo);

$logs = $link->query("SELECT * FROM logs");
$logs_normales = mysqli_num_rows($logs);
$logs_visit = $link->query("SELECT * FROM logs_visiting");
$logs_visiting = mysqli_num_rows($logs_visit);

$total_logs = $logs_normales + $logs_sospechosos;

$comments = $link->query("SELECT * FROM comments");
$comments_total = mysqli_num_rows($comments);

$news = $link->query("SELECT * FROM news");
$news_total = mysqli_num_rows($news);

$total_publicaciones = $news_total;

$banss = $link->query("SELECT * FROM bans");
$banss_total = mysqli_num_rows($banss);

$total = $users_registrados + $total_logs + $statics_total + $total_publicaciones + $regalos_total + $mensajes_total + $featured_imagees_total + $reportes_total + $logs_visiting + $furnis_total + $tienda_total + $banss_total;

?>
<title><?php echo "$title";?> - <?php echo $lang[106]; ?></title>
<main class="container">
    <div class="content">
        
        <div class="row">
            <div class="col-lg-12 col-md-12">
                
            </div>
        
            <div class="col-lg-12 col-md-12">
<div class="content-box">
    <div class="content-body">
	<table class="table table-striped table-hover">
			<tbody>
				<tr>
				  <td><?php echo $lang[107]; ?></td>
				  <td><?php echo $visitantes_hoy; ?></td>
				</tr>
				<tr>
				  <td><?php echo $lang[108]; ?></td>
				  <td><?php echo $users_registrados; ?></td>
				</tr>
				<tr>
				  <td><?php echo $lang[109]; ?></td>
				  <td><?php echo $comments_total; ?></td>
				</tr>
				<tr>
				  <td><?php echo $lang[110]; ?></td>
				  <td><?php echo $total_publicaciones; ?></td>
				</tr>
				<tr>
				  <td><?php echo $lang[111]; ?></td>
				  <td><?php echo $miembros_equipo; ?></td>
				</tr>
				<tr>
				  <td><?php echo $lang[112]; ?></td>
				  <td><?php echo $banss_total; ?></td>
				</tr>
			</tbody>
		</table>
    </div>
</div>
            </div>

        </div>
    </div>
</main>

<?php 

include "../assets/content/theme/hk_footer.php";

?>