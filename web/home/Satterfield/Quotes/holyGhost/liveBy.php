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
                    style="color: rgb(153, 0, 0);"><font size="+1"><big><em>Learn to Live
                            By the Spirit</em></big></font></big><br style="font-family: arial;"
                                                         wp="BR2">
                </p>
                <p style="margin-left: 40px; font-family: arial;"><big><big><strong>Boyd
                            K. Packer</strong></big></big></p>
                <p style="margin-left: 80px; font-family: arial;"><big><big>This is my
                        counsel to you, my brethren and sisters in Scandinavia, and
                        particularly to the young people among you: Learn to live by the Spirit.</big></big></p>
                <p style="margin-left: 80px; font-family: arial;"><big><big>Following
                        baptism, each of us was confirmed a member of The Church of Jesus
                        Christ of Latter-day Saints. We were blessed to receive the Holy Ghost,
                        which was to be a gift and a blessing to us in our lives.</big></big></p>
                <p style="margin-left: 80px; font-family: arial;"><big><big>Through the
                        Holy Ghost we may always have a very clear signal to follow. If we are
                        living worthily that signal will be a constant guide to us. (<em>Let
                            Not Your Heart Be Troubled </em>[Salt Lake City: Bookcraft, 1991], p.
                        232)</big></big></p>

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