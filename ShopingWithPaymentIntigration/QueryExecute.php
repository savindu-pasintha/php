<?php
//import class name here
use DatabaseConnect;

class QueryExecute
{
    //variables
   public $returnData=null;
   public $error=null;

    public function insert()
    {
        $obj1 = new DatabaseConnect();
     try {
             
        $obj1->openConnection();

        if(isset($_POST['submit']))
        {

        //catch the data in post array
         $fn=$_POST['firstname'];
         $ln=$_POST['lastname'];
         $e=$_POST['email'];
         $p=$_POST['password'];
         $hp=sha1($p);//password ek encript kala  hashed 
         $isdel=0;

         $query="INSERT INTO user(firstname,lastname,email,password,isdeleted) Values('{$fn}','{$ln}','{$e}','{$hp}',{$isdel})";
         $result=mysqli_query($obj1->conn,$query);

          if($result)
          { 
             return $returnData="ADDED-to-Database"; 
           }else{ 
              return $returnData="ADD-failed";
           }
        }else{
         return $returnData="NO-Data";
        }

        
       }catch (Exception $e) {

            return $e->getMessage();

        } finally {
            
            $obj1->closeConnection();
        }

      
    }

    public function update()
    {
        $obj2 = new DatabaseConnect();
        
        
        try {
             
            $obj2->openConnection();
    
            if(isset($_POST['submit']))
            {
    
            //catch the data in post array
             $fn=$_POST['firstname'];
             $ln=$_POST['lastname'];
             $e=$_POST['email'];
             $p=$_POST['password'];
             $hp=sha1($p);//password ek encript kala  hashed 
             $isdel=0;
             
             $query="UPDATE user SET  firstname='$_POST[firstname]',lastname='$_POST[lastname]',email='$_POST[email]',password='$hp' where id='$_POST[id]'  ";
             $result=mysqli_query($obj2->conn,$query);
    
              if($result)
              { 
                 return $returnData="Update-to-Database"; 
               }else{ 
                  return $returnData="Update-failed";
               }
            }else{

             return $returnData="NO-Data";
            }
    
           
           }catch (Exception $e) {
    
                return $e->getMessage();
    
            } finally {
                
                $obj2->closeConnection();
            }
       
    }

    public function delete()
    {
        $obj3 = new DatabaseConnect();

        try{
        $obj3->openConnection();

        if (isset($_POST['submit'])) {
            //catch the data in post array when submit
            $id = $_POST['id'];

            $query = "DELETE FROM user where id='$_POST[id]'  ";
            $result = mysqli_query('$connection', $query);
            
            if ($result) {
                echo mysqli_affected_rows($obj3->conn) . "Deleted";
            } else {
                $returnData="failed Delet";
            }
        } else {
            return $returnData="NO-Data";
        }

        return $returnData;

    }catch (Exception $e) {
    
        return $e->getMessage();

    } finally {
        
        $obj3->closeConnection();
    }

        
    }

    public function select()
    {
        $obj4 = new DatabaseConnect();
        $obj4->openConnection();

        try{

            $query="SELECT id,firstname,lastname,email,password FROM user";
            $result=mysqli_query($connection,$query);
           

        }catch(Exception $e){

            return $e->getMessage();

        }finally {
            $obj4->closeConnection();
        }

       
    }
}
