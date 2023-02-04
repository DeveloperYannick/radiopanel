<title><?php echo "$title";?> - <?php echo $lang[43]; ?></title>
<?php
$resultado = $link->query("SELECT * FROM ranks WHERE id = 2");
while($row = mysqli_fetch_array($resultado))
{
	$idrank3 = $row['id'];
}
$resultado = $link->query("SELECT * FROM ranks WHERE id = 3");
while($row = mysqli_fetch_array($resultado))
{
	$idrank3 = $row['id'];
}
$resultado = $link->query("SELECT * FROM ranks WHERE id = 4");
while($row = mysqli_fetch_array($resultado))
{
	$idrank4 = $row['id'];
}
$resultado = $link->query("SELECT * FROM ranks WHERE id = 5");
while($row = mysqli_fetch_array($resultado))
{
	$idrank5 = $row['id'];
}
$resultado = $link->query("SELECT * FROM ranks WHERE id = 6");
while($row = mysqli_fetch_array($resultado))
{
	$idrank6 = $row['id'];
}
$resultado = $link->query("SELECT * FROM ranks WHERE id = 7");
while($row = mysqli_fetch_array($resultado))
{
	$idrank7 = $row['id'];
}
$resultado = $link->query("SELECT * FROM ranks WHERE id = 8");
while($row = mysqli_fetch_array($resultado))
{
	$idrank8 = $row['id'];
}
$resultado = $link->query("SELECT * FROM ranks WHERE id = 9");
while($row = mysqli_fetch_array($resultado))
{
	$idrank9 = $row['id'];
}
?>
<main class="container">
    <div class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12">
            </div>
            <div class="col-lg-8 col-md-12 content-left">
               <div class="content-box">
                   <div class="content-header">
                      <h1><?php echo $lang[44]; ?></h1>
                   </div>
                   <div class="content-body">
                       <div class="row list-habbo">
<?php
if(isset($idrank9) && $idrank9){
$resultado = $link->query("SELECT * FROM ranks WHERE id = 9");
while($row = mysqli_fetch_array($resultado))
{
?>

<?php }
$resultado = $link->query("SELECT * FROM users WHERE rank = 9");
while($row = mysqli_fetch_array($resultado))
{
?>
					      <div class="col-lg-4 col-md-6">
					         <div class="user-box" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $row['username']; ?>">
					              <div class="user-avatar">
					                   <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $row['look']; ?>&amp;action=std&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;size=b?1612117272">
					              </div>
					              <div class="user-header">
								     <img class="user-icon"><a><?php echo $row['username']; ?></a>
					                 <div class="user-motto"><?php echo $lang[45]; ?></div>
					              </div>
					         </div>
					      </div>
<?php } } ?>
<?php
if(isset($idrank8) && $idrank8){
$resultado = $link->query("SELECT * FROM ranks WHERE id = 8");
while($row = mysqli_fetch_array($resultado))
{
?>

<?php }
$resultado = $link->query("SELECT * FROM users WHERE rank = 8");
while($row = mysqli_fetch_array($resultado))
{
?>
					      <div class="col-lg-4 col-md-6">
					         <div class="user-box" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $row['username']; ?>">
					              <div class="user-avatar">
					                   <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $row['look']; ?>&amp;action=std&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;size=b?1612117272">
					              </div>
					              <div class="user-header">
								     <img class="user-icon"><a><?php echo $row['username']; ?></a>
					                 <div class="user-motto"><?php echo $lang[47]; ?></div>
					              </div>
					         </div>
					      </div>
<?php } } ?>
                       </div>
                   </div>
               </div>		
			   
			   <div class="content-box">
                   <div class="content-header">
                      <h1><?php echo $lang[47]; ?></h1>
                   </div>
                   <div class="content-body">
                       <div class="row list-habbo">
					      <?php
if(isset($idrank7) && $idrank7){
$resultado = $link->query("SELECT * FROM ranks WHERE id = 7");
while($row = mysqli_fetch_array($resultado))
{
?>

<?php }
$resultado = $link->query("SELECT * FROM users WHERE rank = 7");
while($row = mysqli_fetch_array($resultado))
{
?>
					      <div class="col-lg-4 col-md-6">
					         <div class="user-box" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $row['username']; ?>">
					              <div class="user-avatar">
					                   <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $row['look']; ?>&amp;action=std&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;size=b?1612117272">
					              </div>
					              <div class="user-header">
								     <img class="user-icon"><a><?php echo $row['username']; ?></a>
					                 <div class="user-motto"><?php echo $lang[48]; ?></div>
					              </div>
					         </div>
					      </div>
<?php } } ?>
                       </div>
                   </div>
               </div>
			   
			   <div class="content-box">
                   <div class="content-header">
                      <h1><?php echo $lang[48]; ?></h1>
                   </div>
                   <div class="content-body">
                       <div class="row list-habbo">
<?php
if(isset($idrank6) && $idrank6){
$resultado = $link->query("SELECT * FROM ranks WHERE id = 6");
while($row = mysqli_fetch_array($resultado))
{
?>

<?php }
$resultado = $link->query("SELECT * FROM users WHERE rank = 6");
while($row = mysqli_fetch_array($resultado))
{
?>
					      <div class="col-lg-4 col-md-6">
					         <div class="user-box" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $row['username']; ?>">
					              <div class="user-avatar">
					                   <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $row['look']; ?>&amp;action=std&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;size=b?1612117272">
					              </div>
					              <div class="user-header">
								     <img class="user-icon"><a><?php echo $row['username']; ?></a>
					                 <div class="user-motto"><?php echo $lang[49]; ?></div>
					              </div>
					         </div>
					      </div>
<?php } } ?>
                       </div>
                   </div>
               </div>
			   
			   <div class="content-box">
                   <div class="content-header">
                      <h1><?php echo $lang[50]; ?></h1>
                   </div>
                   <div class="content-body">
                       <div class="row list-habbo">
					     <?php
if(isset($idrank5) && $idrank5){
$resultado = $link->query("SELECT * FROM ranks WHERE id = 5");
while($row = mysqli_fetch_array($resultado))
{
?>

<?php }
$resultado = $link->query("SELECT * FROM users WHERE rank = 5");
while($row = mysqli_fetch_array($resultado))
{
?>
					      <div class="col-lg-4 col-md-6">
					         <div class="user-box" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $row['username']; ?>">
					              <div class="user-avatar">
					                   <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $row['look']; ?>&amp;action=std&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;size=b?1612117272">
					              </div>
					              <div class="user-header">
								     <img class="user-icon"><a><?php echo $row['username']; ?></a>
					                 <div class="user-motto"><?php echo $lang[51]; ?></div>
					              </div>
					         </div>
					      </div>
<?php } } ?>
<?php
if(isset($idrank4) && $idrank4){
$resultado = $link->query("SELECT * FROM ranks WHERE id = 4");
while($row = mysqli_fetch_array($resultado))
{
?>

<?php }
$resultado = $link->query("SELECT * FROM users WHERE rank = 4");
while($row = mysqli_fetch_array($resultado))
{
?>
					      <div class="col-lg-4 col-md-6">
					         <div class="user-box" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $row['username']; ?>">
					              <div class="user-avatar">
					                   <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $row['look']; ?>&amp;action=std&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;size=b?1612117272">
					              </div>
					              <div class="user-header">
								     <img class="user-icon"><a><?php echo $row['username']; ?></a>
					                 <div class="user-motto"><?php echo $lang[52]; ?></div>
					              </div>
					         </div>
					      </div>
<?php } } ?>
                       </div>
                   </div>
               </div>
			   
			   <div class="content-box">
                   <div class="content-header">
                      <h1><?php echo $lang[53]; ?></h1>
                   </div>
                   <div class="content-body">
                       <div class="row list-habbo">
					      <?php
if(isset($idrank3) && $idrank3){
$resultado = $link->query("SELECT * FROM ranks WHERE id = 3");
while($row = mysqli_fetch_array($resultado))
{
?>

<?php }
$resultado = $link->query("SELECT * FROM users WHERE rank = 3");
while($row = mysqli_fetch_array($resultado))
{
?>
					      <div class="col-lg-4 col-md-6">
					         <div class="user-box" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $row['username']; ?>">
					              <div class="user-avatar">
					                   <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $row['look']; ?>&amp;action=std&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;size=b?1612117272">
					              </div>
					              <div class="user-header">
								     <img class="user-icon"><a><?php echo $row['username']; ?></a>
					                 <div class="user-motto"><?php echo $lang[54]; ?></div>
					              </div>
					         </div>
					      </div>
<?php } } ?>
                       </div>
                   </div>
               </div>
			   
			   <div class="content-box">
                   <div class="content-header">
                      <h1><?php echo $lang[54]; ?></h1>
                   </div>
                   <div class="content-body">
                       <div class="row list-habbo">
					      <?php
if(isset($idrank2) && $idrank2){
$resultado = $link->query("SELECT * FROM ranks WHERE id = 2");
while($row = mysqli_fetch_array($resultado))
{
?>

<?php }
$resultado = $link->query("SELECT * FROM users WHERE rank = 2");
while($row = mysqli_fetch_array($resultado))
{
?>
					      <div class="col-lg-4 col-md-6">
					         <div class="user-box" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $row['username']; ?>">
					              <div class="user-avatar">
					                   <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $row['look']; ?>&amp;action=std&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;size=b?1612117272">
					              </div>
					              <div class="user-header">
								     <img class="user-icon"><a><?php echo $row['username']; ?></a>
					                 <div class="user-motto"><?php echo $lang[54]; ?></div>
					              </div>
					         </div>
					      </div>
<?php } } ?>
                       </div>
                   </div>
               </div>
            </div>
            
            <div class="col-lg-4 col-md-12 content-right">
                <div class="content-box">
    <div class="content-header">
        <h1><?php echo $lang[55]; ?></h1>
    </div>
    <div class="content-body">
	<?php echo $lang[56]; ?> <?php echo "$title";?> <?php echo $lang[57]; ?>
    </div>
</div>
            </div>
        </div>
    </div>
</main>