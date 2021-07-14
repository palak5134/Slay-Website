<?php
session_start();
include'scripts/dbconnect.php';

$id=$_SESSION['id'];
// echo $id;

$image=$_GET['image'];
//   echo $image;

$sql1 = "SELECT * FROM `wishlist` WHERE `user_id` = '$id' AND `product_id` = '$image'";
// echo $sql1;
$res1 = mysqli_query($conn, $sql1);
// var_dump($res1);
          if($res1 -> num_rows >0){
            // echo"product alreay exist";  
            header("Location: view.php?image=$image&msg1=Product already in Wislist");  
    }
           else{
            $sql= "INSERT INTO `wishlist`(`s.no`, `product_id`, `user_id`) VALUES (NULL,'$image','$id')";
            $res=mysqli_query($conn,$sql);
            if($res){
               header("Location: view.php?image=$image&msg1=Added to Wishlist");  
          }
               //   header("Location: bag.php?image=$image");
            }
                   
         
  