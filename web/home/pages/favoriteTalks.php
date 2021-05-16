<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="utf-8">
    <title>Favorite Talks</title>
    <meta name="description" contect="EDIT:PURPOSE OF THIS WEBPAGE">
    <meta name="author" content="Nathan Birch">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/home/css/primary.css" rel="stylesheet" type="text/css" media="screen">
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
       <a class="crumbP" href="/"><u>Home</u></a> >> <b class="crumbC">Favorite Talks</b>
   </ol>
  </div>
  <!-- END BREADCRUMBS -->
 <main class="container">
   <h1>My Favorite Talks</h1>
   <a href="https://www.lds.org/general-conference/2014/10/lord-is-it-i?lang=eng">
       <h2>Lord, Is It I?</h2>
   </a>
       <p class="fTalk">By President Uchtdorf</p>
   <a href="https://www.lds.org/general-conference/2014/10/approaching-the-throne-of-god-with-confidence?lang=eng">
       <h2>Approaching the Throne of God with Confidence</h2>
   </a>
       <p class="fTalk">By Elder Jörg Klebingat</p>
   <a href="https://www.lds.org/general-conference/2014/10/parents-the-prime-gospel-teachers-of-their-children?lang=eng">
       <h2>Parents: The Prime Gospel Teachers of Their Children</h2>
   </a>
       <p class="fTalk">By Tad R. Callister</p>  
   <a href="https://www.lds.org/general-conference/2014/04/let-your-faith-show?lang=eng">
       <h2>Let Your Faith Show</h2>
   </a>
       <p class="fTalk">Elder Russel M. Nelson</p>     
   <a href="https://www.lds.org/general-conference/2014/04/be-strong-and-of-a-good-courage?lang=eng">
       <h2>Be Strong and of a Good Courage</h2>
   </a>
       <p class="fTalk">President Thomas S. Monson</p>          
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