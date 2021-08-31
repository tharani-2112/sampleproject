<?php
include 'C://xampp/htdocs/leave_Management_System/includes/connect.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="UPDATE tblemployees SET deleted=1 WHERE id='$id'";
    $result=mysqli_query($mysqli,$sql);
    if($result)
    {
        header('location: employee_list.php');
    }
    else
    {
        die(mysqli_error($mysqli));
    }
}
?>