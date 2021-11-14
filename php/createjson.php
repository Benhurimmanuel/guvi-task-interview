<?php 
function getData(){
    require('./config.php') ;
$query="SELECT * FROM user;"; 
$result=mysqli_query($conn,$query);
$userData = array();
while($row =  mysqli_fetch_array($result))
{
    $userData[]=array(
        'fullname' => $row["fullName"],
        'DOB'=> $row["dob"],    
        "email" => $row["email"],
        "age" => $row["age"],
        "contact" => $row["contact"]
    );
}
return json_encode($userData);
}
$fileName="../json/user".".json";
if(file_put_contents($fileName,getData())){
    echo ($fileName.' file Created');
    echo(getData());
}else{
    echo ($fileName.'file could not Created');
}

?>