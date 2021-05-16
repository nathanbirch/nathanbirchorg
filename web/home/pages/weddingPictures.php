<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="utf-8">
    <title>Wedding Pictures</title>
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
       <a class="crumbP" href="/"><u>Home</u></a> >>
       <a class="crumbP" href="/home/pages/family.php"><u>Family</u></a> >> <b class="crumbC">Wedding</b>
   </ol>
  </div>
  <!-- END BREADCRUMBS -->
 <main class="container">
   <h1>More Wedding Pictures</h1>
   <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-3">
     <img class="photo1" src="/home/images/wedding4.jpg">
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
     <img class="photo1" src="/home/images/wedding7.jpg">
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
     <img class="photo1" src="/home/images/wedding10.jpg">
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
     <img class="photo1" src="/home/images/wedding6.jpg">
    </div>
   </div>
   <br><br>
   <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-3">
     <img class="photo1" src="/home/images/wedding3.jpg">
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
     <img class="photo1" src="/home/images/wedding8.jpg">
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
     <img class="photo1" src="/home/images/wedding9.jpg">
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
     <img class="photo1" src="/home/images/wedding5.jpg">
    </div>   
   </div>
 </main>
 <footer role="contentinfo">
 <!-- Include the footer.php file for the top navigation bar -->
  <div>
  <?php include $_SERVER['DOCUMENT_ROOT']. '/home/modules/footer.php';  ?>
  </div>
 <!-- display on the website when this page was updated last -->
    
 </footer>
</body>
</html>