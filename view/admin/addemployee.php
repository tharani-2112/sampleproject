<?php
include "C://xampp/htdocs/leave_Management_System/includes/header.php";
?>
<body>
<a href="http://localhost/leave_management_System/view/admin/admin_page.php"><button id="button" type="submit" name="submit">Back to Home</button></a>
    <div id="container">
    <img id="image" src="http://localhost/crud/css/usericon.jpg" height="70" width='70'/>
    <form class="form" method="post" action="http://localhost/leave_Management_System/controller/addemployee_controller.php" name="form">
      <h5 class="heading">ADD EMPLOYEE DETAILS</h5>
        <input class="inputs" name="firstName" id="FirstName"  required type="text" max="20" placeholder="Full Name"/>
        <input class="inputs" name="lastName" id="LastName"  required type="text" max="20" placeholder="Last Name"/><br><br>
        
        <input class="inputs"  name="email" id="Email" required type="email" placeholder="Email address"/>
        <input class="inputs" name="mobile" id="ps1" required type="number" placeholder="Mobile number"/><br><br>
        
        <input class="inputs" name="password" required type="password" placeholder="Password"/>
      
        <select  class="inputs" name="gender" style="color:grey;" required autocomplete="off">
           <option value="" style="background-color:black;">Gender...</option>                                          
           <option value="Male" style="background-color:black;">Male</option>
           <option value="Female" style="background-color:black;">Female</option>
           <option value="Other" style="background-color:black;">Other</option>
        </select><br><br>
        
        <input class="inputs"  name="state" placeholder="State" required>
        <input class="inputs"  name="country" placeholder="Country" required><br><br>

        <input name="address" class="inputs" type="text" required placeholder="Enter your Address">

        <button id="button" type="submit" name="submit">Add employee</button><br>
    </form>
<?php
include "C://xampp/htdocs/leave_Management_System/includes/footer.php";
?>