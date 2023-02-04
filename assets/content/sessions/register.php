<?php
require ('../../../global.php');

    if(isset($_POST['username']) && !empty($_POST['username']) &&
    isset($_POST['password']) && !empty($_POST['password']) &&
    isset($_POST['captchaResult']) && !empty($_POST['captchaResult']) &&
    isset ($_POST['email']) && !empty($_POST['email'])) {


		$captchaResult = $_POST["captchaResult"];
		$firstNumber = $_POST["firstNumber"];
		$secondNumber = $_POST["secondNumber"];

		$checkTotal = $firstNumber + $secondNumber;

		if ($captchaResult == $checkTotal) {
			echo '<h2 class="green">Captcha OK</h2>';
		} else {
                    header ("Location: ../../../problem");
                    ?>
<script type="text/javascript">
  location.href ="../../../problem";
</script>
<?php
                    exit;
		}

        $cifrado5 = md5($_POST['password']);
        $cifrado4 = sha1($cifrado5);
        $cifrado3 = md5($cifrado4);
        $cifrado2 = sha1($cifrado3);
        $cifrado1 = md5($cifrado2);
		$password = md5($cifrado1);
		$username = htmlentities($_POST['username']);
		$mail = htmlentities($_POST['email']);
		$date = date("d/m/y");
		$avatar = $username;

		$queEmp = "SELECT username FROM users WHERE username='$username'";
		$resEmp = $link->query($queEmp) or die(mysqli_error());
		$totEmp = mysqli_num_rows($resEmp);
		if($totEmp > 0){
        header ("Location: ../../../username");
                            ?>
<script type="text/javascript">
  location.href ="../../../username";
</script>
<?php
		exit();
		}

		$queEmp = "SELECT email FROM users WHERE email='$mail'";
		$resEmp = $link->query($queEmp) or die(mysqli_error());
		$totEmp = mysqli_num_rows($resEmp);
		if($totEmp > 0){
        header ("Location: ../../../email");
                            ?>
<script type="text/javascript">
  location.href ="../../../email";
</script>
<?php
		exit();
		}

        $link->query("INSERT INTO users (username,password,email,date,avatar,ip)
        VALUES ('{$username}','{$password}','{$mail}','$date','$url/images/avatars/".strtoupper(substr($avatar, 0, 1)).".png','$ip_actual')");

$date_log = date("Y-m-d");
$accion = "$lang[117]";
$enviar_log = "INSERT INTO logs (username,action,date) values ('".$username."','".$accion."','".$date_log."')";
$link->query($enviar_log);

        $my_error = mysqli_error($link);

        if(!empty($my_error)) {

            header ("Location: ../../../congratulations");
                                ?>
<script type="text/javascript">
  location.href ="../../../congratulations";
</script>
<?php

        } else {
             header ("Location: ../../../congratulations");
                                 ?>
<script type="text/javascript">
  location.href ="../../../congratulations";
</script>
<?php

        }

    } else {

         header ("Location: ../../../create");
                             ?>
<script type="text/javascript">
  location.href ="../../../create";
</script>
<?php

    }

?>
