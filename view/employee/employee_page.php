<?php
include 'C://xampp/htdocs/leave_Management_System/includes/header.php';
 include 'C://xampp/htdocs/leave_Management_System/includes/connect.php' ;
 session_start();
 ?>

<body>
<div class="dropdown">
 <a href="profile.php"> <button class="dropbtn">Profile</button></a>
</div> 
<div class="dropdown">
  <button class="dropbtn">Leave</button>
  <div class="dropdown-content">
    <a href="applyleave.php">Apply Leave</a>
    <?php 
     $id= $_SESSION['email'];?>
    <a href="leavehistory.php?leaveid=<?php echo $id;?>">Leave History</a>
    <?php 
     $id= $_SESSION['id'];
     $sql="SELECT * FROM tblemployees WHERE id='$id'";
     $result=mysqli_query($mysqli,$sql);
     
     if($result)
     {                         
        $row=mysqli_fetch_array($result);
        $status=$row['manager'];
         if($status == 1){
         ?> <a href="managerleaves.php?managerid=<?php echo $id;?>">Leave Action</a>
       <?php } else{
           echo '';
        }   
      }  
     
    ?>
  </div>
</div>
<div class="dropdown">
 <a href="employee_logout.php"> <button class="dropbtn">Logout</button></a>
</div> 

<div class="welcome">
<h2><?php echo "Employee logged in successfully";?> </h2>
<h2><?php $name= $_SESSION['firstName'];echo "Welcome $name"; ?></h2>
</div>

</body>
</html>