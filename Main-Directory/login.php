<?php
session_start();
error_reporting(0);
include 'base.php';
if(isset($_SESSION['login'])) {
    header('Location: landing.php');
}
$err = $_GET['err'];
$uname = $_GET['uname'];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    
    <title>Login to continue</title>
</head>
<style>
    
    
</style>

<body>
    

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-5 pt-5">
               
                   
                        <h4 class="text-center my-4">Login</h4>
                    
                    <?php
                            if($err){
                                echo '
                                <p class="text-center" style="color:red;font-size:15px;">
                                    '.$err.'
                                </p>
                                ';
                            }
                    ?>
                    
                        <form action="scripts/authenticate.php" method="POST">
                            <div class="mb-3">
                                
                                <input type="text" class="form-control" id="uname" value="<?php echo $uname?>"name="uname" placeholder="username" autocomplete="off" >
                            </div>
                            <div class="mb-3">
                              
                                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="password">
                            </div>
                            <div class="d-grid pt-3">
                                <button type="submit"name="login" class="btn btn-primary" style="background-color:#1c2e4a; border-radius:15px;color:white;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    ">Submit</button>
                            </div>
                        </form>
                 
               
                <div class="text-center mt-3">
                    <p style="font-size:15px">If not a user Kindly signup by clicking <a href="signup.php">here</a>. </p>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>