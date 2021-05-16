<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="utf-8">
    <title>I love you Sarah!</title>
    <meta name="description" contect="EDIT:PURPOSE OF THIS WEBPAGE">
    <meta name="author" content="Nathan Birch">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/home/css/primary.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <!-- favicon --><link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAAPv/AAAAAAADwAAAD/AAABw4AAA73AAAN+wAAHfuAAB//gAAeZ4AAHmeAAA//AAAP/wAAB/4AAAP8AAAA8AAAAAAAAD8PwAA8A8AAOAHAADAAwAAgAEAAIABAAAAAAAAAAAAAAAAAAAAAAAAgAEAAIABAADAAwAA4AcAAPAPAAD8PwAA" rel="icon" type="image/x-icon" />
</head>
<body>
 <!-- Include the header.php file for the top navigation bar -->
 <header role="banner">
  <div>
  <?php include $_SERVER['DOCUMENT_ROOT']. '/home/modules/header.php';  ?>  
  </div>
 </header>
   <!-- BREADCRUMBS -->
  <div class="dumb container">
   <ol style="padding-top:13px" class="crumb">
       <a class="crumbP" href="/"><u>Home</u></a> >> <b class="crumbC">About Me</b>
   </ol>
  </div>
  <!-- END BREADCRUMBS -->
<div>
 <main class="container">
   <h1>Hi there Sarah, here is a quick note for you. :)</h1>
   <img src="https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0CAcQjRxqFQoTCLCsjKzElskCFU_VYwod_48HoQ&url=http%3A%2F%2Fwww.gifbooster.com%2Fpin%2F3422%2Fcartoon-of-happy-newly-married-couple_21&bvm=bv.107763241,d.cGc&psig=AFQjCNEc0IAu7dxSqgG7pBSNtONMVng9Ag&ust=1447817956346516" class="mobile abpic">
   <div class="pad">
       <p>Hi there Sarah, I just wanted to let you know that I love you like Crazy. I hope that you are having a wonderful evening and I hope that you know that I absolutely love sitting by your side. You are everything to me, and I am so stinking in love with you. Thank you so much for all that you do.  I love you with all of my heart!</p>
       <p>P.S. The picture is showing how I feel about you. :D</p>
   </div>
 </main>
</div>

 <footer role="contentinfo">
 <!-- Include the footer.php file for the top navigation bar -->
  <div>
  <?php include $_SERVER['DOCUMENT_ROOT']. '/home/modules/footer.php';  ?>
  </div>
 <!-- display on the website when this page was updated last -->
   <h6 style="float: right"><?php  echo 'Webpage last updated: '.date('j F, Y', getlastmod()); ?></h6>
 </footer>
</body>
</html>