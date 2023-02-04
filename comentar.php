<?php

###############################################################################
#                            www.HabMusic.de Clone                            #
#                              Powered by Habbink                             #
#                                                                             #
#               Developer by Yılmaz EV (Discord: Hugoyin#7116)                #
###############################################################################

include "global/conexion.php";
if ($_POST) :
$user_id = $_POST['user_id'];
$article_id = $_POST['article_id'];
$comment = $_POST['comment'];

$comment = trim($comment);
$comment = htmlentities($comment);
$tabla = "comments";

$consulta = mysql_query("INSERT INTO $tabla (user_id,article_id,comment,date) VALUES('$user_id','$article_id','$comment',NOW())");

if ($consulta) {
echo $user_id."".$comment;
exit();
}

endif;

?>