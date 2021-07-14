<?php
session_start();
include'scripts/dbconnect.php';

$id=$_SESSION['id'];
// echo $id;

$image=$_GET['image'];
$from=$_GET['from'];
$size=$_GET['size'];
echo $size;
echo $from;
echo $image;




        $sql2="SELECT * FROM `cart` WHERE  `product_id`='$image' AND `user_id`='$id' ";
        $res2=mysqli_query($conn,$sql2);
        
         if($res2 -> num_rows>0) {
            $sql=" UPDATE `cart` SET   `quantity`=`quantity`+1,`size`='$size'  WHERE  `product_id`='$image' AND `user_id`='$id' ";
         $res=mysqli_query($conn,$sql);
         if($res){
            if($from=="view"){
               // header("Location: view.php?image=$image&msg=Added to bag");  
             }
             else{
               //  header("Location: bag.php?image=$image");  
             }
   }
   }

           else{
            $sql= "INSERT INTO `cart`(`sno`, `user_id`, `product_id`, `quantity`, `size`) VALUES (NULL, '$id', '$image', 1,'$size')";
            $res=mysqli_query($conn,$sql);
            if($res){
               if($from=="view"){
                  // header("Location: view.php?image=$image&msg=Added to bag");  
                }
                else{
                   header("Location: bag.php?image=$image");  
                }
          }
               //   header("Location: bag.php?image=$image");
            }
                   
         
  