<?php

session_start();

//getting data

$email=$_POST['email'];//super Global Array bta3i
$password=$_POST['password'];


//validation part

//clean data 
function cleanData($input)
{
    //clean data

    $input=htmlspecialchars($input);
    $input=trim($input);
    return $input;

}

$email=cleanData($email);//kda hyndf el email w hy store f varible esmo email w kda 3ml calling ll function
$password=cleanData($password);


//validation
$errors=[];
$valid=true;//validation sa7
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    $errors['email']="Not Valid Email";
    $valid=false;
}
if($password==" " || !filter_Var($password,FILTER_VALIDATE_REGEXP,
array("options"=>array("regexp"=>"/.{6,25}/"))
))
{
    $errors['password']="Not Valid password";
    $valid=false;//lw validation 8lt
}
$_SESSION['errrors']=$errors; //lw f error f input rag37a f page el account

if(isset($errors))
{
    header('location:account.php');

}

if($valid===true)
{
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    header('location:product.php');
}
?>