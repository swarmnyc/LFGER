<?php
/**
 * @file
 * User has successfully authenticated with Twitter. Access tokens saved to session and DB.
 */

/* Load required lib files. */
session_start();
require_once('../twitteroauth/twitteroauth.php');
require_once('config.php');

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tweet = "#LFG #" . HASHTAG . " #" . str_replace(" ", "",$_POST['platform']) . " ~ gamertag: " . $_POST['gamertag'] . " ~ " . $_POST['notes'] . "~" . CURRENT_PAGE . "?region=" . urlencode($_POST['region']). "&platform=" . urlencode($_POST['platform']) . "&level=" . $_POST['level'] . "&event=" . urlencode($_POST['event'])  . "&gamertag=" . urlencode($_POST['gamertag']) . "&notes=" . urlencode($_POST['notes']) . "&time=" . urlencode(time());
    $postStatus = $connection->post('statuses/update',array('status' => $tweet));
    // print_r($postStatus);
    $_POST = array();
    //header("REQUEST METHOD: GET");
    header("Location: " . CURRENT_PAGE . "?success=true");
    exit();

} else if ($_SERVER['REQUEST_METHOD'] == "GET") {

    if (count($_GET)>0) {
        $cameFromUrl=true;
        $game = $_GET;
    }

}

require_once('../functions.php');
/* Get user access tokens out of the session. */


$cameFromUrl = false;
$game = "";
/* Create a TwitterOauth object with consumer/user tokens. */

?>
<!-- THIS EXPERIMENT WAS BUILT BY SWARM - swarmnyc dot com -- use as you will, no guarantees, but do provide a link back. -->

<!DOCTYPE html>
<html lang="en" style="background: url(<?php echo GAMEIMGBIG; ?>) center center fixed no-repeat; background-size: cover;">
<head>

    <?php include_once('head.php') ?>
    <!-- 1. AUTOMATICALLY REFRESH PAGE EVERY X SECONDS -->
<!--    <meta http-equiv="refresh" content="300" />-->

    <!-- TWITTER PULL SCRIPT GOES HERE TO EDIT WHAT ACCOUNT TWEETS PULL FROM EDIT "pullme.php'-->
    <?php include_once('../pullme.php') ?>

    <style type="text/css">
        .stage {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            min-width: 900px;
            height: 40%;
            overflow: hidden;
        }
        .far-clouds {
            background: transparent url(img/far-clouds.png) 305px 102px repeat-x; z-index: -1;
        }
        .near-clouds {
            background: transparent url(img/near-clouds.png) 305px 162px repeat-x; z-index: -1;
        }
    </style>

    <script src="../js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="../js/jquery.spritely-0.6.js" type="text/javascript"></script>

    <script type="text/javascript">

        var open = false;

        $(document).ready(function() {


            $("#stickyAction")[0].style.right = ((window.innerWidth - ($(".container").offset().left + $(".container")[0].clientWidth))+40) + "px"
            $("form")[0].style.right = ((window.innerWidth - ($(".container").offset().left + $(".container")[0].clientWidth))+40) + "px"


            $("#regionSelector .regionChoices").click(function() {


                console.log($(this).html());
                console.log($(this));
                $("#regionSelector .regionChoices").val($(this).html());

                $("#regionSelector .selected").removeClass("selected");
                $(this).addClass("selected");
                var selected = $(this);
                $("#regionForm").val($(this).html());


            });


            $("#platformSelector .platformChoices").click(function() {

                $("#platformSelector .platformChoices").val($(this).html());

                $("#platformSelector .selected").removeClass("selected");
                $(this).addClass("selected");
                var selected = $(this);
                $("#platformForm").val($(this).html());


            });


            $("#stickyAction").click(function() {

                if (open) {
                    $("form").removeClass("open");
                    open = false;
                } else {
                    open = true;
                    $("form").addClass("open");
                }

            });

            $(window).resize(function() {
                $("#stickyAction")[0].style.right = ((window.innerWidth - ($(".container").offset().left + $(".container")[0].clientWidth))+40) + "px"
                $("form")[0].style.right = ((window.innerWidth - ($(".container").offset().left + $(".container")[0].clientWidth))+40) + "px"
            });



        });




    </script>

</head>

<body id="#">

<?php
    include_once("../globalNav.php");
?>


<div id="container">
    <div class="container">


        <div id="stickyAction">Find Group</div>

        <!-- START MAIN CTA AREA -->
        <div class="contain-main">
            <div class="logo" id="idxLogo">
                <img src="../img/logo.png" alt="LFGER" class="logo"/><img src="<?php echo GAMEIMG; ?>" alt="<?php echo GAMENAME; ?>" class="gameLogo"/>
            </div>
            <?php include_once('form.php') ?>
            <div class="wrapitup">
                <div class="spacer"></div>

                <!-- BEGIN TWEET FORM -->
                <div class="clearfix" id="thankPageTweetForm">





                </div>

                <!-- BEGIN TWEETS -->


                <div id="refresh">
                    <div id="tweets">
                        <ul>
                            <h2>Players Looking For Group</h2>

                            <div class="gameRequest bold">
                                <div class="fourth">Platform</div>
                                <div class="fourth">Gamertag</div>
                                <div class="fourth">Location</div>
                                <div class="fourth">Level</div>
                                <div class="fifth">Location/notes</div>
                            </div>


                            <?php if ($cameFromUrl) {

                                displayGame($game, false);
                            } ?>

                            <?php for ($i = 0; $i<count($statuses); $i++) {
                                displayGame($statuses[$i]);
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="far-clouds" class="far-clouds stage"></div>
        <div id="near-clouds" class="near-clouds stage"></div>

        <!-- START FOOTER -->
        <div class="footer">
            <div class="swarm">Made by <a class="whitey" href="http://swarmnyc.com" target="_blank">SWARM</a> | See other <a class="whitey" href="http://swarmnyc.com/experiments">Experiments</a> | Or grab the code at <a class="whitey" href="http://github.com/swarmnyc">GitHub</a> | <a class="whitey" href="tos.html" target="_blank">Terms of Service </a>
            </div>

        </div>

    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
    <script src="../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../assets/js/docs.min.js"></script>

    <!-- THIS SCRIPT INSERST ANY ADDITIONAL TEXT YOU MAY WANT IN YOUR TWEET, CHANGE WHAT YOU WANT IN THE STATUS FIELD WITHIN kickback.php-->
    <?php include_once('kickback.php') ?>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#regionSelector .regionChoices").click(function() {

                console.log($(this).html());
                console.log($(this));
                $("#regionSelector .regionChoices").val($(this).html());

                $("#regionSelector .selected").removeClass("selected");
                $(this).addClass("selected");
                var selected = $(this);
                $("#regionForm").val($(this).html());

            });

            $("#platformSelector .platformChoices").click(function() {

                $("#platformSelector .platformChoices").val($(this).html());

                $("#platformSelector .selected").removeClass("selected");
                $(this).addClass("selected");
                var selected = $(this);
                $("#platformForm").val($(this).html());


            });
        });
    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-43683040-8', 'auto');
        ga('send', 'pageview');

    </script>


</body>
</html>
