<?php 

require ('../../global.php');
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
if("$rangouser" == "3"){
header("Location: " . $_SERVER['HTTP_REFERER']);
  exit;
}
if("$rangouser" == "4"){
header("Location: " . $_SERVER['HTTP_REFERER']);
  exit;
}


$url = strip_tags($_POST['url']);
$title = strip_tags($_POST['title']);
$description = strip_tags($_POST['description']);
$keywords = strip_tags($_POST['keywords']);
$theme = $_POST['theme'];
$maintenance = $_POST['maintenance'];
$login = $_POST['login'];
$register = nl2br($_POST['register']);
$id = $_POST['id'];

$consulta = "UPDATE config SET url='$url', title='$title', description='$description', description='$description', keywords='$keywords', theme='$theme', maintenance='$maintenance', login='$login', register='$register' WHERE id='$id'";
$resultado = $link->query($consulta);


$date_log = date("Y-m-d");
$action = "$lang[125]";
$enviar_log = "INSERT INTO logs (username,action,date) values ('".$username."','".$action."','".$date_log."')";
$link->query($enviar_log);


header("Location: ../config?edit=1");

?>