<?php
$consulta = "SELECT * FROM users WHERE username = '".$username."' LIMIT 1";
$filas = $link->query($consulta);
$columnas = mysqli_fetch_assoc($filas);
$look = $columnas['look'];
?>
<?php 
$query = $link->query('SELECT rank FROM users WHERE username = "' .$username. '"');
while($row = mysqli_fetch_array($query))
{
  $rangouseruser = $row['rank'];
}

if($_SESSION["logeado"] == "SI"){
echo "";
	echo "
<nav class='navbar navbar-expand-lg'>
    <div class='container'>
        <button class='navbar-toggler mr-auto' type='button' data-toggle='collapse' data-target='#navbar'>
            <i class='fas fa-bars toggler-icon ml-auto'></i>
        </button>
        <div class='collapse navbar-collapse' id='navbar'>
            <ul class='navbar-nav mr-auto navbar-left'>
                <li class='nav-item'>
                    <a class='nav-link' href='/panel/index'>
                        <i class='fas fa-home nav-icon'></i>
                        $lang[73]
                    </a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='/panel/create/badge'>
                        <i class='fas fa-certificate nav-icon'></i>
                        $lang[74]
                    </a>
                </li>
                <li class='nav-item dropdown'>
                    <a class='nav-link' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        <i class='fas fa-newspaper nav-icon'></i>
                        $lang[75]
                    </a>
                    <div class='dropdown-menu'>
					    <a class='dropdown-item' href='/panel/news'>$lang[76]</a>
                        <a class='dropdown-item' href='/panel/create/article'>$lang[77]</a>
                    </div>
                </li>
				<li class='nav-item dropdown'>
                    <a class='nav-link' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        <i class='fas fa-ban nav-icon'></i>
                        $lang[78]
                    </a>
                    <div class='dropdown-menu'>
					    <a class='dropdown-item' href='/panel/comments'>$lang[79]</a>
					    <a class='dropdown-item' href='/panel/bans'>$lang[80]</a>
					    <a class='dropdown-item' href='/panel/team'>$lang[81]</a>
					    <a class='dropdown-item' href='/panel/create/poll'>$lang[82]</a>
					    <a class='dropdown-item' href='/panel/config?edit=1'>$lang[113]</a>
                    </div>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='/panel/statistics'>
                        <i class='fas fa-chart-bar nav-icon'></i>
                        $lang[83]
                    </a>
                </li>
            </ul>
        </div>";
} ?>
       <ul class="navbar-right navbar-nav flex-row ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="nav-profile" style="background-image: url('https://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo "$look"; ?>&size=n&direction=4&head_direction=3&gesture=sml&action=wav')">
                        </div>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/index"><?php echo $lang[12]; ?></a>
                    </div>
                </li>
        </ul>
    </div>
</nav>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo">
                    <img class="animate__animated animate__bounceIn" src="https://www.habmusic.de/src/img/logo.png" alt="<?php echo "$title";?> Logo" onclick="window.location='/panel/index'">
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