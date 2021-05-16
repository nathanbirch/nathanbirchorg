<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="utf-8">
    <title>My Talks</title>
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
       <a class="crumbP" href="/"><u>Home</u></a> >> <b class="crumbC">My Talks</b>
   </ol>
  </div>
  <!-- END BREADCRUMBS -->
 <main class="container">
   <h1>My Talks</h1>
   <h4>
       In my church, the LDS church, just about all of the members give talks.  
       Each Sunday there will be several members of the congregation that will speak.
       Here are several of the talks that I have prepared and given over the years.
   </h4>
   <br><br>
   <table class="talksTable table table-bordered">
     <tr>
       <td>Date Given</td>
       <td>Talk</td>
     </tr>
     <tr>
       <td>2016 - July 24th</td>
       <td><a href="/home/talks/pioneers.php">Talk: Pioneers</a></td>
     </tr>
     <tr>
       <td>2016 - May 29th</td>
       <td><a href="/home/talks/HappinessEndure.html">Talk: Happiness and Enduring to the End</a></td>
     </tr>
     <tr>
       <td>2015 - October 18th</td>
       <td><a href="/home/talks/sarahTheProclamation.php">Sarah's talk on The Family: A Proclamation to the World.</a></td>
     </tr>
     <tr>
       <td>2015 - October 18th</td>
       <td><a href="/home/talks/nathanTheProclamation.php">Nathan's talk on the Proclamation, Prophets, and Apostles.</a></td>
     </tr>
     <tr>
       <td>2014 - June 22nd</td>
       <td><a href="/home/talks/TestimonyAndChange.php">Talk: Testimony and Change</a></td>
     </tr>
     <tr>
       <td>2014 - May 11th</td>
       <td><a href="/home/talks/RoleOfWomen.php">Talk: The Role of Women in Heavenly Father's Plan</a></td>
     </tr>
     <tr>
       <td>2010 - September</td>
       <td><a href="/home/talks/Revelation.php">Talk: Revelation</a></td>
     </tr>
     <tr>
       <td>2010 - September</td>
       <td><a href="/home/talks/Love.php">Talk: Love</a></td>
     </tr>
     <tr>
       <td>2010 - August</td>
       <td><a href="/home/talks/MortalLife.php">Talk: Mortal Life</a></td>
     </tr>
     <tr>
       <td>2010 - August</td>
       <td><a href="/home/talks/Adversity.php">Talk: Adversity</a></td>
     </tr>
     <tr>
       <td>2010 - August</td>
       <td><a href="/home/talks/Atonement.php">Talk: Atonement</a></td>
     </tr>

   </table>
<!-- 
   <p>The following two talks were given on the same day by Sarah and me (respectively).</p>
   <a href="/home/talks/sarahTheProclamation.php">Sarah's talk on The Family: A Proclamation to the World.</a>
   <br><br>
   <a href="/home/talks/nathanTheProclamation.php">Nathan's talk on the Proclamation, Prophets, and Apostles.</a>
   <br><br>
   <a href="/home/talks/TestimonyAndChange.php">Talk: Testimony and Change</a>
   <br><br>
   <a href="/home/talks/RoleOfWomen.php">Talk: The Role of Women in Heavenly Father's Plan</a>
   <br><br>
   <a href="/home/talks/Revelation.php">Talk: Revelation</a>
   <br><br>
   <a href="/home/talks/MortalLife.php">Talk: Mortal Life</a>
   <br><br>
   <a href="/home/talks/Love.php">Talk: Love</a>
   <br><br>
   <a href="/home/talks/Adversity.php">Talk: Adversity</a>
   <br><br>
   <a href="/home/talks/Atonement.php">Talk: Atonement</a> -->
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