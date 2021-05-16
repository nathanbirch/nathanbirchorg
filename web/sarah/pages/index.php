<!DOCTYPE html>
<html ng-app="sarahApp" ng-controller="sarahController" ng-init="signedInRun()">
    <head>
        <meta charset="utf-8">
        <title>Sarah's Website</title>
        <meta name="author" content="Nathan Birch">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <script src="/scripts/sarahController.js"></script>
        <link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAAPv/AAAAAAADwAAAD/AAABw4AAA73AAAN+wAAHfuAAB//gAAeZ4AAHmeAAA//AAAP/wAAB/4AAAP8AAAA8AAAAAAAAD8PwAA8A8AAOAHAADAAwAAgAEAAIABAAAAAAAAAAAAAAAAAAAAAAAAgAEAAIABAADAAwAA4AcAAPAPAAD8PwAA" rel="icon" type="image/x-icon" />
        <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link href="http://www.sarah.nathanbirch.org/css/sarah.css" rel="stylesheet" type="text/css" media="screen">
        <style>
            body {
                background-image: url("http://www.sarah.nathanbirch.org/pages/NathanSarahWedding BW - 097.jpg");
            }
        </style>
    </head>
    <body>
        <header role="banner">
            <header role="banner"><div><?php include("/home2/nathaoe4/public_html/sarah/modules/header2.php"); ?></div></header>
        </header>
        <br />
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-12">
                <div class="backDropGradientL" style="">
                    <div class="contents">
                        <br>
                        <!--<a href="javascript:ajaxpage(rootdomain+'/modules/blogEntry.php', 'blogEntryDiv'); loadobjs('http://www.sarah.nathanbirch.org/css/mixture.css', 'http://www.sarah.nathanbirch.org/scripts/mixture.js')"><button class="btn btn-info hvr-grow">Write a New Blog</button></a>-->
                        <!--<a href="javascript:ajaxpage(rootdomain+'/modules/blogEntry.php', 'blogEntryDiv'); loadobjs('http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css','http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', 'http://www.sarah.nathanbirch.org/css/editor.css', 'http://code.jquery.com/jquery-2.1.0.min.js', 'http://www.sarah.nathanbirch.org/scripts/editor.js')"><button class="btn btn-info hvr-grow">Write a New Blog</button></a>-->
<!--                        <a href="javascript:ajaxpage(rootdomain+'/modules/blogEntry.php', 'blogEntryDiv'); loadobjs('/css/bootstrap.min.css','/css/fontAwesome/font-awesome-4.4.0/css/font-awesome.min.css', '/css/editor.css', '/scripts/jquery-2.1.0.min.js', '/scripts/jquery-2.1.3.min.js', '/scripts/editor.js')"><button class="btn btn-info hvr-grow">Write a New Blog</button></a>-->
<!--                        <a href="javascript:ajaxpage(rootdomain+'/modules/blogEntry.php', 'blogEntryDiv'); loadobjs('http://www.nathanbirch.org/css/hover-min.css', 'http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', '/css/bootstrap.css', 'http://www.nathanbirch.org/css/sarah.css', 'http://www.sarah.nathanbirch.org/css/editor.css', 'http://code.jquery.com/jquery-2.1.0.min.js', 'http://www.sarah.nathanbirch.org/scripts/dynamicAjax.js', 'http://www.sarah.nathanbirch.org/scripts/sarah.js', 'http://www.sarah.nathanbirch.org/scripts/blogBasic.js')"><button class="btn btn-info hvr-grow">Write a New Blog</button></a>-->
                        <br><br>
                        <div style="border-bottom: 1px solid black; max-width:100%"><strong style="font-size:15px">Read from previous blogs</strong></div>
                        <?php

                        $sql_1 = "SELECT blogTitle, creationDate, blogEntry FROM BLOGDATA";
                        $result_1 = $conn->query($sql_1);

                        if ($result_1->num_rows > 0) {
                            // output data of each row
                            while ($row = $result_1->fetch_assoc()) {
                                echo "<br> <a href='http://www.google.com'><button class='btn btn-info entryOptions'>" . "<span class='blogTitle'>" . $row["blogTitle"] . "</span>" . "<br><span class='blogDate'>(" . substr($row["creationDate"], 0, 10) . ")</span>" . "</button></a><br>";
                            }
                        } else {
                            echo "0 results";
                        }

                        $conn->close();
                        ?>
                    </div>
                </div>
            </div>
            <br class="mobile-break">
            <div class="col-lg-8 col-md-6 col-sm-12 testing1">
                <main class="backDropGradient">
                    <h1 style="padding:10px; text-align:center">Welcome to Sarah's blog.  Enter a new blog entry below!</h1>
                    <div class="test2" id="blogEntryDiv"></div>
                    <br><br>
                    <div class="test2"><?php include("/home2/nathaoe4/public_html/sarah/modules/blogEntry.php"); ?></div>
                </main>
            </div>
            <br class="mobile-break">
            <div class="col-lg-2 col-md-3 col-sm-12">
                <div class="backDropGradientR">
                    <div class="contents" style="width:80%; max-width:400px">
                        <div class="input-group" style="margin-top:20px; padding-top:15px">
                            <input type="text" class="form-control" placeholder="Search for..." ng-model="blogEntry1">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div><br>
<!--                            <p>Change the background on this page:</p>
                        <input type="text" id="bgchanger" placeholder="Change Background Add URL" /><br>
                        <input type="button" onclick="changebackground();" value="Change!" /><br>
                        -->
                        <a href="">Try another test</a><br>
                        <div>Random Entry<br></div>
                    </div>
                </div>
            </div>
        </div>
        <footer role="contentinfo">
            <footer role="contentinfo"><div><?php include("/home2/nathaoe4/public_html/sarah/modules/footer2.php"); ?></div></footer>
        </footer>
    </body>
</html>

