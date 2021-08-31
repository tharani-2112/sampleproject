<?php
include "C://xampp/htdocs/leave_Management_System/includes/header.php";
?>
<body>
<a href="http://localhost/leave_Management_System/view/employee/employee_page.php"><button id="button" type="submit" name="submit">Back to Home</button></a>
    <div id="container">
    <h2 class="heading">Take Action For The Leave</h2>
    <form class="form" action="http://localhost/leave_Management_System/controller/manageraction_controller.php?actionid=<?php echo $_GET['actionid']; ?>&managerid=<?php echo $_GET['managerid'] ;?>"  method="post">
        <input class="inputs" name="adremark" type="text" required placeholder="Remarks"/><br><br>
        <div class="inputs">
        <input  type="radio" value="accept" name="request"/>Accept
        <input  type="radio" value="deny" name="request"/>Deny
    </div><br>
    <button id="button" type="submit" name="submit" value="submit">Submit</button>
    </form>
<?php
include "C://xampp/htdocs/leave_Management_System/includes/footer.php";
?>