<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="utf-8">
    <title>About Me</title>
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
   <h1>About Me</h1>
   <img src="../images/nathan1.jpg" class="mobile abpic">
   <div class="pad">
   <p>
       My name is Nathan Birch (just in case you didn't notice from the website name) and I love life. 
       I am 22 years old and currently attend Brigham Young University - Idaho. 
       My major is Computer Information Technology and I particularly love Web Development and Database Administration. 
       While I don't feel like the best student at times, I love to learn and be able to do new things. 
       I used to really struggle trying to figure out what I would do for a career one day because of how much I love change.
       This field has turned out to be perfect for me because of how much there always is to learn, do and create.
   </p>
   <p>
       I am from Spokane, WA and am the seventh of nine children.  
       I realized part way through high school that my best friends were my siblings and loved spending time with them. 
       My brothers and me would have a blast playing everything from basketball, to risk and from chess to super smash brothers.
       We have always been extremely competitive and we like to think that we are awesome...
       Then...there are my sisters, who have always tolerated our so-called awesomeness. :)
       I have been very fortunate to have them around, that's for sure. I love my sisters.
   </p>
   <p>
       I met my wife, Sarah after I got back from living in Brazil for two years.  
       It didn't take us long to realize that we were madly in love.
       We ended up getting married on February 1st, 2014. 
       It was the happiest day of my life.  
       Several pictures from that day are on this website on the homepage. :)
       After quite a bit of thought and prayer we decided to start trying to have children. 
       In December of 2014 we were blessed with a beautiful little girl: Hannah.
   </p>
   <p>
       Life has just been moving quicker and quicker and getting better and better. 
       I am grateful for a wonderful wife and daughter. 
       I am grateful for challenges that push us to be better. 
       I love learning and growing.  
       I am excited for life. :)
   </p>
   </div>
 </main>
</div>

 <footer role="contentinfo">
 <!-- Include the footer.php file for the top navigation bar -->
  <div>
  <?php include $_SERVER['DOCUMENT_ROOT']. '/home/modules/footer.php';  ?>
  </div>
 <!-- display on the website when this page was updated last -->
    
 </footer>
</body>
</html>