<?php
session_start();
include ("C://xampp/htdocs/leave_Management_System/model/action_model.php");

class Action{
    public $action;
    public function __construct(){
        $this->action= new Adminlogin();
    }

    public function accept(){
         
        $result = $this->action->action();
      
        if($result){
            header("Location: ../view/admin/action.php");
        }
        else{
            //echo "Username or Password is incorrect";
            header("Location: ../view/admin/view_leaves.php");
        }
    }

}
$employee = new Action();
$employee -> accept();
