<title><?php echo "$title";?> - <?php echo $lang[39]; ?></title>
<style>.topnews {overflow: hidden;position: relative;top: -115px;height: 300px;}.news-col > .news-small {background-repeat: no-repeat;background-position: center right;border-radius: 6px;cursor: pointer;transition: all .2s linear;}.news-col > .news-small:hover {transform: scale(.975);}.news-col > .news-big::before,.news-col > .news-small::before {content: '';top: 0;bottom: 0;left: 0;right: 0;background: rgb(0,0,0);background: linear-gradient(0deg, rgba(0,0,0,0.75) 0%, rgba(0,0,0,0) 100%);background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 100%);border-radius: 6px;background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 100%);background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 100%);filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=0);}.news-col:nth-of-type(1) > .news-small {height: 300px;width: 403px;position: absolute;}.news-col:nth-of-type(2) > .news-small {height: 140px;position: relative;}.news-col:nth-of-type(3) > .news-small {height: 140px;position: relative;}.news-col:nth-of-type(4) > .news-small {height: 140px;width: 403px;position: absolute;margin-top: 19px;margin-left: 433px;}.news-col:nth-of-type(5) > .news-small {height: 140px;width: 403px;position: absolute;margin-top: 19px;margin-left: 434px;}.news-col > .news-title,.news-col > .news-small > .news-title {font-size: 18px;font-weight: var(--font-semibold);text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);color: #FFFFFF;position: absolute;margin: 15px;bottom: 0;left: 0;}.news-col > .news-ntfy,.news-col > .news-small > .news-ntfy {font-size: 10px;font-weight: var(--font-semibold);color: #FFFFFF;text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);text-transform: uppercase;position: absolute;margin: 15px;top: 0;left: 0;border-radius: 22px;background-color: rgba(167, 16, 16, .75);padding: 10px;}.news-col > .news-big > .news-note,.news-col > .news-small > .news-note {font-size: 10px;font-weight: var(--font-semibold);color: #FFFFFF;text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);text-transform: uppercase;position: absolute;margin: 15px;top: 0;left: 0;border-radius: 22px;background-color: rgba(52, 152, 219, .75);padding: 10px;}.news-col > .news-big > .news-cmts,.news-col > .news-small > .news-cmts {font-size: 15px;font-weight: var(--font-semibold);color: #FFFFFF;text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);position: absolute;margin: 15px;top: 0;right: 0;}.news-col > .news-big > .news-cmts::before,.news-col > .news-small > .news-cmts::before {content: url("../../img/icon-comment.png");padding-right: 10px;}.topnews-event {margin-top: -100px;margin-bottom: 125px;}.topnews-event > .topnews-event-title {font-size: 18px;font-weight: var(--font-semibold);color: #575a5b;margin: 15px 0 25px;}.topnews-event > .news-col:first-of-type > .news-small {margin-left: 0;}.news-small > .news-badge {position: absolute;right: 0;top: 50%;transform: translateY(-50%);margin-right: 25px;}.news-overview .news-col:not(:last-of-type) {margin-bottom: 25px;}</style>
<div class="topnews container">
<div class="row">
<?php
$resultado = $link->query("SELECT * FROM news ORDER BY id DESC limit 5");
while($row = mysqli_fetch_array($resultado))
{
?>
        <div class="news-col col-lg-4">
            <div class="news-small" style="background-image: url('<?php echo "$row[featured_image]"; ?>')" onclick="window.location='/article?id=<?php echo "$row[id]"; ?>'">
                   <div class="news-title"><?php echo "$row[title]"; ?></div>
            </div>
        </div>
<?php } ?>
		</div></div>
		<div class="topnews-event container"></div>

<main class="container">
    <div class="content">
        
        <div class="row">
            <div class="col-lg-12 col-md-12">
                
            </div>
        
            <div class="col-lg-8 col-md-12 content-left">
<div class="content-box">
    
	<div class="content-header">
        <h1><?php echo $lang[40]; ?></h1>
    </div>
    <div class="content-body">
        <div class="list-icons small-slider">
<?php
$resultado = $link->query("SELECT * FROM badges ORDER BY id DESC limit 50");
while($row = mysqli_fetch_array($resultado))
{
?>
		     <div style="background-image: url(<?php echo "$row[badge]"; ?>)" class="list-item" data-toggle="tooltip" data-placement="top"title="<b><?php echo "$row[name]"; ?></b><br><?php echo "$row[description]"; ?>"></div>
<?php } ?>
		</div>
    </div>
</div>
<div class="content-box">
    
	
	<div class="content-header">
        <h1><?php echo $lang[41]; ?></h1>
    </div>
    <div class="content-body">
        <div class="list-icons small-slider">
		<?php
      $api_url = 'https://habboassets.com/api/v1/furniture';
      $furnis = json_decode(file_get_contents($api_url), true);
      foreach($furnis['data'] as $furni){
      echo '<div style="background-image: url('. $furni['icon'] . ')" class="list-item" data-toggle="tooltip" data-placement="top"title="<b>'. $furni['name'] . '</b>"></div>';
      }
?>
		</div>
    </div>
</div>
            </div>

            <div class="col-lg-4 col-md-12 content-right">
<div class="content-box">
    <div class="content-header">
        <h1><?php echo $lang[42]; ?></h1>
    </div>
    <div class="content-body">
      <ul class="list-beats">
<?php
$resultado = $link->query("SELECT * FROM users ORDER BY id DESC limit 3");
while($row = mysqli_fetch_array($resultado))
{
?>
        <li>
            <div class="circle" style="background-image: url('<?php echo "$row[look]"; ?>&action=std&direction=2&head_direction=3&gesture=spk&size=b')"></div>
            <span>
                  <a><?php echo "$row[username]"; ?></a>
            </span>
		</li>
<?php } ?>
	  </ul>
	</div>
</div>
            </div>
        </div>
    </div>
</main>