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
                <p align="center"><font face="Arial" size="5">Progress and Development of
                    Spirits</font></p>
                <p align="center">&nbsp;</p>
                <ul>
                    <li>
                        <p style="line-height: 100%; margin-top: 1; margin-bottom: 1"><font face="Arial" size="2">Harold B. Lee, <a href="../../Talks/SelfRespHBL.htm">"Understand Who We are
                                Brings Self-Respect"</a>&nbsp;&nbsp;</font></li>
                    <li>
                        <p style="line-height: 100%; margin-top: 1; margin-bottom: 1"><font face="Arial" size="2">
                            J. Reuben Clark, <a href="../../Talks/Abraham3.HTML">"Abraham 3"</a>
                        </font></li>
                </ul>

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