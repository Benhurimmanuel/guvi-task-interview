<?php 
   
   require_once('./config.php') ;
//    session_start();
//    if(isset($_SESSION['useremail'])){
    if(isset($_POST)) {
    $fullName = $_POST["fullname"];
    $DOB= $_POST["dob"];    
    $email = $_POST["email"];
    $age = $_POST["age"];
    $contact = $_POST["contact"];
    $query = "UPDATE user SET fullname = '$fullName',dob='$DOB',age='$age',contact='$contact' Where email='$email';";
    $result= mysqli_query($conn,$query);
    if($result){
        echo("user Successfully Updated");
    }else{
        echo('user Not Registered, Please Try Again');
    }
 }
// }else{
//     header("Location:../index.php");
// }
?>