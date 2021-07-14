<?php
session_start();
error_reporting(0);
$image=$_GET['image'];
$type=$_GET['type'];
if(!isset($_SESSION['login'])){
    ?>
    alert("You are not Logged in");
    <?php
    header("Location: login.php");
}
else if($type=="bag")
{
    header("Location: addtobag.php?image=$image");
}
else if($type=="wishlist"){
     header("Location: addtowishlist.php?image=$image");
}

