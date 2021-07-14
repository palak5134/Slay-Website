<?php 
session_start();
include'scripts/dbconnect.php'; 
$id=$_GET['id'];
echo $id;
$pid=$_GET['pid'];
$type=$_GET['type'];
echo $pid;
if ($type=="bag"){
$sql = "DELETE FROM `cart` WHERE `product_id`='$pid' AND `user_id`='$id' ";
$res=mysqli_query($conn,$sql);
if($res){
     header("Location: bag.php");
}
}
else if ($type=="wishlist"){
$sql = "DELETE FROM `wishlist` WHERE `product_id`='$pid' AND `user_id`='$id' ";
$res=mysqli_query($conn,$sql);
if($res){
     header("Location: wishlist.php");
}
}
