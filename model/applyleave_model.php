<?php
include 'C://xampp/htdocs/leave_Management_System/includes/config.php';

class ApplyLeave{
    private $connToDB;
    public function __construct(){
        $this->connToDB = new DB;
    }

    public function applyLeave()
    {
      if(isset($_POST['submit']) && !empty($_POST['leavetype']) && !empty($_POST['reason']) && !empty($_POST['from']) 
         && !empty($_POST['to']))
      {
        $conn      = $this->connToDB->connToDB();
        $email     = $_SESSION['email'];
        $leavetype = $_POST['leavetype'];
        $reason    = $_POST['reason'];
        $fromdate  = $_POST['from'];
        $todate    = $_POST['to'];
        
        $query = "INSERT INTO tblapplyleave (email,leavetype,reason,fromdate,todate)VALUES ('$email','$leavetype','$reason','$fromdate','$todate')";
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
$emp = new ApplyLeave;