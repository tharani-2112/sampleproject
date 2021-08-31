<?php
include "C://xampp/htdocs/leave_Management_System/includes/header.php";
?>
<body>
<a href="http://localhost/leave_management_System"><button id="button" type="submit" name="submit">Back to Home</button></a>
    <div id="container">
    <img id="image" src="http://localhost/leave_Management_System/assets/images/usericon.jpg" height="70" width='70'/>
    <form class="form" action="http://localhost/leave_Management_System/controller/employee_login_controller.php" method="post">
      <h5 class="heading">EMPLOYEE LOGIN HERE</h5>
        <input class="inputs"  name="email" type="text" placeholder="Username"/><br><br>
        <input class="inputs" name="password" type="password" placeholder="Password"/><br><br>
        <button id="button" type="submit" name="submit">Login</button>
        
    </form>
<?php
include "C://xampp/htdocs/leave_Management_System/includes/footer.php";
?>