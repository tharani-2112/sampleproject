<?php
session_start();
include ("C://xampp/htdocs/leave_Management_System/model/employee_login_model.php");

class Login{
    public $login;
    public function __construct(){
        $this->login = new Emplogin();
    }

    public function loginEmployee(){
        $result = $this->login->signIn();
        if($result){
            header("Location: ../view/employee/employee_page.php");
        }
        else{
            //echo "Username or Password is incorrect";
            header("Location: ../view/employee/employee_login.php");
        }
    }
}
$employee = new Login();
$employee -> loginEmployee();

