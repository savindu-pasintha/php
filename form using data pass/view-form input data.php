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
   

   <pre>
         <?php 
         
         echo print_r($_GET);
         
         $p=$_GET['email'];
         $q=$_GET['password'];
         $r=$_GET['address'];
         $s=$_GET['address2'];
         $t=$_GET['city'];
         $u=$_GET['state'];
         $v=$_GET['zip'];

         ?>
   </pre>
      

   <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Street</th>
      <th scope="col">Village</th>
      <th scope="col">City</th>
      <th scope="col">Country</th>
      <th scope="col">Zip</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php  echo "{$p}" ; ?></td>
      <td><?php  echo "{$q}" ; ?></td>
      <td><?php  echo "{$r}" ; ?></td>
      <td><?php  echo "{$s}" ; ?></td>
      <td><?php  echo "{$t}" ;  ?></td>
      <td><?php  echo "{$u}" ; ?></td>
      <td><?php  echo "{$v}" ; ?></td>
    </tr>
  </tbody>
</table>



</body>
</html>