<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="utf-8">
    <title>SQL Server</title>
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
       <a class="crumbP" href="/home/pages/db.php"><u>DB Administration</u></a> >> <b class="crumbC">SQL Server</b>
   </ol>
  </div>
  <!-- END BREADCRUMBS -->
 <main class="container">
   <h1>SQL Server</h1>
   <h3>On this page you can find labs from CIT 499 taught by Michael McLaughlin at 
   Brigham Young University. This course was a curriculum development course.</h3>
   <h3>All assignments are Copyright © 2014 Michael McLaughlin All rights reserved.</h3>
   <br>
    <div style="float:left">
     <h4>SQL Server Labs</h4> 
     <a class="sql" href="/files/sqlServerLabs/create_sqlserver.sql">Create Script</a><br>
     <a class="sql" href="/files/sqlServerLabs/seed_sqlserver.sql">Seed Script</a><br>
     <a class="sql" href="/files/sqlServerLabs/lab5.sql">Lab5</a><br>
     <a class="sql" href="/files/sqlServerLabs/lab6.sql">Lab6</a><br>
     <a class="sql" href="/files/sqlServerLabs/lab7.sql">Lab7</a><br>
     <a class="sql" href="/files/sqlServerLabs/lab8.sql">Lab8</a>
    </div>
 </main>
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