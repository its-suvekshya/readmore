<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "db_conn.php";

//create connection
$con = mysqli_connect($server,$username,$password,$database);

//check connection
if($con)
{
    echo "Connection Successful";
}

else{
    echo "Connection Failed";
}

?>
