<?php
$dbhost 		= "127.0.0.1";    // IP Adress
$dbusername 	= "root";        // Username
$dbuserpass 	= "Haaljeeigenpaswoordisopwantditisontzettendstommeactie@1234!";           // Password
$dbname 		= "djpanel"; // Database
$language = 'en'; // Language
$contador = 'rg0uvc6goful';

date_default_timezone_set("Chile/Continental");

    $link = mysqli_connect($dbhost, $dbusername, $dbuserpass, $dbname);
    if(!$link){
        die("Unable to contact database. ".mysqli_error($link));
    }
    if (mysqli_connect_errno()) {
        die("Unable to contact database.".mysqli_connect_errno()."". mysqli_connect_error());
        $link = mysqli_connect($dbhost, $dbusername, $dbuserpass, $dbname);
    }

    $link->set_charset("utf8");

    session_start();

    error_reporting(E_ALL ^ E_NOTICE);


if(isset($_COOKIE['id_extreme']))
{
	$cookie = htmlentities($_COOKIE['id_extreme']);
	$cookie = explode("%",$cookie);
	$user = $cookie[0];
	$id = $cookie[1];
	$ip = $cookie[2];

	if ($_SERVER["REMOTE_ADDR"] == "")
	{
		$ip2 = getenv(REMOTE_ADDR);
	}
	else
	{
		$ip2 = getenv(HTTP_X_FORWARDED_FOR);
	}
	if($ip == $ip2)
	{
		$query = $link->query("SELECT * FROM users WHERE id_extreme='".$id."' and username='".$user."'") or die(mysqli_error());
   		$row = mysqli_fetch_array($query);
   		if(isset($row['username']))
		{
		$_SESSION["username"] = $row['username'];
		$_SESSION["logeado"] = "SI";
		$username = $_SESSION['username'];
        $username_activo = $_SESSION['username'];
   		}
		mysqli_close($link);
	}
}

		$username = $_SESSION['username'];
        $username_activo = $_SESSION['username'];

$ip_actual = $_SERVER["REMOTE_ADDR"];



$ban_user_online = '';

 $resultado = $link->query("SELECT * FROM config WHERE id = 1");
  while($row = mysqli_fetch_array($resultado))
  {
$maintenance = $row['maintenance'];
$url_config = $row['url'];
  }

  if("$maintenance" == "1"){
header ("Location: $url_config/maintenance.htm");
  }

$resultado = $link->query("SELECT * FROM users WHERE username = '$username'");
 while($row = mysqli_fetch_array($resultado))
{
	$ban_user_online = $row['ban'];
	$ban_date_final = $row['ban_finish'];
	$ban_date_startnicio = $row['ban_start'];
}

$resultado = $link->query("SELECT * FROM bans WHERE username = '$username'");
 while($row = mysqli_fetch_array($resultado))
{
	$ban_date_final_bans = $row['ban_finish'];
	$ban_date_startnicio_bans = $row['ban_start'];
	$ban_reason_bans = $row['reason'];
}

$date_hoy = date("Y-m-d");

if($ban_user_online == "1"){

		if("$date_hoy" >= "$ban_date_final_bans") {
$enviar_bans_desbloqueado = "UPDATE users SET ban='0', ban_start='0', ban_finish='0' WHERE username='$username'";
$link->query($enviar_bans_desbloqueado);

$consulta_bans_desbloqueado = "DELETE FROM bans WHERE username='$username' LIMIT 1";
$link->query($consulta_bans_desbloqueado);
	}

	if("$date_hoy" != "$ban_date_final_bans") {
session_start();
session_unset();
session_destroy();
setcookie("id_extreme","x",time()-3600,"/");
echo "<title>$title - Banned</title><div style='font-family: sans-serif;padding:20px;margin-left:-10px;margin-top:-10px;position:absolute;background:red;color:#fff;text-aling:center;heigth:700px;width:100%;'><h2>Bye $username!</h2><h4>Your account has been banned for a certain period of time in case of your actions, actions and statements on $title.<br>We hope this situation will not be repeated.</h4><br><h4>Your ban will be lifted $ban_date_final_bans<br>Reason: $ban_reason_bans</h4></div>";
exit();
}}



$ip_actual = $_SERVER["REMOTE_ADDR"];

$resultado = $link->query("SELECT * FROM users WHERE username = '$username_activo'");
 while($row = mysqli_fetch_array($resultado))
{
$seguridad_ip = $row['seguridad_ip'];
}

if($_SESSION["logeado"] == "SI"){

	if ($seguridad_ip == 'Si') {

$resultado = $link->query("SELECT * FROM users WHERE username = '$username_activo'");
 while($row = mysqli_fetch_array($resultado))
{
$ip_original = $row['ip'];
}

if ($ip_actual == $ip_original) {
echo '';
} else {

	$resultado = $link->query("SELECT * FROM users WHERE username = '$username_activo'");
 while($row = mysqli_fetch_array($resultado))
{
$email_user = $row['email'];
}

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

		$mail = $email_user;
		$queEmp = "SELECT * FROM users WHERE email='$mail'";
		$resEmp = $link->query($queEmp, $conexion) or die(mysqli_error());
		$totEmp = mysqli_num_rows($resEmp);

		$row = mysqli_fetch_assoc($resEmp);
		$hash = md5(md5($row['username']).md5(sha1(md5(sha1(md5(md5($row['password'])))))));

		$headers .= "From:Desbloqueo de cuenta - $fansite_name <info@".$fansite_name.">\r\n";
		$message = "$fansite_name<br><br>Hola $usernmae para desbloquear tu cuenta es necesario cambiar de contraseña por motivos de seguridad aquí abajo tienes la url para acceder al cambio de contraseña.<br><br><a href='
		".$url."/pass.php?id=".$hash."&mail=".$mail."'>Recuperar cuenta</a><br><br>¿Has sido tú el que ha intentado iniciar sesión?<br><a href='".$url."/index?seguridad-anti-robo-de-cuenta'>No</a>";

		if (mail($mail,"Recuperar Contraseña",$message,$headers)){
		$msg = "Se te envio un link a tu mail para cambiar la password";
		}

echo "<div style='font-family:sans-serif;padding:20px;margin-left:-10px;margin-top:-10px;position:absolute;background:red;color:#fff;text-aling:center;heigth:700px;width:100%;'>
<h2>$username Tu cuenta a sido bloqueada</h2>
<br>
<h4>Por tema de seguridad y prevención hemos bloqueado tu cuenta y aconsejamos un cambio de contraseña en cualquier caso de robo de cuenta.<br><br>
¡Advertencia!<br> De cualquier modo todos estos movimientos estan siendo saves como sospechosos por la seguridad a nuestros users y nuestro sitio web</h4>
<h4>Tu cuenta no sera desbloqueada hasta que se confirme el correo electronico o se inicie sesión con la ip registrada la cuenta<br>(Esto es una opción de seguridad puedes desactivarla en ajustes de perfil)</h4><br>
<h3>Tu ip: $_SERVER[REMOTE_ADDR]</h3></div>";


$date_log = date("Y-m-d");
$action = "Ha login sesión con otra ip (La cuenta a sido bloqueada)";
$enviar_log = "INSERT INTO logs_sospechosos (user_logeado,ip,action,date) values ('".$username."','".$ip_actual."','".$action."','".$date_log."')";
$resultado_log = $link->query($enviar_log);

session_unset();
session_destroy();
setcookie("id_extreme","x",time()-3600,"/");

exit();
}
}
}

$date_log = date("Y-m-d");
$hour = date("H:i:s");
	$resultado = $link->query("SELECT * FROM logs_visiting WHERE ip = '$ip_actual'");
 while($row = mysqli_fetch_array($resultado))
{
$date_start = $row['date_start'];
}

if($date_log != $date_start){
$enviar_log_visitante = "INSERT INTO logs_visiting (ip,date_start,hour) values ('".$ip_actual."','".$date_log."','".$hour."')";
$link->query($enviar_log_visitante);
}

?>