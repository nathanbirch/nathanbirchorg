<?php
// Get the product data
$blog_title = filter_input(INPUT_POST, 'blogTitle', FILTER_VALIDATE_INT);
$blog_entry = filter_input(INPUT_POST, 'blogEntry');
$user_id = filter_input(INPUT_POST, 'userID');

// Validate inputs
if ($category_id == null || $category_id == false ||
        $categoryName == null || $categoryName == false) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $query = "INSERT INTO BLOGDATA
                 (userID, blogTitle, BlogEntry)
              VALUES
                 ('$user_id', '$blog_title', '$blog_entry')";
    $statement = $db->prepare($query);
    $statement->bindValue(':userID', $user_id);
    $statement->bindValue(':blogTitle', $blog_title);
    $statement->bindValue(':blogEntry', $blog_entry);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index.php');
}
?>


//<?php
//$username = 'nathaoe4_demo';
//$password = 'demo123456';
//$servername = 'localhost';
//$dbname = 'nathaoe4_demo';
//
//$creationDate = date("Y-m-d H:i:s"); 
//$userID = "12323";
//$blogID = "";
//$userIPv4 = "2.2.2.2";
//
//// Create connection
//$link = mysql_connect($servername, $username, $password, $dbname);
//// Check connection
//if (!$link) {
//    dir('There was a problem when trying to connect to the host. Please contact Tech Support. Error: ' . mysql_error());    
//}
//
//$db_selected = mysql_select_db($dbname, $link);
//
//$blogTitle = $_POST['blogTitle'];
//$blogEntry = $_POST['blogEntry'];
//$creationDate = $_POST['creationDate'];
//$userID = $_POST['userID'];
//$blogID = $_POST['blogID'];
//$userIPv4 = $_POST['userIPv4'];
//
//$sql = "INSERT INTO BLOGDATA (blogID, userID, blogTitle, blogEntry, creationDate, userIPv4)
//    VALUES ('$blogID', '$userID', '$blogTitle', '$blogEntry', '$creationDate', '$userIPv4')";
//
//if (!mysql_query($sql, $con)) {
//    die('Error: ' . mysql_error());
//    echo "Please make sure all fields are populated before clicking submit.";
//}
//echo "Saved successfully.";
//
//?>

