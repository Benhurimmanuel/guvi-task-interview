<?php 


if(isset($_POST)) {
    require('config.php') ;
    $fullName = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"]; 

    $query = "SELECT * from user WHERE email='$email';";
    $result1= mysqli_query($conn,$query);

    if(mysqli_num_rows($result1) > 0){
        echo("user already exists");
        }else{
               // echo($conn);
        $insertquery = "INSERT INTO user(fullName,email,pass,age,contact,dob) VALUES ('$fullName','$email','$password','0','nill','mm/dd/yyyy');";
        $result=mysqli_query($conn,$insertquery);
        if($result)
        {
            echo("user registered successfully");   
        }else{
            echo "Error: " . $insertquery . "<br>" . $conn->error;
        }
    
    }
 }
?>