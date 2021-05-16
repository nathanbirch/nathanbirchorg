<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="utf-8">
    <title>PL/SQL</title>
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
       <a class="crumbP" href="/home/pages/db.php"><u>DB Administration</u></a> >> <b class="crumbC">PL/SQL</b>
   </ol>
  </div>
  <!-- END BREADCRUMBS -->
 <main class="container">
   <h1>PL/SQL</h1>
   <h3>On this page you can find my labs from CIT 225 & 325 taught by Michael McLaughlin at 
   Brigham Young University.</h3>
   <h3>All labs are Copyright © 2014 Michael McLaughlin All rights reserved.</h3>
   <br>
    <div style="float:left">
     <h4>CIT 325 Labs</h4> 
     <a class="sql" href="/files/PLSQLlabs/lab1.sql">Lab1</a><br>
     <a class="sql" href="/files/PLSQLlabs/lab2.sql">Lab2</a><br>
     <a class="sql" href="/files/PLSQLlabs/lab3.sql">Lab3</a><br>
     <a class="sql" href="/files/PLSQLlabs/lab4.sql">Lab4</a><br>
     <a class="sql" href="/files/PLSQLlabs/lab5.sql">Lab5</a><br>
     <a class="sql" href="/files/PLSQLlabs/lab6.sql">Lab6</a><br>
     <a class="sql" href="/files/PLSQLlabs/lab7.sql">Lab7</a><br>
     <a class="sql" href="/files/PLSQLlabs/lab8.sql">Lab8</a><br>
     <a class="sql" href="/files/PLSQLlabs/lab9.sql">Lab9</a><br>
     <a class="sql" href="/files/PLSQLlabs/lab10.sql">Lab10</a><br>
     <a class="sql" href="/files/PLSQLlabs/lab11.sql">Lab11</a><br>
     <a class="sql" href="/files/PLSQLlabs/lab12.sql">Lab12</a>
    </div>
   <div style="padding-left:150px">
    <h4>CIT 225 Labs</h4>
     <a class="sql" href="/files/PLSQLlabs/oracle_lab5.sql">Lab5</a><br>
     <a class="sql" href="/files/PLSQLlabs/oracle_lab6.sql">Lab6</a><br>
     <a class="sql" href="/files/PLSQLlabs/oracle_lab7.sql">Lab7</a><br>
     <a class="sql" href="/files/PLSQLlabs/oracle_lab8.sql">Lab8</a><br>
     <a class="sql" href="/files/PLSQLlabs/oracle_lab9.sql">Lab9</a><br>
     <a class="sql" href="/files/PLSQLlabs/oracle_lab10.sql">Lab10</a><br>
     <a class="sql" href="/files/PLSQLlabs/oracle_lab11.sql">Lab11</a><br>
     <a class="sql" href="/files/PLSQLlabs/oracle_lab12.sql">Lab12</a>
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