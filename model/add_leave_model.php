<?php
include 'C://xampp/htdocs/leave_Management_System/includes/config.php';

class AddLeaveType{
    private $connToDB;
    public function __construct(){
        $this->connToDB = new DB;
    }

    public function addLeave()
    {
      if(isset($_POST['submit']) && !empty($_POST['leavetype']) && !empty($_POST['description']))
      {
        $conn = $this->connToDB->connToDB();
        $leavetype= $_POST['leavetype'];
        $description = $_POST['description'];
        
        $query = "INSERT INTO tblleavetype (leavetype,description)VALUES ('$leavetype','$description')";
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
$admin = new AddLeaveType;