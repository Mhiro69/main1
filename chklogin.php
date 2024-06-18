<?php

session_start();
$userdata = '';
$path = 'users.txt';
function getLineWithString($fileName, $str) {
    $lines = file($fileName);
    foreach ($lines as $lineNumber => $line) {
        if (strpos($line, $str) !== false) {
            return $line;
        }
    }
    return 'emp';
}

if(isset($_POST)) {

    $email = $_POST['uname'];
	$password = $_POST['pword'];
    $email1 = $email . ' ';
    // if(strpos($file, $email1) !== FALSE)
    // {
    //     echo strpos($file, $email1);
    //     $whatIWant = substr($file, strpos($email1, "{"));
    //     echo $whatIWant;
        
    // }
    // else
    // {
    //     echo 'nn';
    // }
    $userdata = getLineWithString($path, $email1);
    

    if ($userdata != 'emp'){
        $userstring = substr($userdata, strpos($userdata, "= ") + 1);
        $userjson = json_decode($userstring, true);
        if ($userjson['pass'] == $password) {
            $_SESSION['logged_in'] = "user logged in";
            header("Location: homepage.php");
        }else{
            $_SESSION['usernotexisting'] = "Invalid username and/or password.";
            header("Location: index.php");
        }
    } else {
        $_SESSION['usernotexisting'] = "Invalid username and/or password.";
        header("Location: index.php");
    }
    
    
    
}