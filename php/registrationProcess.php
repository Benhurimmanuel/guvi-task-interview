<?php 


if(isset($_POST)) {
    require('config.php') ;
    $fullName = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"]; 

    $query = "SELECT * FROM user WHERE email = ?";
    $stmt = mysqli_stmt_init($conn);
       
        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo("errror");
        } else {

            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);

            if ($rowCount > 0) {
                echo("user already exists");
            } else {
                $insertquery = "INSERT INTO user (fullName,email,pass,age,contact,dob) VALUES (?, ?,?,'0','nill','mm/dd/yyyy')";
                $stmt = mysqli_stmt_init($conn);

                if (mysqli_stmt_prepare($stmt, $insertquery)) {
                    mysqli_stmt_bind_param($stmt, "sss", $fullName,$email, $password);
                    mysqli_stmt_execute($stmt);
                    echo("user registered successfully");                     
                } else {
                    echo "Error: " . $insertquery . "<br>" . $conn->error;
                }
 }
}
}
?>