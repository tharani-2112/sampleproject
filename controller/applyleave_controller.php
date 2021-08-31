<?php
session_start();
include ("C://xampp/htdocs/leave_Management_System/model/applyleave_model.php");

class Signup{
    public $signup;
    public function __construct(){
        $this->signup = new ApplyLeave();
    }

    public function leave(){
        $result = $this->signup->applyLeave();
        $id= $_SESSION['email'];
        if($result){
            header("Location: ../view/employee/applyleave.php");
        }
        else{
            header("Location: ../view/employee/leavehistory.php?leaveid=$id");
        }
    }
}
$employee = new Signup();
$employee -> leave();