<?php
include'scripts/dbconnect.php';
include'base.php';
session_start();
// error_reporting(0);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="main.css">

    
  </head>
  <body>
  <div class="container bg-white fixed-top">
        <div class="row">
          <div class="col-3 mt-2">
           <a href="landing.php"> <img src="assets/img/back.png" height="20" width="20"></a>
          </div>
          <div class="col-6 text-center"><h1 class="logo mt-2">SLAY</h1></div>
          <div class="col-3 text-center">
            <i class="fas fa-search mt-3"></i>
          </div>
        </div>
      </div>

    <div class="container">
    <strong>Wishlist</strong>
    <br><br>
    <div class="container">
      <div class="row ">
        <?php
        if(isset($_SESSION['id'])){
        $id=$_SESSION['id'];
       $sql="SELECT * FROM `wishlist`   WHERE `user_id` = '$id' ";
       $res=mysqli_query($conn,$sql);
        
       if($res -> num_rows>0 ){
        while($row = mysqli_fetch_assoc($res)) {
         $pid=$row['product_id'];
         $sql1="SELECT * FROM `products`   WHERE `image` = '$pid' ";
         $res1=mysqli_query($conn,$sql1);
        
         while($row = mysqli_fetch_assoc($res1)){
          $image=$row['image'];
          $type=substr($row['type'],0,20);
          $price=$row['price'];
         

          echo'
             
             
              
          <div class="col-6 px-0 pb-2">
            <div class="container px-2">
           <div class="card" style="border:white;">
            <div class="card-text">
               <a href="view.php?image='.$image.'"><img src="assets/img/'.$row['image'].'.png"  class="card-img-top" height="200" style="border-radius:15px"></a>
              
               <div class="px-1 mt-2 mb-2">
                 <p class="card-title mb-0" style="font-weight:bold; font-size:12px;"style="font-size: 12px;">'.$row['brand'].' </p>
                 <p class="card-text mb-0" style="font-size: 12px;">'.$type.' </p>
                 <p class="card-text" style="font-size: 12px;">Rs. '.$row['price'].'  <small><del>   Rs.'.$row['originalPrice'].'   </del></small><strong style="color:#233959"><small>   '.$row['Discount'].'% off</small></strong> </p>
              <div  class="mt-2">
                <a href="delete.php?id='.$id.' && pid='.$pid.' && type=wishlist" type="button" class="btn btn-sm"style=" float:right ;
                 border-radius:15px;
                 color:white;
                 font-size:15px;
                 background-color:#FDCE2A;
                 box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
                 transform:translateY(-10px);
             
                 width:30px;
                 "><i class="fas fa-trash"></i> </a>
                 <a href="gateway.php?image='.$image.'&type=bag"" type="button" class="btn btn-sm"style=" float:left ;
                 border-radius:15px;
                 color:white;
                 font-size:12px;
                 background-color:#1c2e4a;
                 box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
                 transform:translateY(-10px);
                 height:28px;
                 width:90px;
                 "><p class="text-center">Add to bag</p> </a>
                </div>
               </div>
              </div>
           
              </div> 
            </div>
            </div>
         
        
        
        ';
         }
         
       }
       
      
    
       
     }
     
    }
 
    else{
      echo'
      <div class="container text-center mt-5">
      <img class="img-fluid" src="assets/img/ill1.svg" height="500" width="290">
      <p class="mt-4">YOU ARE NOT LOGGED IN....PLEASE LOGIN TO CONTINUE</p>
      <a href="login.php" type="button" class="btn btn-primary" style="border:none;background-color:#FDCE2A; border-radius:15px;color:white;
      box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);">LOGIN</a>
      
      </div>';
    }
    
         
            
         
             
          
  
       

       
  
      
    ?>
  </div>
</div>
  </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>



