
<?php
include "navbar.php";
session_start();

//getting data
$userName=$_POST['userName'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$facebook=$_POST['facebook'];
$twitter=$_POST['twitter'];
$instagram=$_POST['instagram'];

//clean Data
function cleanData($input)
{
    $input=htmlspecialchars($input);
    $input=trim($input);
    return $input;
}

$userName=cleanData($userName);
$email=cleanData($email);
$password=cleanData($password);
$phone=cleanData($phone);
$facebook=cleanData($facebook);
$twitter=cleanData($twitter);
$instagram=cleanData($instagram);

//validation

$errors2=array();
$valid=true;


//validation if input wrong
//userName
if(!filter_var($userName, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH))
{
    $errors2['userName']="NOT Valid User name";
    $valid=false;
}

//email
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $errors2['email']= "NOt Valid Email";
    $valid=false;
}

//password
if($password=="" || !filter_var($password, 
FILTER_VALIDATE_REGEXP,
array( "options"=> array( "regexp" => "/.{6,25}/"))
))
{
    $errors2['password']= "NOT Valid Password";
    $valid=false;
}

//phone
if(!preg_match("/^01[0-2]{1}[0-9]{8}$/", $phone))
{
    $errors2['phone']= "NOT Valid phone";
    $valid=false;
}

//URLs
if(!filter_var($facebook, FILTER_VALIDATE_URL)) 
{
    $errors2['facebook']= "NOT Valid facebook";
    $valid=false;
}

if(!filter_var($twitter, FILTER_VALIDATE_URL)) 
{
    $errors2['twitter']= "NOT Valid twitter";
    $valid=false;
}

if(!filter_var($instagram, FILTER_VALIDATE_URL)) 
{
    $errors2['instagram']= "NOT Valid instagram";
    $valid=false;
}

$_SESSION['errors2']=$errors2;

if(isset($errors2))
{
    header('location: register.php');
}

//lw input sa7
if($valid===true)
{
    $_SESSION['userName']=$userName;
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    $_SESSION['phone']=$phone;
    $_SESSION['facebook']=$facebook;
    $_SESSION['twitter']=$twitter;
    $_SESSION['instagram']=$instagram;
    header('location: home.php');
}
?>	
