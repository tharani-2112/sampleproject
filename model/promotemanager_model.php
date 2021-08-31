<?php
include 'C://xampp/htdocs/leave_Management_System/includes/config.php';

class Promote{
    private $connToDB;
    public function __construct(){
        $this->connToDB = new DB;
    }

    public function promoteManager($managerstatus,$id)
    {
        $conn = $this->connToDB->connToDB();
        $query = "UPDATE tblemployees SET manager='$managerstatus' WHERE id='$id'";
        if($managerstatus==0){
            $query1 = "DELETE FROM manageremployee WHERE manager=$id";
            $result = mysqli_query($conn,$query1);
        }
       
        
          try{
              $result = mysqli_query($conn,$query);
              if(!$result){
                  throw new Exception("could not promote");
              }
          }catch(Exception $e){
               echo "Message: " .$e->getMessage();
          }
    }

}
$admin = new Promote;