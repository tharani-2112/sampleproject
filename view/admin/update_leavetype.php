<?php
include "C://xampp/htdocs/leave_Management_System/includes/header_admin.php";
include "C://xampp/htdocs/leave_Management_System/controller/update_leavetype_controller.php";

$leave = new signup();
$detail= $leave -> details();

?>
<body>
<a href="http://localhost/leave_management_System/view/admin/admin_page.php"><button id="button" type="submit" name="submit">Back to Home</button></a>
    <div id="container">
    <h2 class="heading">Add Leave Type</h2>
    <form class="form" action="http://localhost/leave_Management_System/controller/update_leavetype_controller.php?updateid=<?php echo $_GET['updateid']; ?>" method="post">
    
        <input class="inputs"  name="leavetype" type="text" required placeholder="Leave Type" value="<?php echo $detail['leavetype'] ;?>"/><br><br>
        <input class="inputs" name="description" type="text"  required placeholder="Description" value="<?php echo $detail['description'] ;?>"/><br>
        <button id="button" type="submit" name="submit">Update</button>
    </form>
<?php
include "C://xampp/htdocs/leave_Management_System/includes/footer.php";
?>