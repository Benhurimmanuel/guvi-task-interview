<?php 
require_once('config.php') ;
if(isset($_POST)){
    $email = $_POST["email"];
    $password = $_POST["password"];

        $query = "SELECT * FROM user WHERE email = ? AND pass =?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo("22");
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $email,$password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_fetch_assoc($result)>0) {
                echo(true);
                session_start();
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $_SESSION['useremail'] = $email; 
                }
                else{
                    echo(false);
                }
        }
            
}
?>