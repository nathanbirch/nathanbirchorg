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
                <br>
                <big
                    style="font-weight: bold; color: rgb(153, 0, 0); font-family: arial;"><font
                        size="+1"><big><em>Holy Ghost is a Revelator</em></big></font></big><span
                    style="font-weight: bold; color: rgb(153, 0, 0); font-family: arial;">
                </span><br>
                <p style="margin-left: 40px; font-family: arial;"><big><big><strong>Joseph
                            Smith</strong></big></big></p>
                <p style="margin-left: 80px; font-family: arial;"><big><big>No man can
                        receive the Holy Ghost without receiving revelations. The Holy Ghost is
                        a revelator. (<em>Teachings of the Prophet Joseph Smith</em>, p.328)</big></big></p>
                <div style="margin-left: 40px;"><big style="font-family: arial;"><big><strong>Joseph
                                Fielding Smith</strong></big></big></div>
                <p style="margin-left: 80px; font-family: arial;"><big><big>His mission
                        is to teach us all truth. He partakes of the things of the Father and
                        the Son and reveals them to those who serve the Lord in faithfulness. (<em>Doctrines
                            of Salvation</em>, 1:38)<br>
                    </big></big></p>
                <br>

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