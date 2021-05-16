<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>JSON Serialization</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <link href="/css/school.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
 <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/schoolHeader.php';  ?>
    <div class="padMe">
        <h1 class="titleCaptionBig">JSON Serialization</h1>
        <div class="">
            <div class="">
                <button type="button" onclick="loadText()" class="button greenButton wbutton"> Display JS Objects Result </button><br><br>
                <p id="printArray"></p>
            </div>
            <div class="">
            <div id="printMyButton"></div>
                <!-- <button type="button" onclick="loadText2()" class="button greenButton wbutton"> Display JSON Serialization Result</button><br><br> -->
                <div id="printArray2" ></div><br><br>
            </div>
        </div>
        <table class="portfolioTable desktopTable">
            <tr style="border:0px; text-align:center;">
                <td>Click Below to Download Understandings Portfolio</td>
                <td>Click Below to View Github Pages</td>
                <td>Click Below to View Sharing Video</td>
            </tr>
            <tr style="margin-bottom:20px; text-align:center;">
                <td class="portImgSpace"><a href="/docs/portfolios/JSONSerialization.docx"><img src="/docs/images/portfolio.png"></a></td>
                <td class="portImgSpace"><a href="https://github.com/nathanbirch/CIT-261-Winter-2016/blob/master/JSON%20intro%201%20-%20Create%20JSON%20with%20JavaScript" target="_blank"><img src="/docs/images/github.png" class="portImg"></a></td>
                <td class="portImgSpace"><a href="https://www.youtube.com/watch?v=aK2EOweUIpc&feature=youtu.be" target="_blank"><img src="/docs/images/youtube.png" class="portImg"></a></td>
            </tr>
        </table>
        <div class="mobileTable">
            <a href="/docs/portfolios/JSONSerialization.docx"><img src="/docs/images/portfolio.png"></a><br>
            <a href="https://github.com/nathanbirch/CIT-261-Winter-2016/blob/master/JSON%20intro%201%20-%20Create%20JSON%20with%20JavaScript" target="_blank" style="margin-left:-20px"><img src="/docs/images/github.png" class="portImg" style="margin-left:-20px"></a><br>
            <a href="https://www.youtube.com/watch?v=aK2EOweUIpc&feature=youtu.be" target="_blank"><img src="/docs/images/youtube.png" class="portImg"></a><br>
        </div>
    </div>
<?php include $_SERVER['DOCUMENT_ROOT']. '/modules/schoolFooter.php';  ?>
<script src="/scripts/learningTopics.js"></script>
</body>
</html>