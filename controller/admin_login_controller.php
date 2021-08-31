<?php
session_start();
include ("C://xampp/htdocs/leave_Management_System/model/admin_login_model.php");

class Login{
    public $login;
    public function __construct(){
        $this->login = new Adminlogin();
    }

    public function loginAdmin(){
        $result = $this->login->signIn();
        if($result){
            header("Location: ../view/admin/admin_page.php");
        }
        else{
            //echo "Username or Password is incorrect";
            header("Location: ../view/admin/admin_login.php");
        }
    }
}
$admin = new login();
$admin -> loginAdmin();

