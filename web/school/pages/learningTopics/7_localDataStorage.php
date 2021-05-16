<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Local Data Storage</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <link href="/css/school.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
 <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/schoolHeader.php';  ?>
    </div>
        <div class="padMe">
        <h1 class="titleCaptionBig">Local Data Storage</h1>
        <br>
        <div>
            <p><b>This first example is using local storage with JSON Parse to store our data.</b></p>
            <button class="button greenButton wbutton" type="button" onclick="daughter(1)">Meet my Daughter</button></br></br>

            <div id="daughter1"></div></br>

            <p><b>This second example is another way of storing data locally.</b></p>

            <button class="button greenButton wbutton" type="button" onclick="daughter(2)">Meet my Daughter</button></br></br>

            <div id="daughter2"></div>
            <br><br>
       </div>

        <table class="portfolioTable desktopTable">
            <tr style="border:0px; text-align:center;">
                <td>Click Below to Download Understandings Portfolio</td>
                <td>Click Below to View Github Pages</td>
                <td>Click Below to View Sharing Video</td>
            </tr>
            <tr style="margin-bottom:20px; text-align:center;">
                <td class="portImgSpace"><a href="/docs/portfolios/LocalDataStorage.docx"><img src="/docs/images/portfolio.png"></a></td>
                <td class="portImgSpace"><a href="https://github.com/nathanbirch/CIT-261-Winter-2016/blob/master/JSON%20intro%201%20-%20Create%20JSON%20with%20JavaScript" target="_blank"><img src="/docs/images/github.png" class="portImg"></a></td>
                <td class="portImgSpace"><a href="https://www.youtube.com/watch?v=R-w7sxBaOLY&feature=youtu.be" target="_blank"><img src="/docs/images/youtube.png" class="portImg"></a></td>
            </tr>
        </table>
        <div class="mobileTable">
            <a href="/docs/portfolios/LocalDataStorage.docx"><img src="/docs/images/portfolio.png"></a><br>
            <a href="https://github.com/nathanbirch/CIT-261-Winter-2016/blob/master/JSON%20intro%201%20-%20Create%20JSON%20with%20JavaScript" target="_blank" style="margin-left:-20px"><img src="/docs/images/github.png" class="portImg" style="margin-left:-20px"></a><br>
            <a href="https://www.youtube.com/watch?v=R-w7sxBaOLY&feature=youtu.be" target="_blank"><img src="/docs/images/youtube.png" class="portImg"></a><br>
        </div>
    </div>
<?php include $_SERVER['DOCUMENT_ROOT']. '/modules/schoolFooter.php';  ?>
<script src="/scripts/learningTopics.js"></script>
</body>
</html>