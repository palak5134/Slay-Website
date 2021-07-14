<?php
include'scripts/dbconnect.php';

session_start();
error_reporting(0);
$pid=$_GET['image'];
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>

  
  </head>
  <body>



  <button class="btn btn-outline-primary" id="canvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" style="height:25px;width:45px;font-size:10px;padding:0 !important;border-radius:5px;font-weight:bold;"aria-controls="offcanvasBottom'.$no.'">Size
  <i class="fas fa-sort-down"></i></button>'; 

  <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                     <div class="offcanvas-header">
                       <h5 class="offcanvas-title" id="offcanvasBottomLabel">Set Quantity</h5>
                       <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                     </div>
                     <div class="offcanvas-body small">
            <?php
            echo'
                     <form  class="boxed" action="tempsize.php?pid='.$pid.'" method="POST">';
                     
             
              
                   
        
               $stocksql="SELECT `sno`, `size` FROM `stock` WHERE `product_id` = '$pid' AND `product_id` < 108 ";
                $stockres=mysqli_query($conn,$stocksql);
                if($stockres -> num_rows >0){
                  while($row = mysqli_fetch_assoc($stockres)) {
                     $size=$row['size'];
                     $sno=$row['sno'];
                     echo'  
                     
                    <label class="btn btn-outline-primary ">
                     <input class="form-check-input" type="radio" name="size" id="grid'.$sno.'" value="'.$size.'" checked>'.$size.'
                   </label>';
                  
   
   
                  }
                }
                   echo'<div class="btn-group container fixed-bottom bg-white mb-2"role="group" aria-label="Basic mixed styles example">
                   <button  class="btn  btn-md" style="background-color:#1c2e4a; border-radius:15px;color:white;
                   box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);" type="submit" name="submitsize">Submit</button>
               </div>

               </form>
                 </div>
               </div>   ';   
            

        
                ?>
                        
                   
                   
          
  
       

  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
   
    <script>
    $(document).ready(function() {
   $("#canvas").trigger('click');
    });
    </script>
  </body>
</html>



