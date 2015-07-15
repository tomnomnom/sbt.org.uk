<?php
// I'm into, uh, well, murders and executions, mostly.
$phone   = maybe($_GET, "phone",   "212 555 6342");
$logo    = maybe($_GET, "logo",    "Pierce & Pierce");
$tagline = maybe($_GET, "tagline", "Mergers and Aquisitions");
$name    = maybe($_GET, "name",    "Patrick BATEMAN");
$title   = maybe($_GET, "title",   "Vice President");
$address = maybe($_GET, "address", "358 Exchange Place New York, N.Y. 10099 fax 212 555 6390 telex 10 4534");

function maybe($get, $key, $default){
    if (isset($get[$key])){
        return $get[$key];
    }
    return $default;
}

function e($str){
    return htmlentities($str, ENT_QUOTES, "UTF-8");
}
?>
<!doctype html>
<html lang="en">
    <head>
        <title>sbtUK</title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <meta name="theme-color" content="#119C11">

        <link rel="stylesheet" type="text/css" href="main.css"/>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=EB+Garamond">
    </head>

    <body>
        <div class="card" id="output">
            <div class="phone">
                <?=e($phone);?>
            </div>
            <div class="company">
                <div class="logo"><?=e($logo);?></div>
                <div class="tagline"><?=e($tagline);?></div>
            </div>
            <div class="name"><?=e($name);?></div>
            <div class="title"><?=e($title);?></div>
            <div class="address"><?=e($address);?></div>
        </div>

        <div class="card edit" id="input">
            <div class="phone">
                <input type="text" name="phone" value="<?=e($phone);?>">
            </div>
            <div class="company">
                <div class="logo"><input type="text" name="logo" value="<?=e($logo);?>"></div>
                <div class="tagline"><input type="text" name="tagline" value="<?=e($tagline);?>"></div>
            </div>
            <div class="name">
                <input type="text" name="name" value="<?=e($name);?>">
            </div>
            <div class="title">
                <input type="text" name="title" value="<?=e($title);?>">
            </div>
            <div class="address">
                <input type="text" name="address" value="<?=e($address);?>">
            </div>
            <input type="submit" value="Save">
        </div>

        <div class="footer">
            <a href="https://twitter.com/TomNomNom">@TomNomNom</a>
        </div>
    </body>
    <!-- FEED ME A STRAY CAT -->
    <script>
        window.onload = function(){
            var out = document.getElementById("output");
            var memo = {};
            document.getElementById("input").onkeyup = function(e) {
                if (memo[e.target.name] == undefined){
                    memo[e.target.name] = out.getElementsByClassName(e.target.name)[0];
                }
                memo[e.target.name].innerHTML = e.target.value || "&nbsp;";
            };
        };
    </script>
</html>
