<?php
session_start();
include ("C://xampp/htdocs/leave_Management_System/model/addemployee_model.php");

class Signup{
    public $signup;
    public function __construct(){
        $this->signup = new AddEmp();
    }

    public function addNewEmp(){
        $result = $this->signup->addEmployee();
        if($result){
            header("Location: ../view/admin/employee_list.php");
        }
        else{
            //echo "Username or Password is incorrect";
            header("Location: ../view/admin/addemployee.php");
        }
    }
}
$employee = new signup();
$employee -> addNewEmp();
