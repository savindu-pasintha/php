<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //session variable eke adala usert data nattn auto redirect karanwa login.pphp ekt
    is(isset($_SESSION['user'])){
        header("Location : login.php");
    }
    ?>



</body>
</html>