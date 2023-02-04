<title><?php echo "$title";?> - <?php echo $lang[58]; ?></title>
<main class="container">
    <div class="content">
        
        <div class="row">
            <div class="col-lg-12 col-md-12">
                
            </div>
        
            <div class="col-lg-8 col-md-12 content-left">
<div class="card-deck">
<?php
$resultado = $link->query("SELECT * FROM polls ORDER BY id DESC limit 50");
while($row = mysqli_fetch_array($resultado))
{
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo "$row[poll_name]"; ?></h5>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: <?php echo "$row[a_option_result]"; ?>%;" aria-valuenow="<?php echo "$row[other_option_result]"; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo "$row[a_option]"; ?> (<?php echo "$row[a_option_result]"; ?>%)</div>
        </div>
		<br>
		<div class="progress">
            <div class="progress-bar" role="progressbar" style="width: <?php echo "$row[b_option_result]"; ?>%;" aria-valuenow="<?php echo "$row[b_option_result]"; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo "$row[b_option]"; ?> (<?php echo "$row[b_option_result]"; ?>%)</div>
        </div>
		<br>
		<div class="progress">
            <div class="progress-bar" role="progressbar" style="width: <?php echo "$row[other_option_result]"; ?>%;" aria-valuenow="<?php echo "$row[other_option_result]"; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo "$row[other_option]"; ?> (<?php echo "$row[other_option_result]"; ?>%)</div>
        </div>
   </div>
    <div class="card-footer">
      <small class="text-muted"><?php echo $lang[59]; ?> <?php echo "$row[date]"; ?> ❤ <?php echo "$row[participant]"; ?> <?php echo $lang[60]; ?></small>
    </div>
  </div>
<?php } ?>
</div>

            </div>
            <div class="col-lg-4 col-md-12 content-right">
                <div class="content-box">
    <div class="content-header">
        <h1><?php echo $lang[61]; ?></h1>
    </div>
    <div class="content-body">
	<?php echo $lang[62]; ?>
    </div>
</div>
            </div>
        </div>
    </div>
</main>
<style>
.progress {
    display: -ms-flexbox;
    display: flex;
    height: 35px;
    overflow: hidden;
    line-height: 0;
    font-size: .75rem;
    background-color: #e9ecef;
    border-radius: .25rem;
    font-size: 14px;
}
</style>