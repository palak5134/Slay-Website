<?php
session_start();


include'scripts/dbconnect.php'

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
    crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="main.css">
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script> -->
  <script src="scripts/jquery.js"></script><title>Hello, world!</title>
  
  <style>
    p {
      font-size: 12px !important;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
      color: white !important;
      background-color:white;
      border-bottom: 3px solid #1c2e4a;
    }
    .carousel-item img{
    border-radius: 3px;
}
div.brand {
                background-color: #333;
                overflow: auto;
                white-space: nowrap;
            }

.brand img{
  height:120px;
  width:120px;
  /* border:10px solid white; */
  background-size:cover;
}
.fa-tshirt{
  color:black !important;
}
  </style>
  
</head>

<body>
  <div class="container bg-white fixed-top">
    <div class="row">
      <div class="col-3">
        <h1 class="logo mt-2">SLAY</h1>
      </div>
      <div class="col-6"></div>
      <div class="col-3 text-center">
        <i class="fas fa-search mt-3"></i>
      </div>
    </div>
  </div>
  

  <!-- navbar -->


  <ul class="nav nav-pills nav-fill mt-5 mb-3 ps-3 text-center" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pills-offer-tab" data-bs-toggle="pill" data-bs-target="#pills-offer"
        type="button" role="tab" aria-controls="pills-offer" aria-selected="true"><img src="assets/img/price-tag.svg"
          height="20" ></button>
    </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link " id="pills-clothes-tab" data-bs-toggle="pill" data-bs-target="#pills-clothes"
          type="button" role="tab" aria-controls="pills-clothes" aria-selected="true"><i
            class="fas fa-tshirt"></i></button>
      </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-jewel-tab" data-bs-toggle="pill" data-bs-target="#pills-jewel" type="button"
        role="tab" aria-controls="pills-jewel" aria-selected="false"><img src="assets/img/earrings.svg"
          height="20"></button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-footwear-tab" data-bs-toggle="pill" data-bs-target="#pills-footwear"
        type="button" role="tab" aria-controls="pills-footwear" aria-selected="false">
        <img src="assets/img/high-heel.svg" height="20" style="fill:white"></button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-makeup-tab" data-bs-toggle="pill" data-bs-target="#pills-makeup" type="button"
        role="tab" aria-controls="pills-makeup" aria-selected="false">
        <img src="assets/img/cosmetics.svg" height="20"></button>
    </li>
  </ul>
  


  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-offer" role="tabpanel" aria-labelledby="pills-offer-tab">
      <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/img/3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img/2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img/1.png" class="d-block w-100" alt="...">
            </div> 
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <!---cards---->
        <p class="mt-3 mb-1 text-center text-secondary" ><strong style="font-size:10px ">DISCOUNT STORE HERE NOW ,TOTALLY IRRESISTABLE !</strong></p>
        <div class="d-flex">
       
       <div class="col-4 " style="border:6px solid red  !important">
        <a href="discount.php?dis=50"style="text-decoration: none !important;"> <div class="card">
              <div class="card-body text-center font-weight-bold"style="color:black">Min 50% off</div>
            </div></a>
          </div>
          
          <div class="col-4" style="border:6px solid lightgreen  !important">
            <a href="discount.php?dis=80"style="text-decoration: none !important;"><div class="card ">
             <div class="card-body"style="color:black">Min 80% off</div>
            </div>
          </a>
          </div>
          
         
          <div class="col-4">
            <a href="discount.php?dis=30" style=" text-decoration: none !important;">
            <div class="card"  style="border:6px solid cadetblue  !important">
             <div class="card-body" style="color:black; text-decoration: none !important;">Min 30% off</div>
            </div>
          </a>
          </div>
        
        </div>
        <p class="text-center mt-1 text-muted mb-0"><strong style="font-size:8px">Terms and Conditions apply</strong></p>
        <p class="text-center mt-1"><strong style="font-size:10px">EXCLUSIVE,ONLY FOR YOU</strong></p>


        <hr class="mb-0">
        <p class="mt-1"><strong style="font-size:10px">DISCOUNT ON TOP BRANDS</strong></p>

        <div class="brand mt-3 mb-5">

            <a href="brand.php?brand=streetstylestore"><img src="assets/img/sss.png" alt=""></a>
            <a href="brand.php?brand=MEN AND HARBOUR"><img src="assets/img/mast.png" alt=""></a>
            <a href="brand.php?brand="><img src="assets/img/nyx.png" alt=""></a>
           

        </div>






      </div>
    </div>
















  <div class="tab-pane fade" id="pills-clothes" role="tabpanel" aria-labelledby="pills-clothes-tab">
    <div class="container">
      <div class="row ">
        <?php
    $sql='SELECT * FROM `products` WHERE `category`="clothes"';
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
              <p class="card-title mb-0" style="font-weight:bold; font-size:15px;"style="font-size: 15px;">'.$row['brand'].' </p>
              <p class="card-text mb-0" style="font-size: 15px;">'.$type.' </p>
              <p class="card-text" style="font-size: 15px;">Rs. '.$row['price'].'  <small><del>   Rs.'.$row['originalPrice'].'   </del></small><strong style="color:#233959"><small>   '.$row['Discount'].'% off</small></strong> </p>
            </div>
        
         
         </div>
         </div>
        
         
         
         
    
    
    ';
         
  }
}

    ?>
      </div>
    </div>

  </div>
  <div class="tab-pane fade" id="pills-jewel" role="tabpanel" aria-labelledby="pills-jewel-tab">
    <div class="container">
      <div class="row ">
        <?php
        $sql='SELECT * FROM `products` WHERE `category`="jewel"';
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
                 <p class="card-title mb-0" style="font-weight:bold; font-size:15px;"style="font-size: 15px;">'.$row['brand'].' </p>
                 <p class="card-text mb-0" style="font-size: 15px;">'.$type.' </p>
                 <p class="card-text" style="font-size: 15px;">Rs. '.$row['price'].'  <small><del>   Rs.'.$row['originalPrice'].'   </del></small><strong style="color:#233959"><small>   '.$row['Discount'].'% off</small></strong> </p>
               </div>
           
            
            </div>
            </div>
         
        
        
        ';
             
      }
    }
    
        ?>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-footwear" role="tabpanel" aria-labelledby="pills-footwear-tab">

    <div class="container">
      <div class="row ">
        <?php
       $sql='SELECT * FROM `products` WHERE `category`="footwear"';
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
               <p class="card-title mb-0" style="font-weight:bold; font-size:15px;"style="font-size: 15px;">'.$row['brand'].' </p>
               <p class="card-text mb-0" style="font-size: 15px;">'.$type.' </p>
               <p class="card-text" style="font-size: 15px;">Rs. '.$row['price'].'  <small><del>   Rs.'.$row['originalPrice'].'   </del></small><strong style="color:#233959"><small>   '.$row['Discount'].'% off</small></strong> </p>
             </div>
         
          
          </div>
          </div>
        
            
            
       
        
             
  ';
             
      }
    }
    
        ?>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-makeup" role="tabpanel" aria-labelledby="pills-makeup-tab">
    <div class="container">
      <div class="row ">
        <?php
       $sql='SELECT * FROM `products` WHERE `category`="makeup"';
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
               <p class="card-title mb-0" style="font-weight:bold; font-size:15px;"style="font-size: 15px;">'.$row['brand'].' </p>
               <p class="card-text mb-0" style="font-size: 15px;">'.$type.' </p>
               <p class="card-text" style="font-size: 15px;">Rs. '.$row['price'].'  <small><del>   Rs.'.$row['originalPrice'].'   </del></small><strong style="color:#233959"><small>   '.$row['Discount'].'% off</small></strong> </p>
             </div>
         
          
          </div>
          </div>
        
             
  ';
             
      }
    }
    
        ?>
      </div>
    </div>


  </div>
  </div>
  <br>
  <br>

  <!--carousel-->



  <footer>
    <div class="container fixed-bottom bg-white">
      <div class="row mt-3 mb-1">
        <div class="col text-center active">
         
         <a href="landing.php"> <i class="fas fa-home"></i></a>
        </div>
        <div class="col text-center "style="animation: footer 0.5s 1">
          <a href="bag.php"><i class="fas fa-shopping-cart"></i></a>
        </div>
        <div class="col text-center text-center">
         <a href="wishlist.php"> <i class="fas fa-heart"></i></a>
        </div>
        <div class="col text-center text-center">
          <a href="user.php"> <i class="fas fa-user"></i></a>
        </div>
  </footer>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
    integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
    crossorigin="anonymous"></script>
    <script type="module">
    $(document).ready(function(){
      $('button[data-bs-toggle="pill"]').on('show.bs.tab', function(e) {
        sessionStorage.setItem('activeTab', $(e.target).attr('aria-controls'));
      });
      var activeTab = sessionStorage.getItem('activeTab');
      if(activeTab){
        $('#myTab button[aria-controls="' + activeTab + '"]').tab('show');
      }
    });
   

   
    </script>
  
</body>

</html>