<?php $consulta = "SELECT * FROM users WHERE username = '".$username."' LIMIT 1"; $filas = $link->query($consulta); $columnas = mysqli_fetch_assoc($filas); $look = $columnas['look']; $rank = $columnas['rank']; ?>

<body><?php if($_SESSION["logeado"] == "SI") { ?>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbar">
            <i class="fas fa-bars toggler-icon ml-auto"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto navbar-left">
                <li class="nav-item">
                    <a class="nav-link" href="/index">
                        <i class="fas fa-home nav-icon"></i>
                        <?php echo $lang[1]; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/team">
                        <i class="fas fa-heart nav-icon"></i>
                        <?php echo $lang[2]; ?>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-newspaper nav-icon"></i>
                        <?php echo $lang[3]; ?>
                    </a>
                    <div class="dropdown-menu">
					    <a class="dropdown-item" href="/news/index"><?php echo $lang[4]; ?></a>
                        <a class="dropdown-item" href="/news/fansite"><?php echo $title; ?></a>
                        <a class="dropdown-item" href="/news/hotel"><?php echo $lang[6]; ?></a>
                        <a class="dropdown-item" href="/news/maze"><?php echo $lang[7]; ?></a>
                    </div>
                </li>
				<li class="nav-item dropdown">
                    <a class="nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-gamepad nav-icon"></i>
                        <?php echo $lang[8]; ?>
                    </a>
                    <div class="dropdown-menu">
					    <a class="dropdown-item" href="/fastfood"><?php echo $lang[9]; ?></a>
					    <a class="dropdown-item" href="/poll"><?php echo $lang[10]; ?></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/radio">
                        <i class="fas fa-headset nav-icon"></i>
                        <?php echo $lang[11]; ?>
                    </a>
                </li>
            </ul>
        </div>
		<?php if("$rank" >= "6"){echo"
		<ul class='navbar-right navbar-nav flex-row ml-auto'>
            <li class='nav-item'>
                <a class='nav-link' href='/panel/index' style='font-size: 15px;'>
                   $lang[46]
                </a>
            </li>
        </ul>"; ?> <?php } ?>
        <ul class="navbar-right navbar-nav flex-row ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="nav-profile" style="background-image: url('https://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo "$look"; ?>&size=n&direction=4&head_direction=3&gesture=sml&action=wav')"></div>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/logout"><?php echo $lang[12]; ?></a>
                </div>
            </li>
        </ul>
    </div>
</nav>

   <?php
}  else {
	echo "
	<nav class='navbar navbar-expand-lg'>
    <div class='container'>
        <button class='navbar-toggler mr-auto' type='button' data-toggle='collapse' data-target='#navbar'>
            <i class='fas fa-bars toggler-icon ml-auto'></i>
        </button>
        <div class='collapse navbar-collapse' id='navbar'>
            <ul class='navbar-nav mr-auto navbar-left'>
                <li class='nav-item'>
                    <a class='nav-link' href='/index'>
                        <i class='fas fa-home nav-icon'></i>
                        $lang[1]
                    </a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='/team'>
                        <i class='fas fa-heart nav-icon'></i>
                        $lang[2]
                    </a>
                </li>
                <li class='nav-item dropdown'>
                    <a class='nav-link' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        <i class='fas fa-newspaper nav-icon'></i>
                        $lang[3]
                    </a>
                    <div class='dropdown-menu'>
					    <a class='dropdown-item' href='/news/index'>$lang[4]</a>
                        <a class='dropdown-item' href='/news/fansite'>$title</a>
                        <a class='dropdown-item' href='/news/hotel'>$lang[6]</a>
                        <a class='dropdown-item' href='/news/maze'>$lang[7]</a>
                    </div>
                </li>
				<li class='nav-item dropdown'>
                    <a class='nav-link' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        <i class='fas fa-gamepad nav-icon'></i>
                        $lang[8]
                    </a>
                    <div class='dropdown-menu'>
					    <a class='dropdown-item' href='/fastfood'>$lang[9]</a>
					    <a class='dropdown-item' href='/poll'>$lang[10]</a>
                    </div>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='/radio'>
                        <i class='fas fa-headset nav-icon'></i>
                        $lang[11]
                    </a>
                </li>
            </ul>
        </div>
        <ul class='navbar-right navbar-nav flex-row ml-auto'>
                <li class='nav-item'>
                    <a class='nav-link' data-toggle='modal' data-target='#login-form' style='font-size: 15px;'>
                        $lang[13]
                    </a>
                </li>
        </ul>
		<ul class='navbar-right navbar-nav flex-row ml-auto'>
                <li class='nav-item'>
                    <a class='nav-link' href='/create' style='font-size: 15px;'>
                        $lang[14]
                    </a>
                </li>
        </ul>
    </div>
</nav>";
}
?>

<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo">
                    <img class="animate__animated animate__bounceIn" src="https://habbofont.net/font/habbo_new_big/profm.gif" alt="<?php echo "$title";?> Logo" onclick="window.location='/index'">
                </div>
            </div>
<?php
$resultado = $link->query("SELECT * FROM comments ORDER BY id DESC limit 3");
while($row = mysqli_fetch_array($resultado))
{
?>
            <div class="col-lg-3">
                <div class="comment-bubble" onclick="window.location='/article?id=<?php echo "$row[article_id]"; ?>'"><div class="user-avatar" style="background-image: url(https://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo "$row[look]"; ?>&size=n&direction=2&head_direction=2&gesture=spk&action=wav&headonly=1)"></div>
                    <p><?php echo "$row[username]"; ?></p>
				    <p><?php echo "$row[comment]"; ?></p>
                </div>
            </div>
	<?php } ?>
        </div>
    </div>
</div>

<div class="modal fade" id="login-form" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="loginForm">
                        <h1><?php echo $lang[15]; ?></h1>
						<p><?php echo $lang[16]; ?></p>
                        <form method="post" action="../assets/content/sessions/login.php">
                            <div class="form-group">
                                <input type="text" id="username" name="username" class="form-control" placeholder="<?php echo $lang[17]; ?>">
                                <i class="fas fa-user input-icon"></i>
                            </div>
                            <div class="form-group">
                                <input type="password" id="password" name="password" class="form-control" placeholder="<?php echo $lang[18]; ?>">
                                <i class="fas fa-lock input-icon"></i>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary"><?php echo $lang[19]; ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>