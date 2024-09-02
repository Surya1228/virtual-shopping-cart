<!DOCTYPE html>
<html>
<head>
<title>COCONUT SHOP</title>
</head>
<link rel="wesite icon" value="png" href="../img/ccnt.png">
<style>
	body {
            background-image:url('../img/bg.png');
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: 100% 100%;
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

button:hover {
  opacity: 0.8;
}
.container {
  padding: 12px;
}

span.psw {
  float: right;
  padding-top: 10px;
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
  padding-top: 80px;
}
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 5% auto; 
  border: 3px solid #888;
  width: 50%; 
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
}
        </style>
<body>
<form class="modal-content animate">
	<div>
		<table border="2" width="100%">
			<thead>
				<th>User Name</th>
				<th>Password</th>
				<th>Email ID</th>
				<th>Actions</th>
			</thead>
			<tbody>
				<?php 
					$database="mini";
					$db1=mysqli_connect("localhost", "root", ""); 
					$db2=mysqli_select_db($db1,$database); 
					if($db2) 
					{       
           $q="select * from user";     
          $result=mysqli_query($db1,$q);
					while($row=mysqli_fetch_array($result))
					{
						?>
						<tr>
							<td><?php echo $row['uname']; ?></td>
							<td><?php echo $row['upassword']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><center>
								<a href="edit.php? id=<?php echo $row['userid']; ?>">Edit</a>
								<a href="delete.php? id=<?php echo $row['userid']; ?>">Delete</a>
							</center></td>
						</tr>
						<?php
					}
					}
				?>
			</tbody>
		</table>
	</div>
	</form>
	<form class="modal-content animate" action="../ad.html">
		 <input type="submit" value="Back">
	</form>
</body>
</html>