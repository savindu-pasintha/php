<?php
$con = mysqli_connect('localhost', 'root', '', 'image');
   if (mysqli_connect_errno()) {
    die('Database Not Connected.' . mysqli_connect_error());
   } 
   else {
    //echo "Connected Databse.";

    $staus=$stausMsg='';

        if (isset($_POST['submit'])) {

            $staus="erro";
            if(!empty($_FILES["image"]["name"])){
                $fileName=basename($_FILES["image"]["name"]);
                $fileType=pathinfo($fileName, PATHINFO_EXTENSION);
                $allowType=array('jpg', 'gif', 'png','jpeg');

                if(in_array($fileName,$allowType)){
                    $image=$_FILES["image"]['tmp_name'];
                    $imgContent=addslashes(file_get_contents($image));

                    $insert = "INSERT INTO upload(image) Values('{$imgContent}')";
                    $result=mysqli_query($con,$insert);
                    
                    if($result){
                        $staus="success";
                        $stausMsg="File uploaded successfully.";
                    }else{
                        $stausMsg="File upload failed, please try again";
                    }
                }else{
                    $stauMsg='Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload';
                }
            }else{
                $stauMsg='please select an Image file to upload';
            }
        }
    }   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-center">Upload</h3>
                  
                    <h3>  </h3>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-control">
                            <input type="file" name="image" id="fileToUpload">
                        </div>
                        <div class="btn  text-center">
                            <input type="submit" value="Upload Image" name="submit">
                        </div>
                    </form>
                </div>

                <div class="col-md-6">
                    <h3 class="text-center">Display</h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

