<?php
include'scripts/dbconnect.php';

session_start();
 error_reporting(0);
 include 'base.php';
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: landing.php");
}

include'scripts/dbconnect.php'

?>

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
  
    <br><br>


        <?php
        if(isset($_SESSION['login'])){
        $id=$_SESSION['id'];
        $sql="SELECT * FROM `users` where `id`='$id'";
        $res=mysqli_query($conn,$sql);
        if($res -> num_rows>0 ){
            while($row = mysqli_fetch_assoc($res)) {
            echo'
             <div class="container text-center">
             <img src="assets/img/user.png"  height="100" width="100">
            <p class="mt-2 mb-1"> <strong>'.$row['name'].'</strong></p>

            <p class="text-muted mt-1">'.$row['mail'].'</p>
            ';
            }
        }
    
             
            
         if (isset($_SESSION['login'])) {
                echo'
                 <form action="#" method="post" class="mt-5">
                            <div class="text-center mt-4">
                                <button class="btn btn-danger" type="submit" name="logout">Logout</button>
                            </div>';
            
            
       

       
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



