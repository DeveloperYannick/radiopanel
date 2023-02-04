<?php
    if(isset($_POST['username']) && !empty($_POST['username']) &&
    isset ($_POST['password']) && !empty($_POST['password'])) {

require ('../../../global.php');

if ($_POST['username']) {

$username=htmlentities($_POST['username']);
$cifrado5 = md5($_POST['password']);
$cifrado4 = sha1($cifrado5);
$cifrado3 = md5($cifrado4);
$cifrado2 = sha1($cifrado3);
$cifrado1 = md5($cifrado2);
$password=md5($cifrado1);
if ($password==NULL) {
header ("Location: ../../../nopass");
?>
<script type="text/javascript">
  location.href ="../../../nopass";
</script>
<?php
exit();
}else{
$query = $link->query("SELECT username,password FROM users WHERE username = '$username'") or die(mysqli_error());
$data = mysqli_fetch_array($query);
if($data['password'] != $password) {

header ("Location: ../../../nopass");
?>
<script type="text/javascript">
  location.href ="../../../nopass";
</script>
<?php
exit();
}else{
$query = $link->query("SELECT ID,username,password,look FROM users WHERE username = '$username'") or die(mysqli_error());
$row = mysqli_fetch_array($query);
$username2 = $row['username'];
$_SESSION["username"] = $row['username'];
$_SESSION["id"] = $row['ID'];
$_SESSION["logeado"] = "SI";
$_SESSION["avatar"] = $row['look'];

if($_POST['recordar']){

						if ($HTTP_X_FORWARDED_FOR == "")
					{
						$ip = getenv(REMOTE_ADDR);
					}
					else
					{
						$ip = getenv(HTTP_X_FORWARDED_FOR);
					}
	$id_extreme = md5(uniqid(rand(), true));
	$id_extreme2 = $username2."%".$id_extreme."%".$ip;
	setcookie('id_extreme', $id_extreme2, time()+7776000,'/');
	$query = $link->query("UPDATE users SET id_extreme='".$id_extreme."' WHERE username='".$username2."'") or die(mysqli_error());
	
}

$date_log = date("Y-m-d");
$action = "$lang[115]";
$enviar_log = "INSERT INTO logs (username,action,date) values ('".$username."','".$action."','".$date_log."')";
$resultado_log = $link->query($enviar_log);

$resultado = $link->query("SELECT * FROM users WHERE username = '$username'");
 while($row = mysqli_fetch_array($resultado))
{
$ip_original = $row['ip'];
}

if ($ip_actual == $ip_original) {
	echo '';
} else {
$date_log = date("Y-m-d");
$action = "";
$enviar_log = "INSERT INTO logs_sospechosos (user_logeado,ip,action,date) values ('".$username."','".$ip_actual."','".$action."','".$date_log."')";
$resultado_log = $link->query($enviar_log);
}

header ('Location: ../../../index');
?>
<script type="text/javascript">
  location.href ="../../../index";
</script>
<?php
}
}
}
	} else {
		header ("Location: ../../../nopass");
		?>
<script type="text/javascript">
  location.href ="../../../nopass";
</script>
<?php
	}
?>

</body>
