<?php
ini_set('display_errors', 1);
echo $msg;
require('../model/connect.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'login';
    }
}
if ($action == 'login') {
	include('login.php');
} else if ($action == 'login_submit') {
        if (isset($_POST['username']) && isset($_POST['password'])){
			$username = filter_input(INPUT_POST, 'username');
			$password = filter_input(INPUT_POST, 'password');

	        $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
	        $result = mysql_query($query);
        if($result){
            $msg = "User Created Successfully.";
            include('../index.php');
        }
        else {
        	$msg = 'Failed to create account. Please enter a different username.';
            include('login.php');
        }
	} else {
		$message = 'Please enter a correct email address.';
		include('login.php');
	}
} else if ($action == 'sign_up') {
	$username = filter_input(INPUT_POST, 'username');
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$password = filter_input(INPUT_POST, 'password');
        
    $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
    $result = mysql_query($query);
    if($result){
        $msg = "User Created Successfully.";
        include('../index.php');
	} else {
		$msg = 'Failed to create account. Please enter a different username.';
		include('signUp.php');
	}
}

/* 
 * What you will need
 *   1. The product_register application should default to the login view
 *   2. If the email address is not provided, make them enter one
 *   3. Check if the email entered is valid, if so get the user information from 
 *       the database
 *   4. Send the logged-in user to the product registration page
 *   5. Automatically enter the user's name in the product registration form
 *   6. When the page loads the product list should be a drop down menu of 
 *       products built from a resultset queried out of the database
 *   7. If the product registration data is submitted, register the product
 *   8. If the product is registered successfully, confirm it to the user.
 */
?>
