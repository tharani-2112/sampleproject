<?php
$databaseHost = 'localhost';
$databaseName = 'leave_management';
$dbUsername = 'root';
$dbPassword = '';    
$mysqli = new mysqli($databaseHost, $dbUsername, $dbPassword, $databaseName); 
if(!$mysqli)
{
    die(mysqli_error($mysqli));
}  

$sql1="CREATE TABLE IF NOT EXISTS `admin`( id int,
username varchar(100),
password varchar(100),
PRIMARY KEY (id)
)";
$result1=mysqli_query($mysqli,$sql1);


$sql2="INSERT INTO `admin` (`id`, `UserName`, `Password`) VALUES
(1, 'admin', 'Test@123')";
$result2=mysqli_query($mysqli,$sql2);

$sql3="CREATE TABLE IF NOT EXISTS `tblemployees` (
    `id` int(11) NOT NULL,
    `firstName` varchar(150) NOT NULL,
    `lastName` varchar(150) NOT NULL,
    `email` varchar(200) NOT NULL,
    `mobile` varchar(200) NOT NULL,
    `Password` varchar(180) NOT NULL,
    `gender` varchar(100) NOT NULL,
    `state` varchar(200) NOT NULL,
    `country` varchar(150) NOT NULL,
    `address` varchar(255) NOT NULL,
    `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
  ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1";
  $result3=mysqli_query($mysqli,$sql3);


  $sql4="CREATE TABLE IF NOT EXISTS `tblleavetype` (
    `id` int(11) NOT NULL,
    `leavetype` varchar(200) DEFAULT NULL,
    `description` mediumtext,
    `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
  ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1";
  $result4=mysqli_query($mysqli,$sql4);
  

  $sql5="CREATE TABLE IF NOT EXISTS `tblleaves` ( 
    `lid` int(11) NOT NULL, 
    `name` varchar(110) NOT NULL,
    `email` varchar(110) NOT NULL,
    `leavetype` varchar(110) NOT NULL, 
    `todate` varchar(120) NOT NULL, 
    `fromdate` varchar(120) NOT NULL, 
    `reason` mediumtext NOT NULL, 
    `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, 
    `AdminRemark` mediumtext, 
    `Status` int(1) NOT NULL
  ) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1";
  $result5=mysqli_query($mysqli,$sql5);

  $sql6="CREATE TABLE IF NOT EXISTS `manageremployee` (
    `id` int(11) NOT NULL,
    `manager` int(11) NOT NULL,
    `employee`int(11) NOT NULL ,
    `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
  ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1";
  $result6=mysqli_query($mysqli,$sql6);
  
?>