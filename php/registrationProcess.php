<?php 
require_once('./config.php') ;

if(isset($_POST)) {

    $fullName = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query1 = "SELECT * from user WHERE email='$email';";
    $result1= mysqli_query($conn,$query1);
    if(mysqli_num_rows($result1) > 0){
        echo("user already exists");
    }else{
    $query2 = "INSERT INTO user(fullname,email,pass) VALUES ('$fullName','$email','$password')";
    $result2= mysqli_query($conn,$query2);
    echo("asdfads");
    if(mysqli_num_rows($result2) > 0){
        header("Location:../module/homepage.php");
    }else{
        echo('user Not Registered, Please Try Again');
    }
 }
}
?>