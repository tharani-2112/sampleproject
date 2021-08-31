<?php
include "C://xampp/htdocs/leave_Management_System/includes/header_admin.php";
?>
<body>
<a href="http://localhost/leave_management_System/view/admin/admin_page.php"><button id="button" type="submit" name="submit">Back to Home</button></a>
    <div id="container">
    <h2 class="heading">Add Leave Type</h2>
    <form class="form" action="http://localhost/leave_Management_System/controller/add_leave_controller.php" method="post">
     
        <input class="inputs"  name="leavetype" type="text" required placeholder="Leave Type"/><br><br>
        <p class="subTest"></p>
        <input class="inputs" name="description" type="text"  required placeholder="Description"/><br>
        <p class="subTest"><?php  ?></p><br>
        <button id="button" type="submit" name="submit">Add</button>
    </form>
<?php
include "C://xampp/htdocs/leave_Management_System/includes/footer.php";
?>