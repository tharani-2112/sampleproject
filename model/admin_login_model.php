<?php
include 'C://xampp/htdocs/leave_Management_System/includes/config.php';

class Adminlogin{
    private $connToDB;
    public function __construct(){
        $this->connToDB = new DB;
    }

    public function signIn()
    {
      if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['username']!="" && $_POST["password"]!="")
      {
          $conn = $this->connToDB->connToDb();
          $username = $_POST['username'];
          $password = $_POST['password'];
          $query = " SELECT * FROM admin WHERE username='$username' AND password='$password' ";
          try{
              $result = mysqli_query($conn,$query);
              if(!$result){
                  throw new Exception("Error in selecting values");
              }
          }catch(Exception $e){
               echo "Message: " .$e->getMessage();
          }
          $row = mysqli_fetch_array($result);
          if($row['username']==$username && $row['password']==$password){
              return true;
          }
          else{
              return false;
          }
      }
    }
}
$admin = new Adminlogin;