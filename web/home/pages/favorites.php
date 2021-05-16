<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="utf-8">
    <title>My Favorites</title>
    <meta name="description" contect="This page has all of my favorite websites">
    <meta name="author" content="Nathan Birch">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/home/css/primary.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <!-- favicon --><link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAAPv/AAAAAAADwAAAD/AAABw4AAA73AAAN+wAAHfuAAB//gAAeZ4AAHmeAAA//AAAP/wAAB/4AAAP8AAAA8AAAAAAAAD8PwAA8A8AAOAHAADAAwAAgAEAAIABAAAAAAAAAAAAAAAAAAAAAAAAgAEAAIABAADAAwAA4AcAAPAPAAD8PwAA" rel="icon" type="image/x-icon" />
</head>
<body>
 <header role="banner">
  <div>
  <?php include $_SERVER['DOCUMENT_ROOT']. '/home/modules/header.php';  ?>  
  </div>
 </header>
   <!-- BREADCRUMBS -->
  <div class="dumb container">
   <ol style="padding-top:13px" class="crumb">
       <a class="crumbP" href="/"><u>Home</u></a> >> <b class="crumbC">Favorites</b>
   </ol>
  </div>
  <!-- END BREADCRUMBS -->
<!-- Images on this page must be set to 172 X 143 Pixels -->
 <main class="container">
  <h1 style="text-align:center">My Favorite Websites</h1>
  <div class="row"> <!-- start of row class -->
   <div class="col-xs-12 col-sm-6 col-md-3"> <!-- start column class -->
    <a href="http://www.lds.org" class="fthumbnail">
         <img src="/home/images/icon (7).jpg" alt="Events">
    </a>
   </div> <!-- End column class -->

   <div class="col-xs-12 col-sm-6 col-md-3"> <!-- start column class -->
       <a href="http://www.ldsjournal.com" class="fthumbnail">
           <img src="/home/images/icon (8).jpg" alt="Events">
       </a>
   </div><!-- End column class -->
   <div class="col-xs-12 col-sm-6 col-md-3">
     <a href="http://www.linkedin.com" class="fthumbnail">
         <img src="/home/images/icon (2).jpg" alt="Events">
     </a>
   </div><!-- End column class -->
   <div class="col-xs-12 col-sm-6 col-md-3">
     <a href="http://www.byui.edu" class="fthumbnail">
         <img src="/home/images/icon.jpg" alt="Events">
     </a>
   </div><!-- End column class -->
  </div><!-- end of row class -->
  <div class="row">
   <div class="col-xs-12 col-sm-6 col-md-3"> <!-- start column class -->
     <a href="http://www.gmail.com" class="fthumbnail">
         <img src="/home/images/icon (5).jpg" alt="Events">
     </a>
   </div><!-- End column class -->
   <div class="col-xs-12 col-sm-6 col-md-3"> <!-- start column class -->
     <a href="http://www.outlook.com" class="fthumbnail">
         <img src="/home/images/icon (11).jpg" alt="Events">
     </a>
   </div><!-- End column class -->
   <div class="col-xs-12 col-sm-6 col-md-3"> <!-- start column class -->
     <a href="http://www.macu.com" class="fthumbnail">
         <img src="/home/images/icon (4).jpg" alt="Events">
     </a>
   </div><!-- End column class -->
   <div class="col-xs-12 col-sm-6 col-md-3"> <!-- start column class -->
     <a href="http://www.stcu.com" class="fthumbnail">
         <img src="/home/images/icon (9).jpg" alt="Events">
     </a>
   </div><!-- End column class -->
   <div class="col-xs-12 col-sm-6 col-md-3"> <!-- start column class -->
   </div><!-- End column class -->
  </div><!-- End of row class -->
  <div class="row">
   <div class="col-xs-12 col-sm-6 col-md-3"> <!-- start column class -->
     <a href="http://www.ebay.com" class="fthumbnail">
         <img src="/home/images/icon (10).jpg" alt="Events">
     </a>
   </div><!-- End column class -->
   <div class="col-xs-12 col-sm-6 col-md-3"> <!-- start column class -->
     <a href="http://www.facebook.com" class="fthumbnail">
         <img src="/home/images/icon (3).jpg" alt="Events">
     </a>
   </div><!-- End column class -->
   <div class="col-xs-12 col-sm-6 col-md-3"> <!-- start column class -->
     <a href="http://www.youtube.com" class="fthumbnail">
         <img src="/home/images/icon (6).jpg" alt="Events">
     </a>
   </div><!-- End column class -->
   <div class="col-xs-12 col-sm-6 col-md-3"> <!-- start column class -->
     <a href="https://www.meltdownchallenge.com/teamchallengedashboard/challengeinformation/1960" class="fthumbnail">
         <img src="/home/images/icon(13).jpg" alt="Events">
     </a>
   </div><!-- End column class -->   
  </div><!-- End of row class -->
<!--    <div class="col-xs-12 col-sm-6 col-md-3">  start column class 
     google search thingy? 
    <form method="get" action="http://www.google.com/search">
    <div style="height:138px" class="google">
      <table border="0" cellpadding="0">
       <tr><td style="padding-top:7px" align="center">
        <input type="text"   name="q" size="25"
         maxlength="255" value="" />
        <input type="submit" value="Google Search" /></td></tr>
       <tr><td align="center" style="font-size:75%"></td></tr>
      </table>
    </div>
    </form>
      end of google search thingy 
   </div> End column class -->
  
  
 </main>
 <footer role="contentinfo">
  <div>
  <?php include $_SERVER['DOCUMENT_ROOT']. '/home/modules/footer.php';  ?>
  </div>
 <!-- display on the website when this page was updated last -->
 </footer>
   <h6 style="float: right"><?php  echo 'Webpage last updated: '.date('j F, Y', getlastmod()); ?></h6>
 
</body>
</html>