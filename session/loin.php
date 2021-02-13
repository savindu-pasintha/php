<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    
    
    
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php

$user="";
$pass="";$msg="";

if($_SERVER['REQUEST_METHOD']== 'POST'){
 $user=$_POST['name1'];
 $pass=$_POST['name2'];
}


?>



<div>
     <a href="logout.php"> log out to click</a>
</div>

</body>
</html>