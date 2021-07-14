<?php
include'scripts/dbconnect.php';

error_reporting(0);
$msg=$_GET['msg'];
$msg1=$_GET['msg1'];
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
  @keyframes mymove {
    0% {
      top: 0px;
      left: 0px;
      height: 220px;
      width: 164px;
      border-radius: 15px
    }

    100% {
      top: 0px;
      left: 100px;
      height: 450px;
      width: 336;
    }
  }

  .add:hover {
    transform: translateY(-20px) !important;
  }
  .btn-outline-primary{
       color:black;
       border:1px solid black;
    }
    .btn-outline-primary:hover{
      color:black;
      background-color:white;
      border:1px solid black !important;
      box-shadow:none !important;
    }
  .boxed input[type="radio"] {
    display: none;
}
.boxed label {
    display: inline-block;
    width: 40px;
    height: 40px;
    padding-top: 6px;
    border: solid 2px #cccccc94;
    transition: all 0.2s;
    border-radius: 10px;
    box-shadow: 1px 2px 3px rgb(241, 241, 241);
}

.boxed input[type="radio"] {
    display: none;
}

.boxed input[type="radio"]:checked+label {
    border: solid 2px #fff !important;
    background-color: #150e56;
    color: #fff;
    font-weight: bold;
    box-shadow: none;
}

    
</style>

<body>

  <?php
    $image=$_GET['image'];
    $sql="SELECT * FROM `products` WHERE `image`='$image'";
    $result = mysqli_query($conn,$sql);
    if($result -> num_rows>0 ){
    while($row = mysqli_fetch_assoc($result)) {
    echo'
    <div class="container">
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

    
    <img src="assets/img/'.$row['image'].'.png" onclick="view.php" class="card-img-top mt-5" height="450" style=" animation: mymove 0.5s 1;border-radius:15px">
    <a href="gateway.php?image='.$image.'&type=wishlist"" type="button" class="btn btn-sm"style=" float:right ;
    border-radius:15px;
    color:white;
    font-size:25px;
    background-color:#FDCE2A;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    transform:translateY(-20px);

    width:50px;
    "><i class="fas fa-heart"></i> </a>

    <br>
        <p style="font-size:15px;"class="mb-0 mt-2"><strong>'.$row['brand'].'</strong></p>
    
   
    <p class="mb-0"  style="font-size: 13px;">'.$row['type'].' </p>
    <p class="mb-0 " style="font-size: 13px;">Rs. '.$row['price'].'  <small><del>   Rs.'.$row['originalPrice'].'   </del></small><strong style="color:rgb(150, 135, 177)"><small>   '.$row['Discount'].'% off</small></strong> </p>
    <small style="color:green">Inclusive of all taxes</small>
    
   
       
        <p class=" mb-0 mt-2"><strong class="mt-2" style="font-size:12px !important;color:#848484;">DESCRIPATION</strong></p>
        '.$row['descripation'].'
        

       
    </div>
    <br><br>
    <footer class="fixed-bottom"> ';
    if($msg){
      echo'
        <div class="alert alert-info text-center border-0" style="border-radius:5px;padding:5px auto !important;background:#ccc; color:black; margin:10px 50px;height:20px;
        ">
        <p style="position: relative; bottom:12px;">'.$msg.'</p>
        </div>';
 
    }
    if($msg1){
      echo'
        <div class="alert alert-info text-center border-0" style="border-radius:5px;padding:5px auto !important;background:#ccc; color:black; margin:10px 50px;height:20px;
        ">
        <p style="position: relative; bottom:12px;">'.$msg1.'</p>
        </div>';
 
    }

    echo '
     
   
   
   
    <div class="btn-group container bg-white mb-2"role="group" aria-label="Basic mixed styles example">
  
    <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" style="background-color:#1c2e4a; border-radius:15px;color:white;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    "><i class="fas fa-shopping-cart"></i> Add to bag</button>

    
    </div>
  </footer>

  <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Set Quantity</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body small">
<form  class="boxed" action="tempsize.php?pid='.$image.'&&from=view" method="POST">'
;

$image=$_GET['image'];
$stocksql="SELECT `sno`, `size` FROM `stock` WHERE `product_id` = '$image' AND `product_id` < 108 ";
$stockres=mysqli_query($conn,$stocksql);
if($stockres -> num_rows >0){
while($row = mysqli_fetch_assoc($stockres)) {
  $size=$row['size'];
  $sno=$row['sno'];
  echo'  

<label class="btn btn-outline-primary ">
  <input class="form-check-input" type="radio" name="size" id="grid'.$sno.'" value="'.$size.'" checked>'.$size.'
</label>


';

}
}

     
 echo'
 <div class="btn-group container fixed-bottom bg-white mb-2"role="group" aria-label="Basic mixed styles example">
 <button  class="btn  btn-md" style="background-color:#1c2e4a; border-radius:15px;color:white;
 box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);" type="submit" name="submitsize">Submit</button>
</div>

</form>
</div>
</div>
 </div>

  
                  
          
                           
      '
    ;
    }
    } 
    ?>
   
    
    <script>
      $(".alert").show();
          setTimeout(function() { $(".alert").hide(); }, 2000);
    </script>

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