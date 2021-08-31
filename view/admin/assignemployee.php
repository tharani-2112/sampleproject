<?php
include "C://xampp/htdocs/leave_Management_System/includes/header_admin.php";
include "C://xampp/htdocs/leave_Management_System/includes/connect.php"

?>
<body>
<a href="employee_list.php"><button id="button" type="submit" name="submit">Back</button></a>
    <div id="container">
    <h2 class="heading">Assign Employee to the Manager</h2>
    <?php if($_GET['v']==0){?>
    <form class="form" action="http://localhost/leave_Management_System/controller/assignemployee_controller.php?managerid=<?php echo $_GET['managerid']; ?> " method="POST">
        <div class="multiselect">
            <div class="selectBox" onclick="showCheckboxes()">
        <select  class="inputs" name="" style="color:grey;" autocomplete="off">
         <option style="background-color:black;" value="test">Assign Employees</option>  </select>
         <div class="overSelect"></div>
            </div>
            <div id="checkboxes">
         <?php
          $sql = mysqli_query($mysqli, "SELECT email,id FROM tblemployees WHERE id NOT IN  
                            (SELECT employee FROM manageremployee) AND manager!=1 AND deleted!=1");
          $row = mysqli_num_rows($sql);
          
              if(empty($row)){ ?>
                  <label> <?php echo "No employees left"; ?></label>
             <?php }
              else { while ($row = mysqli_fetch_array($sql)){ ?>
              <label>
                      <input type="checkbox" name='email[]' value="<?php echo  $row['id']; ?>" /><?php echo $row['email'];?></label>
                <?php }
              }  ?>
          </div>
           
      <br>
        <button id="button" type="submit" name="submit" value="submit">Assign</button>
    </form><?php }
    else {?>
        <form class="form" action="http://localhost/leave_Management_System/controller/assignemployee_controller.php?managerid=<?php echo $_GET['managerid']; ?>&view=1" method="POST">
            <div class="multiselect">
                <div class="selectBox" onclick="showCheckboxes()">
            <select  class="inputs" name="" style="color:grey;" autocomplete="off">
             <option style="background-color:black;" value="test">Assign Employees</option>  </select>
             <div class="overSelect"></div>
                </div>
                <div id="checkboxes">
             <?php
              $managerid = $_GET['managerid'];
              $sql = mysqli_query($mysqli, "SELECT email FROM tblemployees WHERE id IN 
                                   (SELECT employee FROM manageremployee WHERE manager = '$managerid')");
              $row = mysqli_num_rows($sql);
                      while ($row = mysqli_fetch_array($sql)){ ?>
                  <label>
                          <input type="checkbox" name='email[]' value="<?php echo  $row['email']; ?>" checked /><?php echo $row['email']; ?></label>
                    <?php }
                    $sql = mysqli_query($mysqli, "SELECT email FROM tblemployees WHERE id NOT IN 
                    (SELECT employee FROM manageremployee WHERE manager = '$managerid')AND manager!=1 AND deleted!=1");
                   $row1 = mysqli_num_rows($sql);
                  while ($row1 = mysqli_fetch_array($sql)){ ?>
              <label>
                <input type="checkbox" name='email[]' value="<?php echo  $row1['email']; ?>"  /><?php echo $row1['email']; ?></label>
                <?php  }  ?>
              </div>
          <br>
            <button id="button" type="submit" name="submit" value="submit">Assign</button>
        </form>
   <?php } ?>
    <script src="http://localhost/leave_Management_System/assets/checkbox.js"></script>
<?php
include "C://xampp/htdocs/leave_Management_System/includes/footer.php";
?>