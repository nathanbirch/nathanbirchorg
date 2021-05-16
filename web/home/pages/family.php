<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="utf-8">
    <title>My Family</title>
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
       <a class="crumbP" href="/"><u>Home</u></a> >> <b class="crumbC">Family</b>
   </ol>
  </div>
  <!-- END BREADCRUMBS -->
 <main class="container">
 <h1>My Family</h1>
  <div class="row">
   <div class="col-xs-12 col-sm-6 col-md-4">
       <a href="/home/pages/familyPictures.php"><img class="familyimg" src="/home/images/familyPicture4.jpg"></a>
   </div> <!-- end column class -->
   <div class="col-xs-12 col-sm-6 col-md-4">
    <p style="font-size:20px">
       This is a picture of my brothers, sisters and parents from a few years ago.  Click on this picture to see more of my immediate family.
    </p>
   </div> <!-- end column class -->
  </div> <!-- end row class -->
  <div class="something">
  </div>
  <div class="row">
   <div style="float:right" class="col-xs-12 col-sm-6 col-md-4">
       <a href="/home/pages/weddingPictures.php"><img class="familyimg" src="/home/images/NathanSarahWedding - 097.jpg"></a>
   </div> <!-- end column class -->
   <div style="float:right" class="col-xs-12 col-sm-6 col-md-4">
    <p style="font-size:20px">
       This picture was taken on February 1st, 2014 on the day Sarah and I were married. Click on this picture to see more of our wedding day!    
    </p>
   </div> <!-- end column class -->
  </div> <!-- end row class -->
  <div class="something">
  </div>
  <div class="row">
   <div class="col-xs-12 col-sm-6 col-md-4">
       <a href="/home/pages/hannahPictures.php"><img class="familyimg" src="/home/images/hannah1.jpg"></a>
   </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
     <p style="font-size:20px">
      This is a picture of our beautiful and wonderful daughter, Hannah. Click on her picture to see more. 
     </p>
    </div> <!-- end column class -->
  </div> <!-- end row class -->
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