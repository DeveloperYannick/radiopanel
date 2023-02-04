<?php require('../../global.php');
$query = $link->query('SELECT rank FROM users WHERE username = "' .$username. '"');
while($row = mysqli_fetch_array($query))
{
  $rangouser = $row['rank'];
}
if("$rangouser" == "2"){
header("Location: " . $_SERVER['HTTP_REFERER']);
  exit;
}
if("$rangouser" == "1"){
header("Location: " . $_SERVER['HTTP_REFERER']);
  exit;
}

if (isset ($_GET['id'])){
	
$id = $_GET['id'];

$consulta=<<<SQL
DELETE FROM comments
WHERE id='$id'
LIMIT 1
SQL;

$link->query($consulta);
	


$date_log = date("Y-m-d");
$action = "$lang[123]";
$enviar_log = "INSERT INTO logs (username,action,date) values ('".$username."','".$action."','".$date_log."')";
$link->query($enviar_log);

}
header("Location: " . $_SERVER['HTTP_REFERER']);


?>