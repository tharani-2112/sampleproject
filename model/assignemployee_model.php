<?php
include 'C://xampp/htdocs/leave_Management_System/includes/config.php';

class Assign{
    private $connToDB;
    public function __construct(){
        $this->connToDB = new DB;
    }

    public function assign()
    {
          
        $conn = $this->connToDB->connToDB(); 

        $managerid  = $_GET['managerid'];
        $employee   = $_POST['email'];

        foreach($employee as $empid){
        $query = "INSERT INTO manageremployee (manager,employee) VALUES ('$managerid','$empid') ";
        
          try{
              $result = mysqli_query($conn,$query);
              if(!$result){
                  throw new Exception("could not Assign");
              }
          }catch(Exception $e){
               echo "Message: " .$e->getMessage();
          }
        
    }
}
    public function update()
    {    
        $conn = $this->connToDB->connToDB(); 

        $managerid  = $_GET['managerid'];
        $employee   = $_POST['email'];
       foreach ($employee as $empid){
        $sql =  "SELECT id FROM tblemployees WHERE email='$empid'";
        $result = mysqli_query($conn,$sql);
        $row1 = mysqli_fetch_array($result);
       }
       $query1="SELECT employee FROM manageremployee WHERE manager='$managerid'";
       $result1 = mysqli_query($conn,$query1);
       $row2= mysqli_fetch_array($result1);
       foreach($row2 as $emp){
           if(!in_array($emp,$row1)){

            $query = " DELETE FROM manageremployee WHERE employee='$emp'";
            try{
                $result = mysqli_query($conn,$query);
                if(!$result){
                    throw new Exception("could not Assign");
                }
            }catch(Exception $e){
                 echo "Message: " .$e->getMessage();
            }
           }
        }

       }
}
$admin = new Assign;