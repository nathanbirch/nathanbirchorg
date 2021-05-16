<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="author" content="Nathan Birch">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <link href="http://www.nathanbirch.org/sarah/css/sarah.css" rel="stylesheet" type="text/css" media="screen">
    <!-- favicon -->
    <link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAAPv/AAAAAAADwAAAD/AAABw4AAA73AAAN+wAAHfuAAB//gAAeZ4AAHmeAAA//AAAP/wAAB/4AAAP8AAAA8AAAAAAAAD8PwAA8A8AAOAHAADAAwAAgAEAAIABAAAAAAAAAAAAAAAAAAAAAAAAgAEAAIABAADAAwAA4AcAAPAPAAD8PwAA" rel="icon" type="image/x-icon" />
</head>
<body>
    <header role="banner">
        <div><?php include("/home2/nathaoe4/public_html/sarah/modules/header2.php"); ?></div>
    </header>
    <br />
    <div id="main-wrapper">
        <div class='backDropGradient'>
            <div  class="padMe">
                <div class="register-form" style="padding-left:20px; margin-left:20px;">
                     <h1>Register</h1>
                <form action="index.php" method="POST">
                    <table class="registerTable">
                        <tr>
                            <td><label>User Name:</label></td>
                            <td><input id="username" type="text" name="username" placeholder="username" /></td>
                        </tr>
                        <tr>
                            <td><label>E-Mail:</label></td>
                            <td><input id="password" type="email" name="email" placeholder="email"/></td>
                        </tr>
                        <tr>
                            <td><label>Password:</label></td>
                            <td><input id="password" type="password" name="password" placeholder="password" /></td>
                        </tr>
                    </table>
                    <br><br>
                        <input class="btn register" type="submit" name="submit" value="Sign Up" style="width:300px;" /><br><br>
                        <input class="btn btn-info" type="submit" name="action" value="login" />
                </form>
                </div>
            </div>
        </div>
    </div>
    <footer role="contentinfo">
        <div><?php include("/home2/nathaoe4/public_html/sarah/modules/footer2.php"); ?></div>
    </footer>
</body>
</html>
