<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking');

$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>viewUser</title>
   <link rel="stylesheet" href="button2.css">
   <link rel="stylesheet" href="trans_style.css">
   
	<style>
	.btn{
			cursor:pointer;
			COLOR:black;
			font-size: 30px;
			font-family: "Lucida Console", Courier, monospace;
		}
		body{
			text-align:center;
		}
		.flat-table-1 {
			color: black;
		}
		.flat-table-1 tr:hover 
		{background-color: #f5f5f5;}
		h1{
			font-family: Arial, Times, serif;
			font-size:50px;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			
			border-collapse:collapse;
			}
		th{
			color:blue;
			font-size:24px;
			padding:16px;
		}
		
		td{
			text-align:center;
			font-size:25px;
			color: black;
			padding: 0px 20px 0px 20px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
           border-bottom: 1px solid #ddd;

			
			text-shadow: 1px 1px black;
		}
		.css-button{
			margin-left:auto;
			margin-right:auto;
		}
		.button1{
			background-color:#db2d4a;
			COLOR:WHITE;
			font-size: 20px;
			border-radius: 5px;
			text-align:center;
			padding-top:2px;
		}
		
		.button1:hover{
			background-color:grey;
		}
		.view{
			top:50%;
			padding-top:20px;
			text-align:center;
		}
		.ho{
			padding-top:50px;
			padding-bottom:100px;
		}
		body{
		background-color: #c3c3c3;
		color: black;
	}
	</style>
	
</head>
	
<body>
	<div class="header">
      <div class="header-logo"><img src="bank1.png" height=50 weight=50></div>
	  <div class="header-head">Piggi Bank.</div>
      <div class="header-list">
        <ul>
			<li>  &nbsp;</li>
          <li><a href="#">Contact Us</a></li>
		  <li><a href="transaction.html">Transaction Dashboard</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="index.html">Home</a></li>
		  <li>  &nbsp;</li>
        </ul>
      </div>
    </div>
	<div class="main">
      <div class="copy-container">
	<h1 style="color:#ffF;text-shadow: 2px 2px black;" >USER DETAILS</h1>
    <table class="flat-table-1">
		<thead>
			<th>S_No.</th>
			<th>CUSTOMER NAME </th>
			<th>E-Mail</th>
			<th>BALANCE</th>
			<th></th>
		</thead>
		<tbody>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="Sneha">View</button>
				</form>
			</td>
		</tr>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 2</td>
			<td ><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Raghav">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 3</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Animesh">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 4</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Abhishek">View</button>
				</form>
			</td>
   

        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 5</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Rahul">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 6</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Aman">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
     
				$row=mysqli_fetch_array($result);
			?>
			<td> 7</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Kanika">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php   
				$row=mysqli_fetch_array($result);
			?>
			<td> 8</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Ishita">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 9</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Abhinav">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 10</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Rushil">View</button>
				</form>
			</td>
		</tr>
		</tbody>
	</table><br><br>

<div class="buttons">
	<a href="transaction.html">
    <button class="btn">HOME PAGE</button>
	</a>
</div>
</body>
</html>