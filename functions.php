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





    echo '<li class="' . $featured . '"><p class="tweet">';
    echo '<h3>' . $query['gamertag'] . '</h3> is looking for people to play ' . $query['event'] . ' with on ' . $platform . ".";
    echo 'They are level ' . $query['level'] . " and located in " . $query['region'] . "</br>";
    echo $query['notes'];
    echo '</p></li>';

}




 ?>