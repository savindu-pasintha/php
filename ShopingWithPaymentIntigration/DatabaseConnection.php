<?php
class DatabaseConnect
{
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbNmae = "image";
    public $conn = "";
    
            
    public function openConnection()
    {
        try {
            $conn = mysqli_connect('$servername','$username',' $password','$dbNmae');
            // Create connection
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            } else {

                echo "Connected successfully";
            }
        } catch (Exception $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function closeConnection()
    {
        try {
            //close connection
            mysqli_close('$conn');
        } catch (Exception $e) {
            echo "Connection Close failed: " . $e->getMessage();
        }
    }
}
?>