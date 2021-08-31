<?php
include 'C://xampp/htdocs/leave_Management_System/includes/config.php';

class Adminlogin{
    private $connToDB;
    public function __construct(){
        $this->connToDB = new DB;
    }
    
    public function action()
    {
          $conn = $this->connToDB->connToDb();
          $remark = $_POST['adremark'];
          $status = $_POST['request'];
          $id = $_GET['actionid'];
    
          $query = " UPDATE tblapplyleave SET adminremarks ='$remark' WHERE lid='$id' ";
          
          try{
              $result = mysqli_query($conn,$query);
    
              if(!$result){
                  throw new Exception("Error in selecting values");
              }
          }catch(Exception $e){
               echo "Message: " .$e->getMessage();
          }
          //mysqli_close($conn);
          
          if($status=='accept'){
            $this->approve();
        }else if($status=='deny'){
            $this->deny();
        }
       
    }
    public function approve(){
        
          $conn = $this->connToDB->connToDb();
          $id = $_GET['actionid'];
    
    
          $query1 = "UPDATE tblapplyleave SET status='Approved' WHERE lid='$id'";
          try{
              $result = mysqli_query($conn,$query1);
              if(!$result){
                  throw new Exception("Error in selecting values");
              }
          }catch(Exception $e){
               echo "Message: " .$e->getMessage();
          }
          mysqli_close($conn);
          
         
    
    }
    public function deny(){
        
        $conn = $this->connToDB->connToDb();
        $id = $_GET['actionid'];
        
      
        $query2 = "UPDATE tblapplyleave SET status='Denied' WHERE lid='$id'";
        try{
            $result = mysqli_query($conn,$query2);
            if(!$result){
                throw new Exception("Error in selecting ");
            }
        }catch(Exception $e){
             echo "Message: " .$e->getMessage();
        }
        mysqli_close($conn);
  
  }
}
$admin = new Adminlogin;