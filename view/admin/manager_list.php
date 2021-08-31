<?php
 include 'C://xampp/htdocs/leave_Management_System/includes/connect.php' ;
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>    
    <title>Employee details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th>Sl.no</th>
              <th>Manager</th>
              <th>Employee</th>
            </tr>
          </thead>
          <tbody>
          <?php

          $sql="SELECT employee,manager FROM manageremployee ";
          $result=mysqli_query($mysqli,$sql);
          
          if($result)
          {                         
            $i=1;
            while($row=mysqli_fetch_array($result))
            { 
              $manager=$row['manager'];
              $employee=$row['employee'];
            
              $query1 = "SELECT email from tblemployees WHERE id=$manager";
              $result1 = mysqli_query($mysqli,$query1);

             $row1 = mysqli_fetch_array($result1);
              $manageremail = $row1 ['email'];
              
              $query2 = "SELECT email from tblemployees WHERE id=$employee"; 
              $result2 = mysqli_query($mysqli,$query2);

              $row2 = mysqli_fetch_array($result2);
              $employeeemail = $row2['email'];

                echo '
                <tr>
                  <th scope="row">'.$i.'</th>
                    <td>'.$manageremail.'</td>
                    <td>'.$employeeemail.'</td>
                </tr>';
                $i++;
                }        
              }
          ?>        
          </tbody>
      </table>
    </div>    
  </body>
</html>