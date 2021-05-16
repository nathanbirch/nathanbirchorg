<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>AJAX</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <link href="/css/school.css" rel="stylesheet" type="text/css" media="screen">

        <script>
            document.getElementById('visibilityButton5').style.display = 'none';

            function loadDoc() {
               document.getElementById('visibilityButton').style.display = 'none'; 
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                  document.getElementById("demo").innerHTML = xhttp.responseText;
                }
              };
              xhttp.open("GET", "ajax.txt", true);
              xhttp.send();
            }
            function loadDoc2() {
                document.getElementById('visibilityButton2').style.display = 'none';
                document.getElementById('visibilityButton3').style.display = 'none';
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                  document.getElementById("demo2").innerHTML = xhttp.responseText;
                }
              };
              xhttp.open("GET", "ajax2.txt", true);
              xhttp.send();
             }  
            function loadDoc3() {
                document.getElementById('visibilityButton2').style.display = 'none';
                document.getElementById('visibilityButton3').style.display = 'none';
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                  document.getElementById("demo6").innerHTML = xhttp.responseText;
                }
              };
              xhttp.open("GET", "ajax3.txt", true);
              xhttp.send();
             }               
            function storeLocalData() {
                document.getElementById('demo2').style.display = 'none';
                var fruit = new Array();
                fruit[0] = "Strawberry";
                fruit[1] = "Apple";
                fruit[2] = "Orange";
                fruit[3] = "Pear";
                fruit[4] = "Peach";

                localStorage["fruit"] = JSON.stringify(fruit);

                var FRUIT = JSON.parse(localStorage["fruit"]);
                  document.getElementById("demo4").innerHTML = "Below is an array that was just stored in your local memory.";
                  document.getElementById("demo5").innerHTML = FRUIT;

                loadDoc3();

            } 
            function clearCacheReload() {
                location.reload(true);
            }       
        </script>
</head>
<body>
 <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/schoolHeader.php';  ?>
    </div>
        <div class="padMe">
        <h1 class="titleCaptionBig">AJAX</h1>


        <div id="demo"><h2>Let AJAX change this text</h2></div>

        <button type="button" id="visibilityButton" onclick="loadDoc()">Change Content</button>



        <div id="demo2"><br><br></div>
        <div id="demo4" style="margin-top:-50px"><br><br></div>
        <h3 id="demo5"><br><br></h3><br><br>
        <div id="demo6"><br><br></div>




<br><br>
        <table class="portfolioTable desktopTable">
            <tr style="border:0px; text-align:center;">
                <td>Click Below to Download Understandings Portfolio</td>
                <td>Click Below to View Github Pages</td>
                <td>Click Below to View Sharing Video</td>
            </tr>
            <tr style="margin-bottom:20px; text-align:center;">
                <td class="portImgSpace"><a href="/docs/portfolios/ajax.docx"><img src="/docs/images/portfolio.png"></a></td>
                <td class="portImgSpace"><a href="https://github.com/nathanbirch/CIT-261-Winter-2016/blob/master/ajax1.php" target="_blank"><img src="/docs/images/github.png" class="portImg"></a></td>
                <td class="portImgSpace"><a href="https://www.youtube.com/watch?v=8DSNTTsSfOc&feature=youtu.be" target="_blank"><img src="/docs/images/youtube.png" class="portImg"></a></td>
            </tr>
        </table>
        <div class="mobileTable">
            <a href="/docs/portfolios/ajax.docx"><img src="/docs/images/portfolio.png"></a><br>
            <a href="https://github.com/nathanbirch/CIT-261-Winter-2016/blob/master/ajax1.php" target="_blank" style="margin-left:-20px"><img src="/docs/images/github.png" class="portImg" style="margin-left:-20px"></a><br>
            <a href="https://www.youtube.com/watch?v=8DSNTTsSfOc&feature=youtu.be" target="_blank"><img src="/docs/images/youtube.png" class="portImg"></a><br>
        </div>
    </div>
<?php include $_SERVER['DOCUMENT_ROOT']. '/modules/schoolFooter.php';  ?>
</body>
</html>