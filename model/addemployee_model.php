<?php
include 'C://xampp/htdocs/leave_Management_System/includes/config.php';

class AddEmp{
    private $connToDB;
    public function __construct(){
        $this->connToDB = new DB;
    }

    public function addEmployee()
    {
      if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['firstName']!="" && $_POST["lastName"]!="" && $_POST['email']!="" &&
         $_POST['mobile']!="" && $_POST['password']!="" && $_POST['gender']!="" &&  $_POST['state']!="" && $_POST['country']!=""
         && $_POST['address']!=""){

        $conn = $this->connToDB->connToDB();
        $firstname= $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $email    = $_POST['email'];
        $mobile   = $_POST['mobile'];
        $password = $_POST['password'];
        $gender   = $_POST['gender'];
        $state    = $_POST['state'];
        $country  = $_POST['country'];
        $address  = $_POST['address'];
        
        $query = "INSERT INTO tblemployees (firstName,lastName,email,mobile,password,gender,state,country,address)
                   VALUES ('$firstname','$lastname','$email','$mobile',md5('$password'),'$gender','$state','$country','$address')";
          try{
              $result = mysqli_query($conn,$query);
              if(!$result){
                  throw new Exception("could not insert values");
              }
          }catch(Exception $e){
               echo "Message: " .$e->getMessage();
          }
      }
    }
}
$admin = new AddEmp;