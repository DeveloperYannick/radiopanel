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

<title><?php echo "$title";?> - <?php echo $lang[79]; ?></title>

<main class="container">
    <div class="content">
        
         <div class="row">
            <div class="col-lg-12 col-md-12">
                
            </div>
        
            <div class="col-lg-12 col-md-12">
			<div class="content-box">
    <div class="content-body">
                <table class="table table-striped table-hover">
			  <thead>
				<tr>
                              <th><?php echo $lang[91]; ?></th>
                              <th><?php echo $lang[92]; ?></th>
				</tr>
			</thead>
			<tbody>
			<?php
$resultado = $link->query("SELECT * FROM comments ORDER BY id DESC limit 10");
while($row = mysqli_fetch_array($resultado))
{
?>
				<tr>
                
                              <td><?php echo "$row[username]"; ?></td>
							  <td><?php echo "$row[comment]"; ?></td>
							  <td><a href="/panel/delete/comment.php?id=<?php echo "$row[id]"; ?>"><button type="button" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></a></td>
				</tr>
				<?php
			}
			?>
			</tbody>
		</table>
            </div>
        </div>
    </div>
</main>

<?php include "../assets/content/theme/hk_footer.php"; ?>