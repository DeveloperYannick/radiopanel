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
DELETE FROM bans
WHERE id='$id'
LIMIT 1
SQL;

$resultado = $link->query("SELECT * FROM bans WHERE id = '$id'");
 while($row=mysqli_fetch_array($resultado))
{
	$user_correcto = $row['username'];
} 
$enviar = "UPDATE users SET ban='0', ban_start='0', ban_finish='0' WHERE username='$user_correcto'";

$link->query($consulta);
$link->query($enviar);



$date_log = date("Y-m-d");
$action = "$lang[122]";
$enviar_log = "INSERT INTO logs (username,action,date) values ('".$username."','".$action."','".$date_log."')";
$link->query($enviar_log);

	
}
header("Location: " . $_SERVER['HTTP_REFERER']);


?>