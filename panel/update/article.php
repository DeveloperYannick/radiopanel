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


$title = strip_tags($_POST['title']);
$category = strip_tags($_POST['category']);
$date = $_POST['date'];
$featured_image = $_POST['featured_image'];
$article = nl2br($_POST['article']);
$id = $_POST['id'];

$consulta = "UPDATE news SET title='$title', category='$category', date='$date', featured_image='$featured_image', article='$article' WHERE id='$id'";
$resultado = $link->query($consulta);


$date_log = date("Y-m-d");
$action = "$lang[124]";
$enviar_log = "INSERT INTO logs (username,action,date) values ('".$username."','".$action."','".$date_log."')";
$link->query($enviar_log);


header("Location: ../news.php");

?>