<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    //start the session
    session_start();



    //value assign
    $_SESSION['text'] = "this is session supper global array value";
    $_SESSION['id'] = 123;

    //out put using al the values
    print_r($_SESSION);

    echo '</br>';
    //

    //current session eke all value delete karann 
    session_unset();
    print_r($_SESSION);



    ?>
</body>

</html>