<?php 

require_once('config.php') ;
session_start();
$email=$_SESSION['useremail']; 
if(isset($email)){
    $query="SELECT * from user WHERE email='$email';";
    $result= mysqli_query($conn,$query);
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
            $fullname = $row['fullName'];
            $DOB=  $row["dob"];    
            $email =  $row["email"];
            $age =  $row["age"];
            $contact =  $row["contact"];
        }
    }
}else{
    header('location:login.php');
}

?>