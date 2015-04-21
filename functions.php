<?php 
function autoDetectLink($str) {
	return $str = preg_replace_callback('#(?:http?://\S+)|(?:https?://\S+)|(?:www.\S+)|(?:\S+\.\S+)#', function($arr)
					{
					    if(strpos($arr[0], 'http://') !== 0)
					    {
					        $arr[0] = 'http://' . $arr[0];
					    }
					    $url = parse_url($arr[0]);

					    //links
					    return sprintf('<a href="%1$s">%1$s</a>', $arr[0]);
					}, $str);
}

function randomColor() {
	$colors = array("#e08713","#eaa59e","#e3dc10","#1dab3f");
	return $colors[rand(0,count($colors)-1)];
}


function displayGame($tweet, $isTweet = true) {
    $query;
    $featured = "";
    if ($isTweet) {
        $tweetFragments = explode("~", $tweet->text);
        $url = $tweet->entities->urls[0]->expanded_url;

        $urlQuery = parse_url($url, PHP_URL_QUERY);
        parse_str($urlQuery, $query);
    } else {

        $query = $tweet;
        $featured = "featured";
    }


    $platform = $query['platform'];

    switch($platform) {

        case "xbox360":
            $platform = "XBOX 360";
            break;
        case "xbox1":
            $platform = "XBOX One";
            break;
        case "ps3":
            $platform = "PS3";
            break;
        case "ps4":
            $platform = "PS4";
            break;


    }



    echo '<li class="' . $featured . '"><p class="tweet">';
    echo '<h3>' . $query['gamertag'] . '</h3> is looking for people to play ' . $query['event'] . ' with on ' . $platform . ".";
    echo 'They are level ' . $query['level'] . " and located in " . $query['region'] . "</br>";
    echo $query['notes'];
    echo '</p></li>';

}



function makeTweet() {

    $tweet = "#LFG #Destiny" . " ~ gamertag: " . $_POST['gamertag'] . " ~ " . $_POST['notes'] . "~" . " http://localhost.com/?region=" . urlencode($_POST['region']). "&platform=" . $_POST['platform'] . "&level=" . $_POST['level'] . "&event=" . urlencode($_POST['event'])  . "&gamertag=" . urlencode($_POST['gamertag']) . "&notes=" . urlencode($_POST['notes']);
    $postStatus = $connection->post('statuses/update',array('status' => $tweet));
}



 ?>