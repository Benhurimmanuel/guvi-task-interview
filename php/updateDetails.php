<?php 
   
   require_once('config.php') ;
//    session_start();
//    if(isset($_SESSION['useremail'])){
    if(isset($_POST)) {
    $fullName = $_POST["fullname"];
    $DOB= $_POST["dob"];   
    if($DOB="INVALID DATE"){
        echo("DOB is set to today,");
        $DOB=date('m/d/Y');
    }
    $from = new DateTime($DOB);
    $date = date('m/d/Y');
    $val=((strtotime($date)-strtotime($DOB))/(24*3600*365));
    $age=(number_format($val));

    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $query = "UPDATE user SET fullname = '$fullName',dob='$DOB',age='$age',contact='$contact' Where email='$email';";
    $result= mysqli_query($conn,$query);
    if($result){
        echo(" user Successfully Updated");
    }else{
        echo('user Not Registered, Please Try Again');
    }
 }
// }else{
//     header("Location:../module/index.php");
// }
?>