<title><?php echo "$title";?> - <?php echo $lang[4]; ?></title>
<div class="topnews news-overview container">
   <div class="row">
   <?php
$resultado = $link->query("SELECT * FROM news ORDER BY id DESC limit 1000");
while($row = mysqli_fetch_array($resultado))
{
?>
        <div class="news-col col-lg-4">
             <div class="news-small" style="background-image: url('<?php echo "$row[featured_image]"; ?>')" onclick="window.location='/article?id=<?php echo "$row[id]"; ?>'">
                <div class="news-title"><?php echo "$row[title]"; ?></div>
             </div>
        </div>
		<?php } ?>
   </div>
</div>