<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `user` where userid='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>COCONUT SHOP</title>
<link rel="wesite icon" value="png" href="../img/ccnt.png">
<style>
body  {
            background-image:url('../img/bg.png');
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: 100% 100%;
        } 
        {
        font-family: Arial, Helvetica, sans-serif;
        }

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

.modal {
  display: none; 
  position: fixed;
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto;
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
  padding-top: 60px;
}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto 5% auto; 
  border: 3px solid #888;
  width: 50%; 
}

.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
	<form class="modal-content animate" method="POST" action="update.php? id=<?php echo $id; ?>">
	<div class="imgcontainer">
      <span class="close" title="Close Modal">&times;</span>
      <img src="../img/avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
		<label for="uname">User Name</label>
		<input type="text" value="<?php echo $row['uname']; ?>" name="uname" required>
		
		<label for="upassword">Password</label>
		<input type="password" value="<?php echo $row['upassword']; ?>" name="upassword" required>
		
		<label for="email">Email</label>
		<input type="text" value="<?php echo $row['email']; ?>" name="email" required>
		
		<input type="submit" name="submit">
	</form>
	<button type="button" onclick="history.back();">Back</button>
</body>
</html>