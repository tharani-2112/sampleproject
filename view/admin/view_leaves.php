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
    <button><a href ="admin_page.php">Back to Home</a></button>
        <table class="table">
          <thead>
            <tr>
              <th>Sl.no</th>
              <th>Name</th>
              <th>Email</th>
              <th>Leave Type</th>  
              <th>Reason </th>      
              <th>From Date</th>
              <th>To Date</th>
              <th>Status</th>
              <th>AdminRemarks</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php

          $query = "SELECT e.id,e.firstName,e.email,e1.lid,e1.leavetype,e1.reason,e1.fromdate,e1.todate,e1.status,e1.adminremarks FROM tblemployees e, tblapplyleave e1 WHERE
                    e.email = e1.email AND manager!=0 ";
          $result=mysqli_query($mysqli,$query);
          
          if($result)
          {                         
            $i=1;
            while($row=mysqli_fetch_assoc($result))
            { 
                $id        = $row['id'];
                $name      = $row['firstName'];
                $email     = $row['email'];
                $leavetype = $row['leavetype'];
                $reason    = $row['reason']; 
                $leaveid   = $row['lid'];
                $fromdate  = $row['fromdate'];
                $todate    = $row['todate'];
                $status    = $row['status'];
                $remark    = $row['adminremarks'];

                if($status == 'Requested'){
                $button= 'Take Action';
                
               } else{
                $button = 'Change Action';
                
                }     
                echo '
                <tr>
                  <th scope="row">'.$i.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$leavetype.'</td>  
                    <td>'.$reason.'</td>  
                    <td>'.$fromdate.'</td>                   
                    <td>'.$todate.'</td>
                    <td>'.$status.'</td>  
                    <td>'.$remark.'</td>
                    
                    <td><button><a href="action.php?actionid='.$leaveid.'">'.$button.'</a></button></td>
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
