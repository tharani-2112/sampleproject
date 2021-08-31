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
      <button><a href ="addemployee.php">Add Employee</a></button>
        <table class="table">
          <thead>
            <tr>
              <th>Sl.no</th>
              <th>Name</th>
              <th>Email</th>
              <th>Mobile</th>        
              <th>Gender</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php

          $sql="SELECT * FROM tblemployees WHERE deleted!=1";
          $result1=mysqli_query($mysqli,$sql);
          $query = "SELECT * FROM manageremployee";
          $result2 = mysqli_query($mysqli,$query);
          $assignedemp[0]= 0;
          
         if($result2== NULL){
          $assignedemp[0]= 0;
         }else{
           $i=0;
         while( $row1 = mysqli_fetch_array($result2)){  
          
          $assignedemp[$i]=$row1['employee'];
          $i++;
        }
      }
    
      
          if($result1)
          {                         
            $i=1;
            while($row=mysqli_fetch_assoc($result1))
            { 
                $id=$row['id'];
                $name=$row['firstName'];
                $email=$row['email'];
                $mobile=$row['mobile'];   
                $gender=$row['gender']; 
                $status=$row['manager'];
        
                $assignedstatus=0;
                if(in_array($id,$assignedemp)){
                  $assignedstatus = 1;
               }     

                if($status == 0){
                $status = 'Promote As Manager';
                $state=1;
               } elseif($status == 1){
                $status = 'Depromote As Employee';
                $state=0;
                }     
          
                echo' 
                <tr>
                  <th scope="row">'.$i.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>                   
                    <td>'.$gender.'</td>';
              if($assignedstatus==1){
              
                      echo'<td><button name="submit" >Already Assigned</button>';
                    }
              else{
                 echo'<td><button name="submit" ><a href="http://localhost/leave_Management_System/controller/promotemanager_controller.php?managerstatus='.$state.'&promoteid='.$id.'&f=p"> '.$status.'</a></button>';
              if($state==0){
                 echo '<button name="submit" ><a href="http://localhost/leave_Management_System/controller/promotemanager_controller.php?promoteid='.$id.'&f=v & ">view</a></button>';
                }
                else{
                  echo '';
                }
              }
                echo  '<button><a href="update_employee.php?updateid='.$id.'">Update</a></button>
                    <button><a href="delete_employee.php?deleteid='.$id.'">Delete</a></button></td>
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
<h3>Manager Employee Details</h3>
<?php
include "manager_list.php";
?>