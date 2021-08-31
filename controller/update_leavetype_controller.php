<?php
session_start();
include ("C://xampp/htdocs/leave_Management_System/model/update_leavetype_model.php");

class Signup{
    public $signup;
    public function __construct(){
        $this->signup = new AddLeave();
    }

    public function updateLeaveType(){
        $result = $this->signup->updateLeave();
        if($result){
            header("Location: http://localhost/leave_Management_System/view/admin/manageleavetype.php");
        }
        /*else{
        
            header("Location: ../admin/update_leavetype.php");
        }*/
    }

    public function details(){
        return $this->signup->leave();
        
    }
}
$leave = new signup();
$leave -> updateLeaveType();


