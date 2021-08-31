<?php
include "C://xampp/htdocs/leave_Management_System/includes/header_admin.php";
include "C://xampp/htdocs/leave_Management_System/includes/connect.php"

?>
<body>
<a href="employee_list.php"><button id="button" type="submit" name="submit">Back</button></a>
    <div id="container">
    <h2 class="heading">Assign Employee to the Manager</h2>
    <form class="form" action="http://localhost/leave_Management_System/controller/promotemanager_controller.php?managerid=<?php echo $_GET['managerid']; ?>" method="post">
        <div class="multiselect">
            <div class="selectBox" onclick="showCheckboxes()">
        <select  class="inputs" name="" style="color:grey;" autocomplete="off">
         <option style="background-color:black;" value="">Assign Employees</option>  </select>
         <div class="overSelect"></div>
            </div>
            <div id="checkboxes">
         <?php
          $sql = mysqli_query($mysqli, "SELECT email FROM tblemployees WHERE manager!=1 AND deleted!=1");
          $row = mysqli_num_rows($sql);
          
          while ($row = mysqli_fetch_array($sql)){?>
            
          <label>
                <input type="checkbox" name='id' /><?php echo $row['email'];?></label>

                <?php } ?>
          </div>
           
      <br>
        <button id="button" type="submit" name="submit">Assign</button>
    </form>
    <script src="http://localhost/leave_Management_System/assets/checkbox.js"></script>
<?php
include "C://xampp/htdocs/leave_Management_System/includes/footer.php";
?>