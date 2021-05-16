<?php
    $username = 'nathaoe4_demo';
    $password = 'demo123456';
    $servername = 'localhost';
    $dbname = 'nathaoe4_demo';

    $creationDate = date("Y-m-d H:i:s"); 
    $userID = "12323";
    $blogID = "";
    $userIPv4 = "2.2.2.2";

    // Create connection
    $link = mysql_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$link) {
        dir('There was a problem when trying to connect to the host. Please contact Tech Support. Error: ' . mysql_error());    
    }

    $db_selected = mysql_select_db($dbname, $link);

    $blogTitle = $_POST['blogTitle'];
    $blogEntry = $_POST['blogEntry'];
    $creationDate = $_POST['creationDate'];
    $userID = $_POST['userID'];
    $blogID = $_POST['blogID'];
    $userIPv4 = $_POST['userIPv4'];

    $sql = "INSERT INTO BLOGDATA (blogID, userID, blogTitle, blogEntry, creationDate, userIPv4)
        VALUES ('$blogID', '$userID', '$blogTitle', '$blogEntry', '$creationDate', '$userIPv4')";

    if (!mysql_query($sql, $con)) {
        die('Error: ' . mysql_error());
        echo "Please make sure all fields are populated before clicking submit.";
    }
    echo "Saved successfully.";
?>