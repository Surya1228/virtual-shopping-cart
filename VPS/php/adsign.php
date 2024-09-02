<?php
$name=$_POST["name"];
$password=$_POST["password"];

$database="mini_projects";
$db1=mysqli_connect("localhost", "", ""); 
$db2=mysqli_select_db($db1,$database); 
if($db2) 
{           
          $in="insert into admin values('$name','$password')";  
           mysqli_query($db1,$in);  
 } 
 header("Location: ../ad.html");
?> 
