<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    .d{
        background-color: black;
        color:white;
    }
</style>
</head>
<body>
    <?php
         $x=80;
    ?>

    <div class="d">
    <h1>if-else-else-if</h1>
    <h2> 

    
    <?php 
    
    if($x>40  || $x<90){
        echo "$x>40";
    }elseif($x<=26){
        echo "$x <=26 ";
    }else{
        echo " No Condition";
    }
    
    ?>
    </h2>
    
    
    </div>



</body>
</html>