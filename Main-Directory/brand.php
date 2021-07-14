<?php
include'scripts/dbconnect.php';

error_reporting(0);



?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
    crossorigin="anonymous" /> 
  <link rel="preconnect" href="ht.tps://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="main.css"> 


</head>
<style>
    <style>
    p {
      font-size: 12px !important;
    }
</style>

<body>

<div class="container">
<div class="row ">
  <?php
  $brand=$_GET['brand'];
//   echo $discount;
$sql="SELECT * FROM `products` WHERE `brand`= '$brand'";
 $result = mysqli_query($conn,$sql);
 if($result -> num_rows>0 ){
 while($row = mysqli_fetch_assoc($result)) {
   $image=$row['image'];
   $type=substr($row['type'],0,20);
   echo'
      
      
   <div class="col-6 px-0 pb-2">
    <div class="container px-2">
    
    
       <a href="view.php?image='.$image.'"><img src="assets/img/'.$row['image'].'.png"  class="card-img-top" height="220" style="border-radius:15px"></a>
       <div class="px-1 mt-2 mb-2">
         <p class="card-title mb-0" style="font-weight:bold; font-size:12px;"style="font-size: 15px;">'.$row['brand'].' </p>
         <p class="card-text mb-0" style="font-size: 12px;">'.$type.' </p>
         <p class="card-text" style="font-size: 12px;">Rs. '.$row['price'].'  <small><del>   Rs.'.$row['originalPrice'].'   </del></small><strong style="color:#233959"><small>   '.$row['Discount'].'% off</small></strong> </p>
       </div>
   
    
    </div>
    </div>
  
       
';
       
}
}

  ?>
</div>
</div>






  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  
</body>

</html>