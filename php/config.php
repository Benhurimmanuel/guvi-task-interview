<?php
//local db 
// $host="localhost";
// $user="root";
// $password="";
// $db="guvi_task";

//remote db
$host="remotemysql.com";
$user="S2EOZJwt35";
$password="8E9AjGJefc";
$db="S2EOZJwt35";

$conn=mysqli_connect($host,$user,$password,$db);

  if(!$conn){
    echo"error in connection".mysqli_connect_error();	
  }
  // echo "Connected successfully";
?>