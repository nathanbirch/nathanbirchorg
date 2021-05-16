<?php  
   	// check username or password from database
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $user = $request->user;
    $password = $request->password;
    if($user == "nathan" && $password== "EnjoyTheMovie"){
    	echo "1";
    }
    else {
    	echo "0";
    }
 
?>