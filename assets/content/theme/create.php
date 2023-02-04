<title><?php echo "$title";?> - <?php echo $lang[20]; ?></title>
<main class="container">
    <div class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12"></div>
            <div class="col-lg-8 col-md-12 content-left">
                
                <div class="content-box">
    <div class="content-header">
        <h1><?php echo $lang[20]; ?></h1>
    </div>
    <div class="content-body">
	 <form id="msform" role="form" method="post" action="/assets/content/sessions/register.php" class="form-no-captions" autocomplete="off">
				<input type="hidden" name="action" value="create">

				<div class="input-group">
					<input type="text" name="username" id="username" class="form-control" placeholder="<?php echo $lang[21]; ?>" autocomplete="off">
				</div>
				
				<div class="input-group">
					<input name="email" type="email" id="email" class="form-control" placeholder="<?php echo $lang[22]; ?>" autocomplete="off">
				</div>

				<div class="input-group">
					<input type="password" id="password" name="password" class="form-control" placeholder="<?php echo $lang[23]; ?>" autocomplete="off">
				</div>
<?php
  $min_number = 1;
  $max_number = 15;
  $random_number1 = mt_rand($min_number, $max_number);
  $random_number2 = mt_rand($min_number, $max_number);
?>
				<div class="input-group">
					<input type="text" class="form-control" type="text" name="captchaResult" placeholder="<?php echo $lang[24]; ?> <?php echo $random_number1; ?> + <?php echo $random_number2; ?>" autocomplete="off">
				     <input name="firstNumber" type="hidden" value="<?php echo $random_number1; ?>" /> <input name="secondNumber" type="hidden" value="<?php echo $random_number2; ?>" />
				</div>

				<div class="cf"></div>
				<button type="submit" name="Submit" class="btn btn-blue btn-rounded" style="margin: 3px 0 0 0;"><?php echo $lang[25]; ?></button>
  </form>
    </div>
</div>
            </div>
            
            <div class="col-lg-4 col-md-12 content-right">
                
            </div>
        </div>
    </div>
</main>