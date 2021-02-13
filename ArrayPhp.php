<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    $a=array("A","B","C","D","E");
    ?>

<div class="container">
    <ul class="list-group">
        <li class="list-group-item active">Array-Php 
        </li>
        <li class="list-group-item disabled" aria-disabled="true">
        <?php echo print_r($a); ?></li>
        <li class="list-group-item disabled" aria-disabled="true">
        <?php echo "$a[0]"; ?></li>
        <li class="list-group-item disabled" aria-disabled="true">
        <?php echo "$a[1]"; ?></li>
        <li class="list-group-item disabled" aria-disabled="true">
        <?php echo "$a[2]"; ?></li>
        <li class="list-group-item disabled" aria-disabled="true">
        <?php echo "$a[3]"; ?></li>
        <li class="list-group-item disabled" aria-disabled="true">
        <?php echo "$a[4]"; ?></li>

    </ul>
</div>
<br>


<h1>Array-Php foreach($a as $b)</h1>
<?php
foreach ($a as $b) {
     echo "
     <ul>
    <li> $b </li>
    </ul>
     ";
}
?>
<h1>Array-Php echo print_r($a) </h1>
<pre>
     <?php echo print_r($a) ?>
</pre>


</body>
</html>