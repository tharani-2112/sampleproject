<?php
session_start();
include ("C://xampp/htdocs/leave_Management_System/model/promotemanager_model.php");

class Manager{
    public $signup;
    public function __construct(){
        $this->signup = new Promote();
    }
function main(){
    
    if($_GET['f']=='p'){
      $this->promoteAsManager();
    }
    else{
       $this-> viewAsManager();
    }
}
    public function promoteAsManager(){
        $managerstatus=$_GET['managerstatus'];
        $id=$_GET['promoteid'];
       
        $result = $this->signup->promoteManager($managerstatus,$id);
        
        
       if($managerstatus ==1){
        
            header("Location: ../view/admin/assignemployee.php?managerid=$id&v=0");
        }
        else{
            header("Location: ../view/admin/employee_list.php");
        }
    }


    public function viewAsManager(){

        $id=$_GET['promoteid'];
        
       if($managerstatus ==0){
        
            header("Location: ../view/admin/assignemployee.php?managerid=$id&v=1");
        }
        else{
            header("Location: ../view/admin/employee_list.php");
        }
    }

} 

$employee = new Manager();
$employee -> main();