<?php
include "C://xampp/htdocs/leave_Management_System/includes/header_admin.php";
?>
<body>

<div class="dropdown">
  <button class="dropbtn">Employee</button>
  <div class="dropdown-content">
    <a href="addemployee.php">Add Employee</a>
    <a href="employee_list.php">Manage Employee</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Leave</button>
  <div class="dropdown-content">
    <a href="add_leavetype.php">Add Leave Type</a>
    <a href="manageleavetype.php">Manage leave Type</a>
  </div>
</div> 
<div class="dropdown">
  <button class="dropbtn">Leave Management</button>
  <div class="dropdown-content">
    <a href="view_leaves.php">All leaves</a>
  </div>
</div> 
<div class="dropdown">
 <a href="admin_logout.php"><button class="dropbtn">Log out</button></a>
</div>

<div class="welcome">
<h2><?php echo "Admin logged in successfully"?> </h2>
<?php
include "C://xampp/htdocs/leave_Management_System/includes/footer.php";
?>