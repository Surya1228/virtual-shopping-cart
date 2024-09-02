<!DOCTYPE html>
<html lang="en">
<title>COCONUT SHOP</title>
<head>
<link rel="wesite icon" value="png" href="../img/ccnt.png">
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<style>
	body {
            background-image:url('../img/bg.png');
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: 100% 100%;
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
	<link rel="stylesheet" href="../css/bill.css" class="css" />
</head>
<body>
	<div class="container">
	<div class="main-content">
		<p class="text">COCONUT SHOP</p>
	</div>

	<div class="centre-content">
		<h1 class="price">
		<span>
<?php
$database="mini";
$db1=mysqli_connect("localhost", "root", ""); 
$db2=mysqli_select_db($db1,$database); 
if($db2) 
{               
           $q="select * from qr";     
          $result=mysqli_query($db1,$q);     

 while($row=mysqli_fetch_array($result))  
  {                   
echo $row['qrcode'];
}
}
?>/-</span></h1>
		<p class="course">
		Thank You for shopping !
		</p>
	</div>

	<div class="last-content">
		<button type="button" class="pay-now-btn">
		Apply Coupons
		</button>
		<button type="button" class="pay-now-btn">
		Pay with Netbanking
		</button>

	
	</div>
<form class="animate">
	<div class="card-details">
		<p>Pay using Credit or Debit card</p>

		<div class="card-number">
		<label> Card Number </label>
		<input type="text" class="card-number-field" placeholder="###-###-###" />
		</div>
		<br />
		<div class="date-number">
		<label> Expiry Date </label>
		<input type="date" class="date-number-field" placeholder="DD-MM-YY" />
		</div>

		<div class="cvv-number">
		<label> CVV number </label>
		<input type="text" class="cvv-number-field" placeholder="xxx" />
		</div>
		<div class="nameholder-number">
		<label> Card Holder name </label>
		<input type="text" class="card-name-field" placeholder="Enter your Name"/>
		</div>
		</form>
		<button type="submit" class="submit-now-btn" onclick="myFunction()">submit</button>
		<script>
		function myFunction() 
		{
  alert("Thank You For Shopping !");
}</script>
<button type="button" class="submit-now-btn" onclick="history.back();">Back</button>
	</div>
	</div>
</body>
</html>
