<!DOCTYPE html>
<html ng-app="sarahApp" ng-controller="sarahController">
    <head>
        <meta charset="utf-8">
        <title>Sarah's Website</title>
        <meta name="author" content="Nathan Birch">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAAPv/AAAAAAADwAAAD/AAABw4AAA73AAAN+wAAHfuAAB//gAAeZ4AAHmeAAA//AAAP/wAAB/4AAAP8AAAA8AAAAAAAAD8PwAA8A8AAOAHAADAAwAAgAEAAIABAAAAAAAAAAAAAAAAAAAAAAAAgAEAAIABAADAAwAA4AcAAPAPAAD8PwAA" rel="icon" type="image/x-icon" />
        <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link href="/css/sarah.css" rel="stylesheet" type="text/css" media="screen">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
        <script src="/scripts/sarahController.js"></script>
    </head>
    <body ng-init="myTimer()"> <!--ng-init is the same as onload="myTimer()"-->
        <header role="banner">
            <header role="banner"><div><?php include("/home2/nathaoe4/public_html/sarah/modules/header2.php"); ?></div></header>
        </header>
        <br />
        <div class="row">
            <br class="mobile-break">
            <div style="margin-left:5%; width:90%">
                <main class="backDropGradient" style="min-height:500px;">
                    <div  class="">
                        <form action="/register/index.php" method="POST">
                         <!-- <a href="" ng-click="openSignUpModal()"><button type="button" class="btn btn-info wbutton logBut" id="flyingLoginButton">Login</button></a> -->
                            <a href="/pages/register/"><input type='hidden' name='action' value='login'><button type="button" class="btn btn-info wbutton logBut" id="flyingLoginButton">Login</button></a>
                            <a href="/pages/register/"><input type='hidden' name='action' value='sign_up'><button type="button" class="btn btn-info wbutton regBut" id="flyingRegisterButton">Sign Up</button></a>
                            <a href="/pages/aboutMeSarah.php"><button type="button" class="btn btn-info wbutton aboutBut" id="flyingAboutButton">About Me</button></a>
                        </form>
                    </div>
                </main>
            </div>
            <br class="mobile-break">
        </div>
        <footer role="contentinfo">
            <footer role="contentinfo"><div><?php include("/home2/nathaoe4/public_html/sarah/modules/footer2.php"); ?></div></footer>
        </footer>
    </body>
</html>