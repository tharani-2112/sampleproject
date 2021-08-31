<?php
    session_start();
    unset($_SESSION["id"]);
    unset($_SESSION["email"]);
    unset($_SESSION["password"]);
    header("Location: ../employee/employee_login.php");
?>