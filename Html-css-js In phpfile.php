<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number variables</title>
    
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
    <style>

    body{
        background-color: white;
    }
    
    .c{
          background-color: blue;
          color:white;
          width: 100%;
          padding: 20px;
      }
      .d{
          background-color: red;
          color:black;
          width: 100%;
          padding: 20px;
      }
      
    </style>
</head>
<body>
     <?php  
     $x=10; $y=60;  
     ?>

    <div class="c">
        <h1>Numeric values with php functions</h1>
    
        <div class="d">
           <h4>Squire root x is :
               <?php echo sqrt($x);  ?>
          </h4>

        <h4>Random x echo rand();  is :
            <?php echo rand();  ?>
        </h4>
     
       <h4>Random in range  rand(100, 800);is :
          <?php echo rand(100, 800);  ?>
       </h4>

       <h4>Absolute x abs(78 - 100.5); is :
           <?php echo abs(78 - 100.5);  ?>
      </h4>

      <h4>Fmod x echo fmod(8,5); is remain  :
          <?php echo fmod(8,5);  ?>
       </h4>

       <h4>Power x  echo pow(2,8); is :
          <?php echo pow(2,8);  ?>
       </h4>
       </div>
    </div>

    <div class="card border border-dark">
        <div class="card-body">
            
            <?php 
            $n=0;
            $i=10;
            ?>
            
            
            
            <h5 class="card-title ">Increment value Auto</h5>
            <p id="demo" class="card-text ">123456879</p>
            <button  type="button" class="btn btn-primary">Click</button>
        </div>
    </div>   
</body>

<script>







</script>
</html>