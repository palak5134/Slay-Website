<?php
session_start();
include 'scripts/dbconnect.php';
$pid=$_GET['product_id'];
echo $pid;
$id=$_GET['id'];
echo $id;
// echo $image;

if (isset($_POST['submit'])) {

    $quantity = $_POST['quantity'];
    echo $quantity;
   

    if($quantity>10){
        header("Location: bag.php?msg=Invalid Number(Not more than 10)"); 
       
    }
    else{
        $sql=" UPDATE `cart` SET   `quantity`='$quantity'  WHERE  `product_id`='$pid' AND `user_id`='$id' ";
        $res=mysqli_query($conn,$sql);
        if($res){
            header("Location: bag.php");
       }

        
    }

} 
