<?php
session_start();
include ("C://xampp/htdocs/leave_Management_System/model/assignemployee_model.php");

class Manager{
    public $signup;
    public function __construct(){
        $this->signup = new Assign();
    }
    public function main(){
     if($_GET['view']==true){
         $this->updateEmployee();
     }
     else{
         $this->assignemployee();
     }
    }

    public function assignEmployee(){
    
        $result = $this->signup->assign();
    
       if(!$result){
            header("Location: ../view/admin/employee_list.php");
        }
        else{
            header("Location: ../view/admin/assignemployee.php");
        }
    }
    public function updateEmployee(){
    
        $result = $this->signup->update();
        
       if(!$result){
            header("Location: ../view/admin/employee_list.php");
        }
        else{
            header("Location: ../view/admin/assignemployee.php");
        }
    }
    
}
$employee = new Manager();
$employee -> main();