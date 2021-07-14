<?php
session_start();
include 'dbconnect.php';
$err = '';

//for signup
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $uname = $_POST['uname'];
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];

    if (empty($name) || empty($uname) || empty($mail) || empty($pwd) || empty($cpwd)) {
        $err = "All feilds required";
        header("Location: ../signup.php?err=$err&name=$name&uname=$uname&mail=$mail");
    }
    else if ($pwd != $cpwd) {
        $err = "Passwords mismatched";
        header("Location: ../signup.php?err=$err&name=$name&uname=$uname&mail=$mail");
    }
    else {
        $sql = "SELECT * FROM `users` WHERE `username` LIKE '%$uname%'";
        $res = mysqli_query($conn, $sql);
        if ($res -> num_rows > 0){
            $err = "Username already exists";
            header("Location: ../signup.php?err=$err&name=$name&uname=$uname&mail=$mail");
        }
        else {
            $sql1 = "INSERT INTO `users` VALUES (NULL, '$name', '$uname', '$mail','$pwd')";
            $res1 = mysqli_query($conn, $sql1);
            if($res1){
                header("Location: ../login.php");
            }
            else{
                $err = "Something went wrong !!!";
                header("Location: ../signup.php?err=$err&name=$name&uname=$uname&mail=$mail");
            }
        }
    }
}



//for login
if (isset($_POST['login'])) {
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    if(empty($uname) || empty($pwd)) {
        $err = "All feilds required";
        header("Location: ../login.php?err=$err&uname=$uname");
    }
    else{
        $sql = "SELECT * FROM `users` WHERE `username` LIKE '%$uname%' AND `password` LIKE '%$pwd%'";
        $res = mysqli_query($conn, $sql);
        if($res -> num_rows > 0) {
            $_SESSION['login'] = uniqid();
           
            while($row=$res -> fetch_assoc()){
                $id=$row['id'];
                $_SESSION['id']=$id;             }
        
            header("Location: ../landing.php?msg=Welcome_$uname");
        }
        else{
            $err = "No such user";
            header("Location: ../login.php?err=$err&uname=$uname"); 
        }
    }
}