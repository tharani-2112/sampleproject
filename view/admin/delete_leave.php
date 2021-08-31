<?php
include 'C://xampp/htdocs/leave_Management_System/includes/connect.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="DELETE FROM tblleavetype WHERE id=$id";
    $result=mysqli_query($mysqli,$sql);
    if($result)
    {
        header('location: manageleavetype.php');
    }
    else
    {
        die(mysqli_error($mysqli));
    }
}
?>