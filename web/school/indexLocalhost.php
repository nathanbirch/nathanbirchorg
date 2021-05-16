<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Home | Nathan's School Site</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <link href="css/school.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
    <div  class="padMe">
        <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/schoolHeader.php';  ?>
        <div class="primaryContentWrapper desktopHomePageLayout">
            <div class="primaryContentLeft"><?php include $_SERVER['DOCUMENT_ROOT']. '/pages/homePageModules/leftSide.php';  ?></div>
            <div class="primaryContentRight"><?php include $_SERVER['DOCUMENT_ROOT']. '/pages/homePageModules/rightSide.php';  ?></div>
            <div class="primaryContentCenter"><?php include $_SERVER['DOCUMENT_ROOT']. '/pages/homePageModules/centerSide.php';  ?></div>
        </div>
        <div class="tabletHomePageLayout">
            <div class="tb-primaryContentCenter"><?php include $_SERVER['DOCUMENT_ROOT']. '/pages/homePageModules/centerSide.php';  ?></div>
            <br class="tb-break">
            <div class="tb-primaryContentLeft"><?php include $_SERVER['DOCUMENT_ROOT']. '/pages/homePageModules/leftSide.php';  ?></div>
            <div class="tb-primaryContentRight"><?php include $_SERVER['DOCUMENT_ROOT']. '/pages/homePageModules/rightSide.php';  ?></div>
            <br class="tb-break">
        </div>
        <div class="mobileHomePageLayout">
            <div class="mb-primaryContent"><?php include $_SERVER['DOCUMENT_ROOT']. '/pages/homePageModules/centerSide.php';  ?></div>
            <br class="mb-break">
            <div class="mb-primaryContent"><?php include $_SERVER['DOCUMENT_ROOT']. '/pages/homePageModules/leftSide.php';  ?></div>
            <br class="mb-break">    
            <div class="mb-primaryContent"><?php include $_SERVER['DOCUMENT_ROOT']. '/pages/homePageModules/rightSide.php';  ?></div>    
            <br class="mb-break">    
        </div>
        <div class="theBottom footer"><?php include $_SERVER['DOCUMENT_ROOT']. '/modules/schoolFooter.php';  ?></div>
    </div>
</body>
</html>

<!--When finding and replacing for localhost vs prod do the following:
    to prod: 
        FIND:    <!?php include '/school
        REPLACE: <!?php include $_SERVER['DOCUMENT_ROOT']. '
        && 
        FIND:    h!ref="/school/
        REPLACE: h!ref="/"

    to localhost
        FIND:    <!?php include $_SERVER['DOCUMENT_ROOT']. '
        REPLACE: <!?php include '/school
        && 
        FIND:    h!ref="/
        REPLACE: h!ref="/school/"