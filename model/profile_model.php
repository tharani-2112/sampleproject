<?php
include 'C://xampp/htdocs/leave_Management_System/includes/config.php';

class AddEmp{
    private $connToDB;
    public function __construct(){
        $this->connToDB = new DB;
    }

    public function updateEmployee()
    {  
       $conn = $this->connToDB->connToDB();
       $id=$_SESSION['id'];

      if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['firstName']!="" && $_POST["lastName"]!="" && $_POST['email']!="" &&
         $_POST['mobile']!="" && $_POST['password']!="" && $_POST['gender']!="" &&  $_POST['state']!="" && $_POST['country']!=""
         && $_POST['address']!=""){
     
        $firstname= $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $email    = $_POST['email'];
        $mobile   = $_POST['mobile'];
        $password = $_POST['password'];
        $gender   = $_POST['gender'];
        $state    = $_POST['state'];
        $country  = $_POST['country'];
        $address  = $_POST['address'];
        
        $query = "UPDATE tblemployees SET firstName='$firstname',lastName='$lastname',email='$email',mobile='$mobile', 
                  gender='$gender', state='$state' ,country='$country' ,address='$address' where id='$id'";
          try{
              $result = mysqli_query($conn,$query);
              if(!$result){
                  throw new Exception("could not update values");
                
              }
          }catch(Exception $e){
               echo "Message: " .$e->getMessage();
          }
          return true;
      }
    }
    public function employee(){

       $conn = $this->connToDB->connToDB();
       $id=$_SESSION['id'];
       $sql="SELECT * FROM tblemployees WHERE id =$id";
       $result=mysqli_query($conn,$sql);
       $row=mysqli_fetch_array($result);

       return $row;
    }
}
$admin = new AddEmp;