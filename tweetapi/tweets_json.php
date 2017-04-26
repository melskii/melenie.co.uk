<?php
require 'tmhOAuth.php'; // Get it from: https://github.com/themattharris/tmhOAuth

// Use the data from http://dev.twitter.com/apps to fill out this info
// notice the slight name difference in the last two items)

$connection = new tmhOAuth(array(
  'consumer_key' => 'yPVQNR8xyWAqfQakbCsORwPop',
	'consumer_secret' => 'j4Z104yqCg61MoGNc47rUf1e4mh5UtdbCrbC3htjDFmgTT85M5',
	'user_token' => '147696494-a3Homgs2Dto9yauklwEsguQ5W6vXW13UbrsvasfK', //access token
	'user_secret' => '6YC4afV09L5xalJ98RCPdBuMPJpkAqg7d9hUnPSgqeI0p' //access token secret
));

// set up parameters to pass
$parameters = array();

$parameters['count'] = 10;
$count = $parameters['count'];

//
//if ($_GET['screen_name']) {
//	$parameters['screen_name'] = strip_tags($_GET['screen_name']);
//}
//
//if ($_GET['twitter_path']) { $twitter_path = $_GET['twitter_path']; }  else {
$twitter_path = '1.1/statuses/user_timeline.json';
//}

$http_code = $connection->request('GET', $connection->url($twitter_path), $parameters );

if ($http_code === 200) { // if everything's good
	$response = strip_tags($connection->response['response']);

//	if ($_GET['callback']) { // if we ask for a jsonp callback function
//		echo $_GET['callback'],'(', $response,');';
//	} else {
//		echo $response;
//	}
} else {
	echo "Error ID: ",$http_code, "<br>\n";
	echo "Error: ",$connection->response['error'], "<br>\n";
}

$tweet = json_decode($response, true);



$tweets = array();

echo '<ul class="orbit-container">';

for ($i = 0; $i < $count; $i++)
{

    $created = substr($tweet[$i]["created_at"],0,10);
    $text = $tweet[$i]["text"];




    $text = '<a href="https://twitter.com/_melski/status/'. $tweet[$i]["id_str"] . '" target="_blank">'.'<h3 class="title">' . $created . '</h3>'.$text;

    $number = strpos($text, "https://t.");

    if ($number != "") {
        $replace = substr($text, $number, strlen($text) - 1);
        $new = '</a><a href="' . $replace . '" target="_blank">' . $replace ;
        $text =  str_replace($replace, $new, $text);

    }



    if (strlen($text) > 0 && $tweet[$i]["in_reply_to_status_id_str"] == '') {


        echo '<li class="is-active orbit-slide">';
        echo '<blockquote>';
//        echo '<a href="https://twitter.com/_melski/status/'. $tweet[$i]["id_str"] . '" target="_blank">';
//        echo '<h3 class="title">' . $created . '</h3>';

        echo $text;


        echo '</a>';
        echo '</blockquote>';
        echo '</li>';

        array_push($tweets, $text);
    }

//    foreach ($tweet[$i] as $key => $value) {
//        // $arr[3] will be updated with each value from $arr...
//        echo "{$key} => {$value} ".'<br/>';
////        print_r($arr);
//    }




}

echo '</ul>';

echo '<nav class="orbit-bullets">';

for ($id = 0; $id < count($tweets); $id++) {

    if ($id == 0) {
        echo '<button class="is-active" data-slide="'.$id.'"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>';
        }
    else {

        echo '<button data-slide="' . $id . '"><span class="show-for-sr">' . $id . '</span></button>';
    }
}


echo '</nav>';

// You may have to download and copy http://curl.haxx.se/ca/cacert.pem