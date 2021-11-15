<?php 
   
   require_once('config.php') ;
    if(isset($_POST)) {
    $fullName = $_POST["fullname"];
    $DOB= $_POST["dob"];   
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    
    $from = new DateTime($DOB);
    $date = date('m/d/Y');
    $val=((strtotime($date)-strtotime($DOB))/(24*3600*365));
    $age=(number_format($val));  
    

    $query = "UPDATE user SET fullname = ?,dob=?,age=?,contact=? Where email=?;";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $query)) {
            mysqli_stmt_bind_param($stmt, "sssss", $fullName,$DOB,$age,$contact,$email);
            mysqli_stmt_execute($stmt);
            echo("user updated successfully"); 
    }else{
            echo("user could not be updated"); 
    }
}

?>