<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function writeMsg($p) {
        if($p=="savindu"){
           $n="savindu pasingtha";
           echo $n;
        } elseif($p=="supun"){
                $n="supusulakshana";
                echo $n;
        }else{$n="Wrong"; echo $n;}
    }


    function x($p1=0,$p2="savindu",$p3){

        global $n1,$n3;
        
        if($p2=="savindu"){
            $n2="savindu pasingtha";
         } elseif($p1==15){
                 $n1=15;
         }elseif($p3=="supun"){
            $n3="supusulakshana";
         }else{$n3="Wrong";}

         return $p1."---".$n1."------".$p2."--".$n2."-----".$p3."".$n3;
    }
    ?>



    <div>
        <h1>--worked -nameoffunc()--</h1>
        <p> 
        <?php
           writeMsg("supu");
           ?>
           </p>
    </div>

    <div>
        <h1>--worked x($p,$p2,$p3)--</h1>
        <p> 
        <?php
        echo  x(15,"savindu","supun");
           ?>
        </p>
    </div>
</body>
</html>