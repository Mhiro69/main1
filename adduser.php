<?php

session_start();
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

    $uname = $_POST['uname1'];
	$password = $_POST['pword1'];
	$name = $_POST['name'];
	$pnumber = $_POST['pnumber'];
	$email = $_POST['email'];
    $email1 = $uname . ' ';

    $userarray = ["uname"=>$uname, "pass"=> $password, "name"=> $name, "email"=> $email, "phone"=> $pnumber];
    $userdata = json_encode($userarray);
    $userstring = $uname . " = " . $userdata . PHP_EOL;
    
    $userdata = getLineWithString($path, $email1);
    if ($userdata != 'emp'){
        $_SESSION['userexists'] = "Username existing. Please login";
        header("Location: index.php");
    } else {
        file_put_contents($path, $userstring, FILE_APPEND);
        $_SESSION['usercreated'] = "Account created.";
        header("Location: index.php");
       
    }

    

    
}