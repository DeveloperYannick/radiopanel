<?php

###############################################################################
#                            www.HabMusic.de Clone                            #
#                              Powered by Habbink                             #
#                                                                             #
#               Developer by Yılmaz EV (Discord: Hugoyin#7116)                #
###############################################################################

require ('global.php');
session_start();

$date_log = date("Y-m-d");
$action = "$lang[116]";
$enviar_log = "INSERT INTO logs (username,action,date) values ('".$username."','".$action."','".$date_log."')";
$resultado_log = $link->query($enviar_log);

session_unset();
session_destroy(); 
setcookie("id_extreme","x",time()-3600,"/");
header("Location: ../../../index?logout");

?>