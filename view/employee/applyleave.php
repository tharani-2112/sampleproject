<?php
include "C://xampp/htdocs/leave_Management_System/includes/header.php";
include "C://xampp/htdocs/leave_Management_System/includes/connect.php"
?>
<body>
<a href="http://localhost/leave_management_System/view/employee/employee_page.php"><button id="button" type="submit" name="submit">Back to Home</button></a>
    <div id="container">
    <h1 class="heading" >Apply Leave</h1>
    <form class="form" action="http://localhost/leave_Management_System/controller/applyleave_controller.php" method="post">
     
        <select  class="inputs" name="leavetype" style="color:grey;" required autocomplete="off">
         <option style="background-color:black;" value="">Leave type</option>
         <?php
          $sql = mysqli_query($mysqli, "SELECT leavetype From tblleavetype");
          $row = mysqli_num_rows($sql);
          while ($row = mysqli_fetch_array($sql)){
          echo "<option value='". $row['leavetype'] ."'>" .$row['leavetype'] ."</option>" ;
           }
         ?>
        </select><br>
        <textarea class="inputs" name="reason" type="text"  required placeholder="Reason for Leave"></textarea><br>
        <label class="input" style="color:grey;">From date</label><br>
        <input class="inputs" style="color:grey;" name="from" type="date" required placeholder="From" /><br>
        <label class="input" style="color:grey;">To date</label><br>
        <input class="inputs" style="color:grey;" name="to" type="date" required placeholder="To date" /><br>
        <button id="button" type="submit" name="submit">Apply</button>
    </form>
<?php
include "C://xampp/htdocs/leave_Management_System/includes/footer.php";
?>