<?php
include'scripts/dbconnect.php';
include'base.php';

session_start();
error_reporting(0);

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

    <style>
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
    border: solid 2px #fff;
    background-color: #150e56;
    color: #fff;
    font-weight: bold;
    box-shadow: none;
}

    
    </style>
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
    <strong>Bag Details</strong>
    <br><br>

        <?php
        if(isset($_SESSION['id'])){
        $id=$_SESSION['id'];
       $sql="SELECT * FROM `cart`   WHERE `user_id` = '$id' ";
       $res=mysqli_query($conn,$sql);
         $sum=0;
         $tsum=0;
       if($res -> num_rows>0 ){
        while($row = mysqli_fetch_assoc($res)) {
         $pid=$row['product_id'];
         $quantity=$row['quantity'];
         $sql1="SELECT * FROM `products`   WHERE `image` = '$pid' ";
         $res1=mysqli_query($conn,$sql1);
        
         while($row = mysqli_fetch_assoc($res1)){
          $image=$row['image'];
          $type=substr($row['type'],0,20);
          $no=$row['sno'];
          $price=$row['price'];
          $sum +=($price*$quantity);
          $tsum+=($row['originalPrice']*$quantity);


           echo'
           
          
          <div class="container px-2 d-flex mt-1 mb-1" style="border:1px solid rgb(204, 190, 190) ; box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.1); border-radius:15px;">
          
          
             <a href="view.php?image='.$image.'"><img src="assets/img/'.$row['image'].'.png"  class="card-img-top mt-3 mb-3 " height="100" style="border-radius:15px;width:100px;"></a>
             <div class="mt-3" style="padding-left: 40px;">
               <p class="card-title mb-0" style="font-weight:bold; font-size:12px;"style="font-size: 12px;">'.$row['brand'].' </p>
               <p class="card-text mb-0" style="font-size: 12px;">'.$type.' </p>
               <p class="card-text" style="font-size: 12px;">Rs. '.$row['price'].'  <small><del>   Rs.'.$row['originalPrice'].'   </del></small><strong style="color:#233959"><small>   '.$row['Discount'].'% off</small></strong> </p>
               <a href="delete.php?id='.$id.' && pid='.$pid.' && type=bag" type="button" class="btn btn-sm mt-3" style="float: right !important; border-radius:15px;
                color:white;
                background-color:#FDCE2A;
                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
                transform:translateY(-20px);
                width:50px;"><i class="far fa-trash-alt"></i></button></a>
                    <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom'.$image.'" style="height:25px;width:45px;font-size:10px;padding:0 !important;border-radius:5px;font-weight:bold;"aria-controls="offcanvasBottom'.$image.'">Qty:'.$quantity.'<i class="fas fa-sort-down"></i></button>';
                   $sizesql="SELECT `size` FROM `tempsize` WHERE `product_id`= '$pid' AND `user_id`='$id' ";
                    $sizeres=mysqli_query($conn,$sizesql);
                    if($sizeres -> num_rows>0 ){
                      while($row = mysqli_fetch_assoc($sizeres)) {
                         $fsize=$row['size'];

                      }}
                      if($pid<108){
                      echo'

                    <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom'.$no.'" style="height:25px;width:45px;font-size:10px;padding:0 !important;border-radius:5px;font-weight:bold;"aria-controls="offcanvasBottom'.$no.'">Size:'.$fsize.'<i class="fas fa-sort-down"></i></button>'; 
                      }
             echo' </div>

                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom'.$image.'" aria-labelledby="offcanvasBottomLabel'.$image.'">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasBottomLabel'.$image.'">Set Quantity</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body small">
                <form  class="boxed" action="update.php?product_id='.$pid.'&&id='.$id.'"method="POST">
                
                <label class="btn btn-outline-primary ">
                  <input class="form-check-input" type="radio" name="quantity" id="gridRadios1" value="1" checked>1
                </label>  
               
              
                  <label class="btn btn-outline-primary  form-check-label">
                    <input class="form-check-input" type="radio" name="quantity" id="gridRadios2" value="2" >2
                  </label> 
                
                 
                    <label class="btn btn-outline-primary  form-check-label">
                      <input class="form-check-input" type="radio" name="quantity" id="gridRadios3" value="3">3
                    </label> 
                  
                   
                      <label class="btn btn-outline-primary  form-check-label">
                        <input class="form-check-input" type="radio" name="quantity" id="gridRadios4" value="4">4
                      </label> 

                      <label class="btn btn-outline-primary  form-check-label">
                      <input class="form-check-input" type="radio" name="quantity" id="gridRadios4" value="5">5
                    </label> 
                    
                    <label class="btn btn-outline-primary  form-check-label">
                    <input class="form-check-input" type="radio" name="quantity" id="gridRadios4" value="6">6
                  </label>
                  <label class="btn btn-outline-primary  form-check-label">
                  <input class="form-check-input" type="radio" name="quantity" id="gridRadios4" value="7">7
                </label> 


                 <div class="btn-group container fixed-bottom bg-white mb-2"role="group" aria-label="Basic mixed styles example">
                    <button  class="btn  btn-md" style="background-color:#1c2e4a; border-radius:15px;color:white;
                    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);" type="submit" name="submit">Submit</button>
                </div>

                </form>
                  </div>
                </div>
                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom'.$no.'" aria-labelledby="offcanvasBottomLabel'.$no.'">
                     <div class="offcanvas-header">
                       <h5 class="offcanvas-title" id="offcanvasBottomLabel'.$no.'">Set Quantity</h5>
                       <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                     </div>
                     <div class="offcanvas-body small">
                   <form  class="boxed" action="tempsize.php?pid='.$pid.'&form=bag" method="POST">'
                ;
               $stocksql="SELECT `sno`, `size` FROM `stock` WHERE `product_id` = '$pid' AND `product_id` < 108 ";
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
          
         ';
         }
         
       }
       
      
       $saved=$tsum-$sum;
       echo'
       <hr>
       <div class="card" style="border:white">
        <div class="card-text">
       <p style="font-size: 20px; "class="text-muted"> <strong>Order Details</strong></p>
       <p style="font-size: 13px;" ><strong>Amount to Pay</strong> <strong style="float:right">&#x20b9 '.$tsum.'</strong></p>
       <p style="font-size: 13px; "><strong>You Saved</strong><strong style="float:right;color: green">-&#x20b9  '.$saved.'</strong></p>
       <p style="font-size: 13px;"><strong>Delivery</strong><strong style="float:right">Free</strong></p>
      </div>
      </div>
       <h3>Total Amount<strong style="float:right">&#x20b9 '.$sum.'</strong></h3> 
       <br><br>
       <footer> 
      
        <div class="btn-group container fixed-bottom bg-white mb-2"role="group" aria-label="Basic mixed styles example">
          
        <a  href="#" type="button" class="btn  btn-md" style="background-color:#1c2e4a; border-radius:15px;color:white;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        "><i class="fas fa-shopping-cart"></i> Proceed</a>
        </div>
      </footer>
      
      <hr>
       ';
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



