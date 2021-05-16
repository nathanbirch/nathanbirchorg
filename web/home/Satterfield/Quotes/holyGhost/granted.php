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
                <p style="font-weight: bold; font-family: arial; text-align: left;"><big
                    style="color: rgb(102, 0, 0);"><font size="+1"><big><em><br>
                        </em></big></font></big></p>
                <p style="font-weight: bold; font-family: arial; text-align: left;"><big
                    style="color: rgb(102, 0, 0);"><font size="+1"><big><em>We Should Not
                            Take The Gift of the Holy Ghost For Granted</em></big></font></big><br
                    style="font-family: arial;" wp="BR2">
                </p>
                <p style="margin-left: 40px; font-family: arial;"><big><big><strong>Dallin
                            H. Oaks</strong></big></big></p>
                <p style="margin-left: 80px; font-family: arial;"><big><big>For
                        faithful members of the Church of Jesus Christ, the companionship of
                        the Holy Spirit should be so familiar that we must use care not to take
                        it for granted. For example, that good feeling you have felt during the
                        messages and music of this conference is a confirming witness of the
                        Spirit, available to faithful members on a continuing basis. A member
                        once asked me why he felt so good about the talks and music in a
                        sacrament meeting, while a guest he had invited that day apparently
                        experienced no such feeling. This is but one illustration of the
                        contrast between one who has the gift of the Holy Ghost and is in tune
                        with his promptings and one who has not, or is not. ("Always Have His
                        Spirit," <em>Ensign</em>, Nov. 1996, p. 60)</big></big><br>
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