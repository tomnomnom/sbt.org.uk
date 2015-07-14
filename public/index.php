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
                212 555 6342
            </div>
            <div class="company">
                <div class="logo">Pierce &amp; Pierce</div>
                <div class="tagline">Mergers and Aquisitions</div>
            </div>
            <div class="name">
                Patrick BATEMAN
            </div>
            <div class="title">
                Vice President
            </div>
            <div class="address">
                358 Exchange Place New York, N.Y.
                10099 fax 212 555 6390
                telex 10 4534
            </div>
        </div>

        <div class="card edit" id="input">
            <div class="phone">
                <input type="text" name="phone" value="212 555 6342">
            </div>
            <div class="company">
                <div class="logo"><input type="text" name="logo" value="Pierce &amp; Pierce"></div>
                <div class="tagline"><input type="text" name="tagline" value="Mergers and Aquisitions"></div>
            </div>
            <div class="name">
                <input type="text" name="name" value="Patrick BATEMAN">
            </div>
            <div class="title">
                <input type="text" name="title" value="Vice President">
            </div>
            <div class="address">
                <input type="text" name="address" value="358 Exchange Place New York, N.Y. 10099 fax 212 555 6390 telex 10 4534">
            </div>
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
