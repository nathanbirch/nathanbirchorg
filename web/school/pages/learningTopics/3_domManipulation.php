<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>DOM Manipulation</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <link href="/css/school.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
 <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/schoolHeader.php';  ?>
    </div>
        <div class="padMe">
        <h1 class="titleCaptionBig">DOM Manipulation</h1>
        <div>
            <input type="button" name="click here to view DOM Manipulation" value="click here to view DOM Manipulation" onclick="runDomManipulation()"  class="button greenButton wbutton"/>
            <br><br>
            <ul id="domM">
                <li>Wendy</li>
                <li>Grady</li>
                <li>Gary</li>
                <li>Michelle</li>
                <li>Nathan</li>
                <li>Orn</li>
            </ul>
            <div id="domReceiver">
            </div>
        </div>
        <table class="portfolioTable desktopTable">
            <tr style="border:0px; text-align:center;">
                <td>Click Below to Download Understandings Portfolio</td>
                <td>Click Below to View Github Pages</td>
                <td>Click Below to View Sharing Video</td>
            </tr>
            <tr style="margin-bottom:20px; text-align:center;">
                <td class="portImgSpace"><a href="/docs/portfolios/DOMManipulation.docx"><img src="/docs/images/portfolio.png"></a></td>
                <td class="portImgSpace"><a href="https://github.com/nathanbirch/CIT-261-Winter-2016/blob/master/JSON%20intro%201%20-%20Create%20JSON%20with%20JavaScript" target="_blank"><img src="/docs/images/github.png" class="portImg"></a></td>
                <td class="portImgSpace"><a href="https://www.youtube.com/watch?v=oLVLHnMb8lk&feature=youtu.be" target="_blank"><img src="/docs/images/youtube.png" class="portImg"></a></td>
            </tr>
        </table>
        <div class="mobileTable">
            <a href="/docs/portfolios/DOMManipulation.docx"><img src="/docs/images/portfolio.png"></a><br>
            <a href="https://github.com/nathanbirch/CIT-261-Winter-2016/blob/master/JSON%20intro%201%20-%20Create%20JSON%20with%20JavaScript" target="_blank" style="margin-left:-20px"><img src="/docs/images/github.png" class="portImg" style="margin-left:-20px"></a><br>
            <a href="https://www.youtube.com/watch?v=oLVLHnMb8lk&feature=youtu.be" target="_blank"><img src="/docs/images/youtube.png" class="portImg"></a><br>
        </div>
    </div>
<?php include $_SERVER['DOCUMENT_ROOT']. '/modules/schoolFooter.php';  ?>
<script src="/scripts/learningTopics.js"></script>
</body>
</html>