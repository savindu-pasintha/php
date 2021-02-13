<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    if (isset($_POST['btn'])) {
        if (isset($_POST['ck1'])) {
            $v1 = $_POST['ck1'];
            //  $v1 = "box 1";
        }
        if (isset($_POST['ck2'])) {
            $v2 = $_POST['ck2'];
        }
        if (isset($_POST['ck3'])) {
            $v3 = $_POST['ck3'];
        }
        if (isset($_POST['ck4'])) {
            $v4 = $_POST['ck4'];
        }
    }


function one(){
    foreach ($_POST['ck4'] as $x){
        echo "<p style=color:red>  $x </p>"  ;
    }
}


    ?>

    <form method="post" action=" <?php echo $_SERVER['PHP_SELF'] ?>">

        <input type="checkbox" name="ck1" value="red" /> RED </br>
        <input type="checkbox" name="ck2" value="green" /> GREEN</br>
        <input type="checkbox" name="ck3" value="blue" /> BLUE</br>
        <input type="radio" name="ck4" value="orange" /> ORANGE</br>

        <input type="submit" name="btn" value="submit btn" /> </br>
    </form>
    </br>

    <h><?php echo $v1; ?></h> </br>
    <h><?php echo $v2; ?></h> </br>
    <h><?php echo $v3; ?></h> </br>
    <h><?php echo $v4; ?></h> </br>

</body>

</html>