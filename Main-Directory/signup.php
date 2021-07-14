<?php
error_reporting(0);
include 'scripts/dbconnect.php';
include 'base.php';
$err = $_GET['err'];
$name = $_GET['name'];
$uname = $_GET['uname'];
$mail = $_GET['mail'];
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
    <title>Signup to my app</title>
</head>

<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-5 pt-2">
               
                    <div class="card-title">
                        <h4 class="text-center my-4">Signup</h4>
                    </div>
                   
                        <form action="scripts/authenticate.php" method="POST">
                            <?php
                            if($err){
                                echo '
                                <p class="text-center" style="color:red;font-size:15px;">
                                    '.$err.'
                                </p>
                                ';
                              
                            }
                            ?>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"  autocomplete="off" value="<?php echo $name; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="uname" class="form-label">Username</label>
                                <input type="text" value="<?php echo $uname; ?>" class=" form-control" id="uname" name="uname"  autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">email</label>
                                <input type="email" class="form-control" id="mail" name="mail"  autocomplete="off" value="<?php echo $mail; ?>">
                            </div>
                            <div class=" mb-3">
                                <label for="pwd" class="form-label">Password</label>
                                <input type="password" class="form-control" id="pwd" name="pwd" >
                            </div>
                            <div class="mb-3">
                                <label for="cpwd" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="cpwd" name="cpwd" >
                            </div>
                            <div class="d-grid pt-3">
                                <button type="submit" name="signup" class="btn btn-primary" style="background-color:#1c2e4a; border-radius:15px;color:white;
                                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
                                ">Submit</button>
                            </div>
                        </form>
                    </div>
               
                <div class="mt-3 ""></div>
                    <p style="font-size:15px" class="text-center">If already a user Kindly <a href="index.php">Login</a>. </p>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>