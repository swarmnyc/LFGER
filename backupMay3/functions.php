

<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
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

function pluralize( $count, $text )
{
    return $count . ( ( $count == 1 ) ? ( " $text" ) : ( " ${text}s" ) );
}

function ago( $datetime )
{
    $interval = date_create('now')->diff( $datetime );
    $suffix = ( $interval->invert ? ' ago' : '' );
    if ( $v = $interval->y >= 1 ) return pluralize( $interval->y, 'year' ) . $suffix;
    if ( $v = $interval->m >= 1 ) return pluralize( $interval->m, 'month' ) . $suffix;
    if ( $v = $interval->d >= 1 ) return pluralize( $interval->d, 'day' ) . $suffix;
    if ( $v = $interval->h >= 1 ) return pluralize( $interval->h, 'hour' ) . $suffix;
    if ( $v = $interval->i >= 1 ) return pluralize( $interval->i, 'minute' ) . $suffix;
    return pluralize( $interval->s, 'second' ) . $suffix;
}

function displayGame($tweet, $isTweet = true) {
    $query;
    $featured = "";
    if ($isTweet) {
        $tweetFragments = explode("~", $tweet->text);
        $url = $tweet->entities->urls[0]->expanded_url;

        $urlQuery = parse_url($url, PHP_URL_QUERY);
        parse_str($urlQuery, $query);


       $twitterDate = new DateTime($tweet->created_at);

       $timeAgo = ago($twitterDate);

    } else {

        $query = $tweet;



        $featured = " featured";
    }

    $gamerTagLink = "";
    $platform = $query['platform'];

    echo '<div class="gameRequest' . $featured . '"">';

    echo '<div class="fourth">';

    if ((strpos($query['platform'],'XBOX') !== false)) {
        echo '<img src="../img/xboxLive.jpg">';
        $gamerTagLink = "https://account.xbox.com/Messages?gamerTag=" . htmlspecialchars($query['gamertag']);

    } else if ((strpos($query['platform'],'PS') !== false)) {
        echo '<img src="../img/psnLogo.png">';

        $gamerTagLink = "http://psnprofiles.com/" . htmlspecialchars($query['gamertag']);

    } else {
        echo '<img src="../img/steamLogo.png">';
        $gamerTagLink = "http://steamcommunity.com/id/" . htmlspecialchars($query['gamertag']);
    }


    echo  $query['platform'];
    echo '</div>';

    echo '<div class="fourth">';
    echo  '<a href="'. $gamerTagLink . '" target="_blank">' . $query['gamertag'] . '</a>';
    echo '</div>';

    echo '<div class="fourth">';
    echo  $query['region'];
    echo '</div>';

    echo '<div class="fourth">';
    echo  $query['level'];
    echo '</div>';



    echo '<div class="full">';
    echo  $query['event'];
    echo '</div>';




    echo '<div class="full">';
    echo $query['notes'];
    echo '</div>';


    echo '<div class="timeAgo">';
    echo $timeAgo;
    echo '</div>';

    echo '</div>'; //close gameRequst

//
//
//    echo '<li class="' . $featured . '"><p class="tweet">';
//    echo '<h3>' . $query['gamertag'] . '</h3> is looking for people to play ' . $query['event'] . ' with on ' . $platform . ".";
//    echo 'They are level ' . $query['level'] . " and located in " . $query['region'] . "</br>";
//    echo $query['notes'];
//    echo '</p></li>';

}





 ?>