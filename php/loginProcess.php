<?php 
require_once('config.php') ;
if(isset($_POST)){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query="SELECT * from user WHERE email='$email' AND pass='$password';";
    $result = mysqli_query($conn,$query);
  
    
    if(mysqli_num_rows($result) > 0){
        echo(true);
        session_start();
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $_SESSION['useremail'] = $email; 
     }
     else{
         echo(false);
     }
 }
?>