<?php
 include 'C://xampp/htdocs/leave_Management_System/includes/connect.php' ;
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>    
    <title>Leave types</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <button><a href ="add_leavetype.php">Add Leave Type</a></button>
        <table class="table">
          <thead>
            <tr>
              <th>Sl.no</th>
              <th>Leave type</th>
              <th>Description</th>
              <th>Process</th>
            </tr>
          </thead>
          <tbody>
          <?php

          $sql="SELECT * FROM tblleavetype";
          $result=mysqli_query($mysqli,$sql);
          
          if($result)
          {                         
            $i=1;
            while($row=mysqli_fetch_assoc($result))
            { 
                $id=$row['id'];
                $leavetype=$row['leavetype'];
                $description=$row['description'];    
          
                echo '
                <tr>
                  <th scope="row">'.$i.'</th>
                    <td>'.$leavetype.'</td>
                    <td>'.$description.'</td>
                    <td><button><a href="http://localhost/leave_Management_System/view/admin/update_leavetype.php?updateid='.$id.'">Update</a></button>
                    <button><a href="delete_leave.php?deleteid='.$id.'">Delete</a></button></td>
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