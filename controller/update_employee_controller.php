<?php
session_start();
include ("C://xampp/htdocs/leave_Management_System/Model/update_employee_model.php");

class Signup{
    public $signup;
    public function __construct(){
        $this->signup = new AddEmp();
    }

    public function updateEmp(){
        $result = $this->signup->updateEmployee();
        if($result){
            header("Location: http://localhost/leave_Management_System/view/admin/employee_list.php");
        }
        /*else{
            
            header("Location: ../admin/update_employee.php");
        }*/
    }

    public function details(){
        return $this->signup->employee();
        
    }
}
$employee = new signup();
$employee -> updateEmp();

