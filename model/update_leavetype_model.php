<?php
include 'C://xampp/htdocs/leave_Management_System/includes/config.php';

class AddLeave{
    private $connToDB;
    public function __construct(){
        $this->connToDB = new DB;
    }

    public function updateLeave()
    {  
       $conn = $this->connToDB->connToDB();
       $id=$_GET['updateid'];

      if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['leavetype']!="" && $_POST["description"]!=""){
     
        $leavetype= $_POST['leavetype'];
        $description = $_POST['description'];
        
        $query = "UPDATE tblleavetype SET leavetype='$leavetype',description='$description' where id='$id'";
          try{
              $result = mysqli_query($conn,$query);
              if(!$result){
                  throw new Exception("could not update values");
              }
          }catch(Exception $e){
               echo "Message: " .$e->getMessage();
          }
      }
    }
    public function leave(){

       $conn = $this->connToDB->connToDB();
       $id=$_GET['updateid'];
       $sql="SELECT * FROM tblleavetype WHERE id =$id";
       $result=mysqli_query($conn,$sql);
       $row=mysqli_fetch_array($result);

       return $row;
    }
}
$admin = new AddLeave;