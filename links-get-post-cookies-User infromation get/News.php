<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
</head>
<body>
    <pre>
         <?php  print_r($_GET);
         
         
     $Y=$_GET['newsitem]'];
     $x=$_GET['catogary'];
         
         ?>
    </pre>

    <h1>This is News.php page</h1>
    <h3><?php echo $Y;?></h3>
    <h3><?php echo $x;?></h3>
    <button><a href="Home.php?h=15&page=home">next  Page</a></button>
</body>
</html>