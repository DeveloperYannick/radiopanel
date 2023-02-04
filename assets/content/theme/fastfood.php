<?php if("$yilmazev" == "https://github.com/yilmazev"){echo "$header";} else { echo "<p class='text-left float-left'><span class='text-highlight'>License Error</span></p>"; } ?>
<?php
require ('assets/content/sessions/config.php');

if(!isset($_SESSION["username"]) || !isset($_SESSION["id"])) {
    header("Location: /create");
    exit();
}

function newFastFood($fastFoodData, $onMySite = false)
{
    $fastFoodData = http_build_query($fastFoodData);

    $fastFoodClient = stream_context_create(array('http' =>
        array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => $fastFoodData
        )
    ));

    $server_output = file_get_contents('https://api.thefastfoodgame.com/api', false, $fastFoodClient);
    if($server_output == "")
    {
        exit("FastFood error: Server error. 500.");
    }
    $data = json_decode($server_output);

    if (json_last_error() == JSON_ERROR_NONE)
    {

        if($data->status == 'error')
        {
            echo '<div style="margin: 20px 0; background-color: #c5000e; padding: 10px; color: #FFFFFF;">';
            echo '<b>API error 500:</b>';
            echo '<div style="padding-top: 10px;">'. $data->message .'</div>';
            echo '</div>';
        }
        else
        {

            if(!$onMySite) {
                header("Location: " . $data->url);

                echo '<meta http-equiv="refresh" content="0; URL=' . $data->url . '">';
                exit("We are redirecting you to FastFood. <a href='" . $data->url . "'>Click here when nothing happens</a>");
            }

            else
            {
                exit(file_get_contents($data->url));
            }
        }
    }
    else
    {
        exit("FastFood cannot connect. Error: " . $server_output);
    }
    exit;
}

newFastFood([
    'api-key' => '33AF3A-B6B18C-C48C17-BFE76E-A27D2C', //Your TheFastFoodGame.com API
    'user-id' => $_SESSION["id"],
    'user-name' => $_SESSION["username"],
    'user-avatar' => $_SESSION["avatar"] ?? "hr-165-34.hd-190-10.ch-255-75.lg-3216-64.sh-295-1408.he-1610",
    'theme' => 'default'
], true);