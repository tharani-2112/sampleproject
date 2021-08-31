<?php
include "C://xampp/htdocs/leave_Management_System/includes/header.php";
include "C://xampp/htdocs/leave_Management_System/controller/update_employee_controller.php";

$employee = new signup();
$detail= $employee -> details();

?>
<body>
    <a href="admin_page.php" ><button id="button" type="submit" name="submit">Back to Home</button><a>
    <div id="container">
    <img id="image" src="http://localhost/crud/css/usericon.jpg" height="70" width='70'/>
    <form class="form" method="post" action="http://localhost/leave_Management_System/controller/update_employee_controller.php?updateid=<?php echo $_GET['updateid']; ?>" name="form">
      <h5 class="heading">UPDATE EMPLOYEE DETAILS</h5>
        <input class="inputs" name="firstName" id="FirstName"  required type="text" max="20" placeholder="Full Name" value="<?php echo $detail['firstName'] ;?>"/>
        <input class="inputs" name="lastName" id="LastName"  required type="text" max="20" placeholder="Last Name" value="<?php echo $detail['lastName'] ;?>"/><br><br>
        
        <input class="inputs"  name="email" id="Email" required type="email" placeholder="Email address" value="<?php echo $detail['email'];?>"/>
        <input class="inputs" name="mobile" id="ps1" required type="number" placeholder="Mobile number" value="<?php echo $detail['mobile'];?>"/><br><br>
        
      
        <select  class="inputs" name="gender" style="color:grey;" required autocomplete="off">
           <option value="" style="background-color:black;">Gender...</option>                                          
           <option value="Male" style="background-color:black;" <?php if (isset($detail['gender']) && $detail['gender']=="Male") echo "selected";?> >Male</option>
           <option value="Female" style="background-color:black;" <?php if (isset($detail['gender']) && $detail['gender']=="Female") echo "selected";?> >Female</option>
           <option value="Other" style="background-color:black;" <?php if (isset($detail['gender']) && $detail['gender']=="Other") echo "selected";?> >Other</option>
        </select>
        
        <input class="inputs" style="color:grey;" name="state" placeholder="State" required value="<?php echo $detail['state'];?>"/><br><br>
        <input class="inputs" style="color:grey;" name="country" placeholder="Country" required value="<?php echo $detail['country'];?>" />

        <INPUT name="address" class="inputs" type="text"  style="color:grey;" required placeholder="Enter your Address" value="<?php echo $detail['address'];?>" /><br><br>

        <button id="button" type="submit" name="submit">Update</button><br>
    </form>
<?php
include "C://xampp/htdocs/leave_Management_System/includes/footer.php";
?>