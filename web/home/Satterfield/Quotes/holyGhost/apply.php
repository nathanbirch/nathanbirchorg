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
                <p style="font-family: arial; text-align: left;"><big><big><em></em><small
                            style="font-weight: bold; color: rgb(153, 0, 0); font-family: arial;"><font
                                size="+1"><big><em>Holy Ghost Helps One Learn and</em></big></font></small></big></big><big
                    style="font-weight: bold; color: rgb(153, 0, 0); font-family: arial;"><font
                        size="+1"><big><em> Apply Doctrine</em></big></font></big></p>
                <p style="font-family: arial;" align="center"><big><big><font size="+1"><big><big><em></em></big></big></font></big></big></p>
                <div style="margin-left: 40px;"><big style="font-family: arial;"><big><strong>Russell
                                M. Nelson</strong></big></big></div>
                <p style="margin-left: 80px; font-family: arial;"><big><big>Living the
                        Lord's standards requires that we cultivate the gift of the Holy Ghost.
                        That gift helps us understand doctrine and apply it personally. Because
                        truth given by revelation can only be understood by revelation (see 1
                        Cor. 2:11-14), our studies need to be prayerful. ("Living by Scriptural
                        Guidance," <em>Ensign,</em> Nov. 2000, pp. 16-18). </big></big></p>
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