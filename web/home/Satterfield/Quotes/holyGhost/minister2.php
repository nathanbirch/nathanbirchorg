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
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/home/modules/header.php'; ?>  
            </div>
        </header>
        <!-- BREADCRUMBS -->
        <div class="dumb container">
            <ol style="padding-top:13px" class="crumb">
                <a class="crumbP" href="/"><u>Home</u></a> >> <b class="crumbC">Studies</b>
            </ol>
        </div>
        <!-- END BREADCRUMBS -->
        <div>
            <main class="container">
                <div style="text-align: left;"><small
                        style="font-weight: bold; color: rgb(153, 0, 0); font-family: arial;"><big><big><font
                                    size="+1"><big><em>Gift of the Holy Ghost is God's Minister (Teacher)</em></big></font></big></big></small><br
                        style="font-family: arial;" wp="BR2">
                </div>
                <p style="margin-left: 40px; font-family: arial;"><big><big><strong>Brigham
                            Young</strong></big></big></p>
                <p style="margin-left: 80px; font-family: arial;"><big><big>We believe
                        we are entitled to the gift of the Holy Ghost in extent according to
                        the discretion and wisdom of God and our faithfulness; which gift
                        brings all things to our remembrance, past, present, and to come, that
                        are necessary for us to know, and as far as our minds are prepared to
                        receive the knowledge of God revealed by that all-wise Agent. The Holy
                        Ghost is God's minister, and is delegated to visit the sons and
                        daughters of men. All intelligent beings pertaining to this earth are
                        instructed from the same source. (<em>Discourses of Brigham Young</em>,
                        pp.160-161)</big></big><br style="font-family: arial;" wp="BR1">
                </p>

            </main>
        </div>

        <footer role="contentinfo">
            <!-- Include the footer.php file for the top navigation bar -->
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/home/modules/footer.php'; ?>
            </div>
        </footer>
    </body>
</html>