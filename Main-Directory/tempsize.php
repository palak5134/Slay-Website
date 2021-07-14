<?php
session_start();
include'scripts/dbconnect.php';

$id=$_SESSION['id'];
$from=$_GET['from'];
echo $id;

$pid=$_GET['pid'];
echo $pid;
$size=$_POST['size'];
echo $size;
if(!isset($_SESSION['login'])){
    ?>
    alert("You are not Logged in");
    <?php
    header("Location: login.php");
}
else 
{
  

$sql1 = "SELECT * FROM `tempsize` WHERE `user_id` = '$id' AND `product_id` = '$pid'";
    $res1 = mysqli_query($conn, $sql1);
if($res1 -> num_rows >0){
         $sql=" UPDATE `tempsize` SET   `size`= '$size'  WHERE  `product_id`='$pid' AND `user_id`='$id' ";
         $res=mysqli_query($conn,$sql);
         if($res){
             echo "updated";
            header("Location: addtobag.php?image=$pid&from=$from&size=$size");
   }
}
else{
    $sql= "INSERT INTO `tempsize`(`sno`, `user_id`, `product_id`, `size`) VALUES (NULL,'$id','$pid','$size')";
            $res=mysqli_query($conn,$sql);
            if($res){
                echo "inserted";
                 header("Location: addtobag.php?image=$pid&from=$from&size=$size");  
          }
            
            }
        }



         
  