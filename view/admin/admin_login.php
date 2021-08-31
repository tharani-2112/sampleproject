<?php
include "C://xampp/htdocs/leave_Management_System/includes/header_admin.php";
?>
<body>
<a href="http://localhost/leave_management_System/view/admin"><button id="button" type="submit" name="submit">Back to Home</button></a>
    <div id="container">
    <img id="image" src="http://localhost/leave_Management_System/assets/images/adminuser.jpg" height="80" width='80'/>
    <form class="form" action="http://localhost/leave_Management_System/controller/admin_login_controller.php" method="post">
      <h5 class="heading">ADMIN LOGIN HERE</h5>
        <input class="inputs"  name="username" type="text" placeholder="Username"/><br>
        <p class="subTest"></p>
        <input class="inputs" name="password" type="password" placeholder="Password"/><br>
        <p class="subTest"></p><br>
        <button id="button" type="submit" name="submit">Login</button>
    </form>
<?php
include "C://xampp/htdocs/leave_Management_System/includes/footer.php";
?>