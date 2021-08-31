<?php
session_start();
include ("C://xampp/htdocs/leave_Management_System/model/manageraction_model.php");

class Action{
    public $action;
    public function __construct(){
        $this->action= new Adminlogin();
    }

    public function accept(){
         
        $result = $this->action->action();
        $id= $_GET['managerid'];  
        if($result){
            header("Location: ../view/employee/manageraction.php");
        }
        else{
            //echo "Username or Password is incorrect";
            header("Location: ../view/employee/managerleaves.php?managerid=$id");
            //view/employee/managerleaves.php?managerid=4
        }
    }

}
$employee = new Action();
$employee -> accept();
