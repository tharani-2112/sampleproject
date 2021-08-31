<?php
session_start();
include ("C://xampp/htdocs/leave_Management_System/model/add_leave_model.php");

class Signup{
    public $signup;
    public function __construct(){
        $this->signup = new AddLeaveType();
    }

    public function addNewLeave(){
        $result = $this->signup->addLeave();
        if($result){
            header("Location: ../view/admin/leave_list.php");
        }
        else{
            header("Location: ../view/admin/add_leavetype.php");
        }
    }
}
$employee = new signup();
$employee -> addNewLeave();