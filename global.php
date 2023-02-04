<?php

###############################################################################
#                            www.HabMusic.de Clone                            #
#                              Powered by Habbink                             #
#                                                                             #
#               Developer by Yılmaz EV (Discord: Hugoyin#7116)                #
###############################################################################

include ('assets/content/sessions/config.php');


if (isset($_GET['language'])) {
  setcookie($_GET['language'], time()+3600); 
    include ('assets/content/sessions/language/'.$_GET['language'].'.php');
}

if (empty($_GET['language'])) {
  if (isset($_COOKIE["idioma"])) {
    include ('assets/content/sessions/language/'.$_COOKIE["idioma"].'.php');
  } else {
    include ('assets/content/sessions/language/'.$language.'.php');
  }
}

$resultado = $link->query("SELECT * FROM config WHERE id = 1");
  while($row = mysqli_fetch_array($resultado))
  {
$url = $row['url'];
$title = $row['title'];
$description = $row['description'];
$keywords = $row['keywords'];
$login_op = $row['login'];
$register_op = $row['register'];
$yilmazev = $row['yilmazev'];
$theme = $row['theme'];
}
$header="<!doctype html>
<html lang='tr'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='author' content='Yılmaz Ev ($yilmazev)'>
    <meta name='title' content='$title'>
    <meta name='description' content='$description'>
    <meta name='keywords'content='$keywords'>
    <meta name='robots' content='index, follow, noarchive'>
    <meta property='og:title' content='$title'>
    <meta property='og:url' content='$url'>
    <meta property='og:image' content='$url/assets/content/images/og_image.png'>
    <link rel='shortcut icon' href='$url/assets/content/images/favicon.ico' type='image/x-icon'>
    <link rel='icon' href='$url/assets/content/images/favicon.ico' type='image/x-icon'>
    <link rel='stylesheet' href='$url/assets/content/styles/bootstrap.min.css?v0.0.1'>
    <link rel='stylesheet' href='$url/assets/content/styles/style.css'>
    <link rel='stylesheet' href='$url/assets/content/styles/style-nc.css'>
    <link rel='stylesheet' href='$url/assets/content/styles/responsive.css'>
    <link rel='stylesheet' href='$url/assets/content/styles/swipebox.css'>
	<link rel='stylesheet' href='$url/panel/froala/css/froala_style.min.css'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'/>
    <link href='https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap' rel='stylesheet'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
    <script src='https://kit.fontawesome.com/f1c29004a3.js' crossorigin='anonymous'></script>
</head>";

$footer="<footer>
    <div class='copyright'>
        <div class='container'>
            <div class='row'>
                <div class='col-6'>
                    <p class='text-left float-left'>
                        &#169; <script>document.write(new Date().getFullYear())</script>
                        <span class='text-highlight'>$title</span>. $lang[67]
                    </p>
                </div>
                <div class='col-6'>
                    <p class='text-right float-right'>
                      $lang[68] <span class='text-highlight'><a href='$yilmazev' target='_blank'>Yılmaz Ev</a></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>";

 $resultado = $link->query("SELECT * FROM ranks WHERE id = 9");
  while($row=mysqli_fetch_array($resultado))
  {
$rango9 = "9";
$rango_9 = $row['name'];
  } 

 $resultado = $link->query("SELECT * FROM ranks WHERE id = 8");
  while($row=mysqli_fetch_array($resultado))
  {
$rango8 = "8";
$rango_8 = $row['name'];
  } 

 $resultado = $link->query("SELECT * FROM ranks WHERE id = 7");
  while($row=mysqli_fetch_array($resultado))
  {
$rango7 = "7";
$rango_7 = $row['name'];
  } 
  
  $resultado = $link->query("SELECT * FROM ranks WHERE id = 6");
  while($row=mysqli_fetch_array($resultado))
  {
$rango6 = "6";
$rango_6 = $row['name'];
  }

   $resultado = $link->query("SELECT * FROM ranks WHERE id = 5");
  while($row=mysqli_fetch_array($resultado))
  {
$rango5 = "5";
$rango_5 = $row['name'];
  }

   $resultado = $link->query("SELECT * FROM ranks WHERE id = 4");
  while($row=mysqli_fetch_array($resultado))
  {
$rango4 = "4";
$rango_4 = $row['name'];
  }

   $resultado = $link->query("SELECT * FROM ranks WHERE id = 3");
  while($row=mysqli_fetch_array($resultado))
  {
$rango3 = "3";
$rango_3 = $row['name'];
  }
    $editorjs = "
  <link href='/panel/froala/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
  <link href='/panel/froala/css/froala_style.min.css' rel='stylesheet' type='text/css' />
  <script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/froala_editor.min.js'></script>
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js'></script>
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/align.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/char_counter.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/code_beautifier.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/code_view.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/colors.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/emoticons.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/entities.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/file.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/font_family.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/font_size.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/fullscreen.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/image.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/image_manager.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/inline_style.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/line_breaker.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/link.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/lists.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/paragraph_format.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/paragraph_style.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/quick_insert.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/quote.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/table.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/save.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/url.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/plugins/video.min.js'></script>
  <script type='text/javascript' src='/panel/froala/js/languages/en.js'></script> <!-- Frola Editor language -->
  <script>$(function() { $('#edit').froalaEditor({ language: 'en'})});</script>  <!-- Frola Editor language -->
  <script>$(function() { $('#edit').froalaEditor() });</script>";
  
?>