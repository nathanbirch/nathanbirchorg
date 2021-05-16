<!DOCTYPE html>
<html>

    <!-- the head section -->
    <head>
        <meta charset="utf-8">
        <title>My Guitar Shop</title>
        <meta name="author" content="Nathan Birch">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link href="/336/exercises/chapter4/main.css" rel="stylesheet" type="text/css" media="screen">
        <link href="http://www.nathanbirch.org/sarah/css/sarah.css" rel="stylesheet" type="text/css" media="screen">
        <link href="/css/exercises.css" rel="stylesheet" type="text/css" media="screen">
        <!-- favicon -->
        <link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAAPv/AAAAAAADwAAAD/AAABw4AAA73AAAN+wAAHfuAAB//gAAeZ4AAHmeAAA//AAAP/wAAB/4AAAP8AAAA8AAAAAAAAD8PwAA8A8AAOAHAADAAwAAgAEAAIABAAAAAAAAAAAAAAAAAAAAAAAAgAEAAIABAADAAwAA4AcAAPAPAAD8PwAA" rel="icon" type="image/x-icon" />
    </head>

    <!-- the body section -->
    <body>
        <header role="banner"><div><?php include("/home2/nathaoe4/public_html/sarah/modules/header2.php"); ?></div></header>
        <br />
        <div id="main-wrapper">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-12">
                </div>
                <div class="col-lg-8 col-med-6 col-sm-12">
                    <main class="backDropGradient container">
                        <h1>Database Error</h1>
                        <p>There was an error connecting to the database.</p>
                        <p>The database must be installed as described in the appendix.</p>
                        <p>MySQL must be running as described in chapter 1.</p>
                        <p>Error message: <?php echo $error_message; ?></p>
                        <p>&nbsp;</p>
                    </main>
                </div>
                <!--                <div class="col-lg-2 col-med-3 col-sm-12" style="margin-left:-12px">
                                    
                                </div>-->
            </div>
        </div>
        <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
        <footer role="contentinfo"><div><?php include("/home2/nathaoe4/public_html/sarah/modules/footer2.php"); ?></div></footer>

    </body>
</html>