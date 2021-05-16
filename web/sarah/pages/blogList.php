<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="utf-8">
    <title>Sarah's Website</title>
    <meta name="author" content="Nathan Birch">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <link href="http://www.nathanbirch.org/sarah/css/sarah.css" rel="stylesheet" type="text/css" media="screen">
    <!-- favicon -->
    <link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAAPv/AAAAAAADwAAAD/AAABw4AAA73AAAN+wAAHfuAAB//gAAeZ4AAHmeAAA//AAAP/wAAB/4AAAP8AAAA8AAAAAAAAD8PwAA8A8AAOAHAADAAwAAgAEAAIABAAAAAAAAAAAAAAAAAAAAAAAAgAEAAIABAADAAwAA4AcAAPAPAAD8PwAA" rel="icon" type="image/x-icon" />
</head>
<body>
    <!-- Include the header.php file for the top navigation bar -->
    <header role="banner">
        <div><?php include("/home2/nathaoe4/public_html/sarah/modules/header2.php"); ?></div>
    </header>
       <!-- BREADCRUMBS -->
  <div class="dumb container">
   <ol style="padding-top:13px" class="crumb">
       <a class="crumbP" href="/index.php"><u>Home</u></a> >> <b class="crumbC">Blog List</b>
   </ol>
  </div>
  <!-- END BREADCRUMBS -->
    <br />
    <div id="main-wrapper">
        <div class='backDropGradient'>
            <h3>This page is under construction.</h3>
        </div>
    </div>
    <footer role="contentinfo">
        <!-- Include the footer.php file for the top navigation bar -->
        <div><?php include("/home2/nathaoe4/public_html/sarah/modules/footer2.php"); ?></div>
        <!-- display on the website when this page was updated last -->
        <!--        <h6 style="float: left"><?php  echo 'Webpage last updated: '.date('j F, Y', getlastmod()); ?></h6>-->
    </footer>
</body>
</html>

