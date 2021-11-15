<?php 

require_once('config.php') ;
session_start();
$email=$_SESSION['useremail']; 

if(isset($email)){
    $query = "SELECT * FROM user WHERE email = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo("22");
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);                                 
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    $fullname=$row['fullName'];
                    $DOB=$row['dob'];
                    $age=$row['age'];
                    $contact=$row['contact'];
                    }
            }else{
                echo("in else");
            }
        }
    }

?>

