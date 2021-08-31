<?php
session_start();
include ("C://xampp/htdocs/leave_Management_System/Model/profile_model.php");

class Signup{
    public $signup;
    public function __construct(){
        $this->signup = new AddEmp();
    }

    public function updateEmp(){
        $result = $this->signup->updateEmployee();
        if($result){
            header("Location: employee_page.php");
        }
        /*else{
    
            header("Location:profile.php");
        }*/
    }

    public function details(){
        return $this->signup->employee();
        
    }
}
$employee = new signup();
$employee -> updateEmp();

