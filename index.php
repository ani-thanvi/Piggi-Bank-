<html>
<head>
    <title>Basic Banking System</title>
    <link rel="stylesheet" href="button.css">
	<style>
	button{
		background-color:#8cbed6;
		  border: none;
  color: black;
  padding: 30px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  margin: 4px 2px;
  cursor: pointer;
  font-family: "Lucida Console", Courier, monospace;
		border-radius: 12px;
	}
	tr{
		text-align:center;
	}
	body
	{
		text-align:center;
	}
		body{
		background-image:url("bank.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
	<style>
.button {
  border: none;
  color: white;
  padding: 30px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #fff;} 
.button2 {background-color: #fff;} 
</style>
</head>
<body >
<br>
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
	<div id="header">
       <br>
	   <br>
	   <br>
	   <br>
	   <br>
       <h2 style=" font-family:Agency FB; font-size: 55px;color:#FFF;text-shadow: 2px 2px black;"> SPARKS FOUNDATION BANKING SYSTEM </h2>
    </div>
        <div id="section">
            <table>
                <tr></tr>
                <tr><br>
				<a href="getdetail.php">
               <button class="button1" type="button" href="getdetail.php">USER DETAILS</button>
                </a>
                </tr>
				
			   <tr>        
               <br> <br> <br>
			   <a href="transaction.php">
			   <button class="button2" type="button">TRANSACTION INFO</button>
               </a>
               
               </tr>
            </table>
    </div>
</body>
</html>