<?php
include 'C://xampp/htdocs/leave_Management_System/includes/config.php';

class Emplogin{
    private $connToDB;
    public function __construct(){
        $this->connToDB = new DB;
    }

    public function signIn()
    {
      if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['email']!="" && $_POST['password']!="")
      {
          $conn     = $this->connToDB->connToDB();
          $email    = $_POST['email'];
          $password = $_POST['password'];
          
          $query    = "SELECT * FROM tblemployees WHERE email='$email' AND password=md5('$password') ";
          
          try{
              $result = mysqli_query($conn,$query);
              if(!$result){
                  throw new Exception("Error in selecting values");
              }
          }catch(Exception $e){
               echo "Message: " .$e->getMessage();
          }
          $row = mysqli_fetch_array($result);
          
          if(!empty($row)){
              $_SESSION['id']        = $row['id'];
              $_SESSION['firstName'] = $row['firstName'];
              $_SESSION['email']     = $row['email'];
              return true;
          }
          else{
              return false;
          }
        }
    }
}
$admin = new Emplogin;
