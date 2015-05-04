<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
require_once('twitteroauth/twitteroauth.php');
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tweet = "#LFG #Counterstrike" . " ~ gamertag: " . $_POST['gamertag'] . " ~ " . $_POST['notes'] . "~" . $_SESSION['CURRENT_PAGE'] . "?region=" . urlencode($_POST['region']). "&platform=" . urlencode($_POST['platform']) . "&level=" . $_POST['level'] . "&event=" . urlencode($_POST['event'])  . "&gamertag=" . urlencode($_POST['gamertag']) . "&notes=" . urlencode($_POST['notes']) . "&time=" . urlencode(time());
    $postStatus = $connection->post('statuses/update',array('status' => $tweet));
    // print_r($postStatus);

    header('Location: ' . $_SESSION['CURRENT_PAGE']);
    die();


}





?>

