<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Home | Nathan's School Site</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <link href="css/school.css" rel="stylesheet" type="text/css" media="screen">
   <!--<link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAAPv/AAAAAAADwAAAD/AAABw4AAA73AAAN+wAAHfuAAB//gAAeZ4AAHmeAAA//AAAP/wAAB/4AAAP8AAAA8AAAAAAAAD8PwAA8A8AAOAHAADAAwAAgAEAAIABAAAAAAAAAAAAAAAAAAAAAAAAgAEAAIABAADAAwAA4AcAAPAPAAD8PwAA" rel="icon" type="image/x-icon" />-->
</head>
<body>

    <div  class="padMe">
        <?php include $_SERVER['DOCUMENT_ROOT']. '/modules/schoolHeader.php';  ?>
        <?php
        require('connect.php');
        // If the values are posted, insert them into the database.
        if (isset($_POST['username']) && isset($_POST['password'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
            $result = mysql_query($query);
            if($result){
                $msg = "User Created Successfully.";
            }
        }
        ?>
        <div class="register-form">
             <h1>Register</h1>
        <form action="" method="POST">
            <p><label>User Name : </label>
                <input id="username" type="text" name="username" placeholder="username" /></p>

            <p><label>E-Mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
             <input id="password" type="email" name="email"/></p>

             <p><label>Password&nbsp;&nbsp; : </label>
             <input id="password" type="password" name="password" placeholder="password" /></p>
            <a class="btn" href="login.php">Login</a>
            <input class="btn register" type="submit" name="submit" value="Register" />
            </form>
        </div>
    </div>
</body>
</html>