<?php



include "navbar.php";


if(isset($_SESSION['email']))

{
    header('location:register.php');
}
if(isset($_SESSION['errors']))
{
    foreach($_SESSION['errors'] as $error)
    {
        echo "<div class='alert alert-danger' role='alert'>
        ".$error."
      </div>";
    }
}

?>

<form class="form-group ml-2 my-5 " method="post" action="handleAccount.php">
    <input class="form-control w-50 " type="text" name="email" placeholder="enter your name"><br>
    <input class="form-control w-50" type="password" name="password" placeholder="enter your password"><br>
    <input class="btn btn-primary px-4" type="submit" value="login"><br>