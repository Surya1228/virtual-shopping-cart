<?php      
    include('connection.php');  
    $username = $_POST['uname'];  
    $password = $_POST['password'];  
    $email = $_POST['email']; 
       
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $email = stripcslashes($email);
          
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);
        $email = mysqli_real_escape_string($con, $email);  
      
        $sql = "select * from user_auth where name = '$username' and password = '$password' or email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("Location: ../index.html");  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  