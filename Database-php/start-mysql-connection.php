<?php
$connection=mysqli_connect('localhost','root','','userdb');

if(mysqli_connect_errno()){
    die('Database Not Connected.'.mysqli_connect_error());
}else{
    //echo "Connected Databse.";
}


// echo include('start-mysql-connection.php');
?>
