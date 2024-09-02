<?php      
    include('connection.php');  
    $adminname = $_POST['name'];  
    $password = $_POST['password'];  
    $email = $_POST['email'];  
       
        $username = stripcslashes($adminname);  
        $password = stripcslashes($password); 
        $email = stripcslashes($email); 
        $username = mysqli_real_escape_string($con, $adminname);  
        $password = mysqli_real_escape_string($con, $password);
        $email = mysqli_real_escape_string($con, $email);  
      
        $sql = "select * from admin_auth where name = '$adminname' and password = '$password' or email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("Location: ../ad.html");  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  