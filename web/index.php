<!DOCTYPE html>
<html ng-app style="background: none">
<head>
 <meta charset="utf-8">
 <title>Home | Nathan's Site</title>
 <meta name="description" contect="This is Nathan Birch's personal website. This
           website is used to develop personal skills and to help others find website
           templates that they like">
 <meta name="author" content="Nathan Birch">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <link href="/home/css/primary.css" rel="stylesheet" type="text/css" media="screen">
 <link href="/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
   <!-- favicon --><link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAAPv/AAAAAAADwAAAD/AAABw4AAA73AAAN+wAAHfuAAB//gAAeZ4AAHmeAAA//AAAP/wAAB/4AAAP8AAAA8AAAAAAAAD8PwAA8A8AAOAHAADAAwAAgAEAAIABAAAAAAAAAAAAAAAAAAAAAAAAgAEAAIABAADAAwAA4AcAAPAPAAD8PwAA" rel="icon" type="image/x-icon" />
</head>
<body>
 <!-- Include the header.php file for the top navigation bar -->
 <header role="banner" class="container">
  <?php include $_SERVER['DOCUMENT_ROOT']. '/home/modules/header.php';  ?>  
 </header>
 <main class="container">    
  <div class="container-top" style="padding-top: 10px; padding-bottom: 20px;">
   <div class="row">
   <div class="center-block">
    <div class="wrap1 mobile carouselBack">
     <div style="max-width:1000px;" class=" bigC">
      <div id="myCarousel" style="max-width:1000px; margin: 0 auto" class="mobile container-top carousel slide" data-ride="carousel">
       <!-- Indicators -->
       <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
       </ol>
       <!-- Wrapper for slides -->
       <div class="carousel-inner" style=" width:100%; padding-bottom:20px; margin: 0 auto;">
        <div class="item active">
         <img src="/home/images/homePage (3).jpg" class="picture" alt="1">
         <div class="carousel-caption">
          <h3>My wife, Sarah and me</h3>
         </div>
        </div>
       <div class="item ">
        <img src="/home/images/homePage (4).jpg" class="picture" alt="2">
        <div class="carousel-caption">
         <h3>Our beautiful daughter, Hannah</h3>
        </div>
       </div>
       <div class="item ">
        <img src="/home/images/homePage (2).jpg" class="picture" alt="3">
        <div class="carousel-caption">
         <h3>The Sisters</h3>
        </div>
       </div>
       <div class="item ">
        <img src="/home/images/homePage.jpg" class="picture" alt="4">
       <div class="carousel-caption">
        <h3>The Brothers</h3>
       </div>
      </div>
     </div>
     <!-- Controls -->
     <a class="control left carousel-control" href="#myCarousel" data-slide="prev" style="font-size: 40px;">‹</a>
     <a class="control right carousel-control" href="#myCarousel" data-slide="next" style="font-size: 40px;">›</a>
    </div>
   </div>
  </div> <!-- end carousel back -->
  <!-- end of carousel -->
 </div> <!-- end of center-block --> 
 <!-- start of the main body -->
 <div class="row">
 <!-- start side nav -->
  <div class="col-xs-12 col-sm-6 col-md-3">
   <ul style="padding-top:25px" class="sidebar-nav" id="sidebar">     
    <li class="sidebar-title"><h4>My Websites</h4></li>
    <li><a href="http://www.bbguide.nathanbirch.org"><h4>BB Guide</h4></a></li>
    <li><a href="birchbox"><h4>BirchBox</h4></a></li>
    <li><a href="http://www.gospel.nathanbirch.org"><h4>Gospel</h4></a></li>
    <li><a href="http://www.school.nathanbirch.org"><h4>School Development</h4></a></li>
    <li><a href="finances"><h4>Finances</h4></a></li>
    <li><a href="http://www.sarah.nathanbirch.org"><h4>Sarah's Blog</h4></a></li>
    <li><a href="games"><h4>Games</h4></a></li>
    <li><a style="border-radius:0px 0px 10px 10px;" href="test"><h4>Testing Center</h4></a></li>
   </ul>
  </div> <!-- end of column class -->
  <!-- end of side nav --> 
  <div class="col-xs-12 col-sm-6 col-md-3">
   <a href="https://www.linkedin.com/in/nathan-birch-48324290" target="_blank"><h3 class="" style="padding-left:2.7em;">My Profile</h3></a>
   <a href="https://www.linkedin.com/in/nathan-birch-48324290" target="_blank" style="max-width:250px; background-color:#000" class="thumbnail">
    <img src="/home/images/linkedin.jpg" alt="Events">
   </a>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3">
      <a href="/home/files/Nathan's Resume.pdf" target="_blank"><h3 class="" style="padding-left:2.7em;">My Resume</h3></a>
      <a href="/home/files/Nathan's Resume.pdf" target="_blank" style="max-width:250px; background-color:#000" class="thumbnail">
    <img src="/home/images/resume.jpg" alt="Events">
   </a>
   </div>
   <div class="col-xs-12 col-sm-6 col-md-3">
    <a href="/home/pages/aboutMe.php"><h3 class="" style="padding-left:3.1em;">About Me</h3></a>
    <a href="/home/pages/aboutMe.php" style="max-width:250px; background-color:#000" class="thumbnail">
        <img src="/home/images/wedding2.jpg" alt="Events">
        
    </a>
   </div>
  </div>  <!-- end of container-block class -->
 </div>  <!-- end of row class -->
</div>   <!-- end of container class -->
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