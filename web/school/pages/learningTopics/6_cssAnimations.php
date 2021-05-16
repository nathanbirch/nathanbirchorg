<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>CSS3 Animations</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/school.css" />
    <link rel="stylesheet" type="text/css" href="/css/animations.css" />
    <style>
        .mainLearningContent {
            width:90%; 
            height:500px; 
            border:1px solid black; 
            border-radius:5px; 
            padding:10px; 
            margin-left:auto; 
            margin-right:auto; 
            margin-bottom:10px; 
            margin-top:10px
        }
    </style>
</head>
<body>
 <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/schoolHeader.php';  ?>
        <div class="padMe">
        <h1 class="titleCaptionBig">CSS3 Animations</h1>
        <br><br><a href="testCSSAnimations.php">Click here to see Another example</a>
        <!--<div style="width:90%; height:500px; border:1px solid black; border-radius:5px; padding:10px; margin-left:auto; margin-right:auto; margin-bottom:10px; margin-top:10px">-->
        <!-- <a href="#animateTheShape">Click here to try to animate</a><br> -->
        <!-- <input name="" type="button" id="moveShape" /><br> -->
        <!-- <input name="" type="button" onclick="moveShape()" /><br> -->
        <div class="mainLearningContent">
            <div id="animateShapeID" class="animateTheShape"></div>
        </div>
        <table class="portfolioTable desktopTable">
            <tr style="border:0px; text-align:center;">
                <td>Click Below to Download Understandings Portfolio</td>
                <td>Click Below to View Github Pages</td>
                <td>Click Below to View Sharing Video</td>
            </tr>
            <tr style="margin-bottom:20px; text-align:center;">
                <td class="portImgSpace"><a href="/docs/portfolios/CSS3Animations.docx"><img src="/docs/images/portfolio.png"></a></td>
                <td class="portImgSpace"><a href="https://github.com/nathanbirch/CIT-261-Winter-2016/blob/master/CSS3%20Animations" target="_blank"><img src="/docs/images/github.png" class="portImg"></a></td>
                <td class="portImgSpace"><a href="https://https://www.youtube.com/watch?v=lqj9N4p1Tw0&feature=youtu.be" target="_blank"><img src="/docs/images/youtube.png" class="portImg"></a></td>
            </tr>
        </table>
        <br><br><br><br><br><a href="testCSSAnimations.php">Click here to see test example</a><br><br><br><br>
        <div class="mobileTable">
            <a href="/docs/portfolios/CSS3Animations.docx"><img src="/docs/images/portfolio.png"></a><br>
            <a href="https://github.com/nathanbirch/CIT-261-Winter-2016/blob/master/CSS3%20Animations" target="_blank" style="margin-left:-20px"><img src="/docs/images/github.png" class="portImg" style="margin-left:-20px"></a><br>
            <a href="https://www.youtube.com/watch?v=lqj9N4p1Tw0&feature=youtu.be" target="_blank"><img src="/docs/images/youtube.png" class="portImg"></a><br>
        </div>
    </div>
<?php include $_SERVER['DOCUMENT_ROOT']. '/modules/schoolFooter.php';  ?>
<script src="/scripts/learningTopics.js"></script>
</body>
</html>