<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>CSS3 Transformations</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <link href="/css/school.css" rel="stylesheet" type="text/css" media="screen">
</head>
<script src="/scripts/learningTopics.js"></script>
<body onload="myTimer()">
 <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/schoolHeader.php';  ?>
    </div>
        <div class="padMe">
        <h1 class="titleCaptionBig">Manipulating CSS Classes with JavaScript</h1>
        <table class='portfolioTable' style='margin-bottom:150px'>
            <tr style="border:0px; text-align:center;">
                <td><div class="cssJSClassChild" onmouseover='addCSSClass2(this)' onmouseout='removeCSSClass2(this)'>Hover Over Me</div></td>
                <td><div class="cssJSClassChild" onClick='addCSSClassClick(this)'>Click Me</div></td>
                <td><div class="cssJSClassChild" id="thirdBox">Wait For Me<br><span id="jsTimer"></span></div></td>
            </tr>
        </table>
        <table class="portfolioTable desktopTable">
            <tr style="border:0px; text-align:center;">
                <td>Click Below to Download Understandings Portfolio</td>
                <td>Click Below to View Github Pages</td>
                <td>Click Below to View Sharing Video</td>
            </tr>
            <tr style="margin-bottom:20px; text-align:center;">
                <td class="portImgSpace"><a href="/docs/portfolios/JSchangeCSSClasses.docx"><img src="/docs/images/portfolio.png"></a></td>
                <td class="portImgSpace"><a href="https://github.com/nathanbirch/CIT-261-Winter-2016/blob/master/JS%20Change%20CSS%20Class" target="_blank"><img src="/docs/images/github.png" class="portImg"></a></td>
                <td class="portImgSpace"><a href="https://www.youtube.com/watch?v=Y786dCQHgWA&feature=youtu.be" target="_blank"><img src="/docs/images/youtube.png" class="portImg"></a></td>
            </tr>
        </table>
        <div class="mobileTable">
            <a href="/docs/portfolios/JSchangeCSSClasses.docx"><img src="/docs/images/portfolio.png"></a><br>
            <a href="https://github.com/nathanbirch/CIT-261-Winter-2016/blob/master/JS%20Change%20CSS%20Class" target="_blank" style="margin-left:-20px"><img src="/docs/images/github.png" class="portImg" style="margin-left:-20px"></a><br>
            <a href="https://www.youtube.com/watch?v=Y786dCQHgWA&feature=youtu.be" target="_blank"><img src="/docs/images/youtube.png" class="portImg"></a><br>
        </div>
    </div>
<?php include $_SERVER['DOCUMENT_ROOT']. '/modules/schoolFooter.php';  ?>
</body>
</html>